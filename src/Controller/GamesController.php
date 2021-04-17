<?php

namespace App\Controller;

use App\Entity\Games;
use App\Form\GamesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

/**
 * @Route("/games")
 */
class GamesController extends AbstractController
{
    /**
     * @Route("/", name="games_index", methods={"GET"})
     */
    public function index(): Response
    {
        $games = $this->getDoctrine()
            ->getRepository(Games::class)
            ->findAll();

        return $this->render('games/index.html.twig', [
            'games' => $games,
        ]);
    }

    /**
     * @Route("/new", name="games_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $package = new Package(new EmptyVersionStrategy());
        $game = new Games();
        $form = $this->createForm(GamesType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $cover = $form->get('gameCover')->getData();

            if ($cover) {
                $originalFilename = pathinfo($cover->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename .'-'.uniqid().'.'.$cover->guessExtension();

                // Move the file to the directory where brochures are stored
                $cover->move(
                    $this->getParameter('upload_directory') ,
                    $newFilename
                );


                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $game->setGameCover($newFilename);
            }

            $entityManager->persist($game);
            $entityManager->flush();
            return $this->redirectToRoute('games_index');
        }

        return $this->render('games/new.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{gameId}", name="games_show", methods={"GET"})
     */
    public function show(Games $game): Response
    {
        return $this->render('games/show.html.twig', [
            'game' => $game,
        ]);
    }

    /**
     * @Route("/{gameId}/edit", name="games_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Games $game): Response
    {
        $form = $this->createForm(GamesType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('games_index');
        }

        return $this->render('games/edit.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{gameId}", name="games_delete", methods={"POST"})
     */
    public function delete(Request $request, Games $game): Response
    {
        if ($this->isCsrfTokenValid('delete'.$game->getGameId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($game);
            $entityManager->flush();
        }

        return $this->redirectToRoute('games_index');
    }
}
