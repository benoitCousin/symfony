<?php

// src/Controller/ProgramController.php

namespace App\Controller;

use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

    /**
    * @Route("/programs", name="program_")
    */
class ProgramController extends AbstractController

{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {

        return $this->render('program/index.html.twig', [
            'website' => 'Wild Séries',
         ]);
    }

    /**
     * @Route("/{id}", methods={"GET"}, name="show")
     */
    public function show(int $id): Response
    {
        if(is_int($id)){
            return $this->render('program/show.html.twig', [
                'id' => $id,
            ]);
        }

    }
}