<?php

namespace App\Controller;

use App\Entity\TournamentsIntr;
use App\Form\TournamentsIntrType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tournaments/intr")
 */
class TournamentsIntrController extends AbstractController
{
    /**
     * @Route("/", name="tournaments_intr_index", methods={"GET"})
     */
    public function index(): Response
    {
        $tournamentsIntrs = $this->getDoctrine()
            ->getRepository(TournamentsIntr::class)
            ->findAll();

        return $this->render('tournaments_intr/index.html.twig', [
            'tournaments_intrs' => $tournamentsIntrs,
        ]);
    }

    /**
     * @Route("/new", name="tournaments_intr_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tournamentsIntr = new TournamentsIntr();
        $form = $this->createForm(TournamentsIntrType::class, $tournamentsIntr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tournamentsIntr);
            $entityManager->flush();

            return $this->redirectToRoute('tournaments_intr_index');
        }

        return $this->render('tournaments_intr/new.html.twig', [
            'tournaments_intr' => $tournamentsIntr,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{trId}", name="tournaments_intr_show", methods={"GET"})
     */
    public function show(TournamentsIntr $tournamentsIntr): Response
    {
        return $this->render('tournaments_intr/show.html.twig', [
            'tournaments_intr' => $tournamentsIntr,
        ]);
    }

    /**
     * @Route("/{trId}/edit", name="tournaments_intr_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TournamentsIntr $tournamentsIntr): Response
    {
        $form = $this->createForm(TournamentsIntrType::class, $tournamentsIntr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tournaments_intr_index');
        }

        return $this->render('tournaments_intr/edit.html.twig', [
            'tournaments_intr' => $tournamentsIntr,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{trId}", name="tournaments_intr_delete", methods={"POST"})
     */
    public function delete(Request $request, TournamentsIntr $tournamentsIntr): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tournamentsIntr->getTrId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tournamentsIntr);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tournaments_intr_index');
    }
}
