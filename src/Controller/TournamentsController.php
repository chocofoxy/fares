<?php

namespace App\Controller;

use App\Entity\Tournaments;
use App\Form\TournamentsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tournaments")
 */
class TournamentsController extends AbstractController
{
    /**
     * @Route("/", name="tournaments_index", methods={"GET"})
     */
    public function index(): Response
    {
        $tournaments = $this->getDoctrine()
            ->getRepository(Tournaments::class)
            ->findAll();

        return $this->render('tournaments/index.html.twig', [
            'tournaments' => $tournaments,
        ]);
    }

    /**
     * @Route("/new", name="tournaments_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tournament = new Tournaments();
        $form = $this->createForm(TournamentsType::class, $tournament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tournament);
            $entityManager->flush();

            return $this->redirectToRoute('tournaments_index');
        }

        return $this->render('tournaments/new.html.twig', [
            'tournament' => $tournament,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{trId}", name="tournaments_show", methods={"GET"})
     */
    public function show(Tournaments $tournament): Response
    {
        return $this->render('tournaments/show.html.twig', [
            'tournament' => $tournament,
        ]);
    }

    /**
     * @Route("/{trId}/edit", name="tournaments_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tournaments $tournament): Response
    {
        $form = $this->createForm(TournamentsType::class, $tournament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tournaments_index');
        }

        return $this->render('tournaments/edit.html.twig', [
            'tournament' => $tournament,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{trId}", name="tournaments_delete", methods={"POST"})
     */
    public function delete(Request $request, Tournaments $tournament): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tournament->getTrId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tournament);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tournaments_index');
    }
}
