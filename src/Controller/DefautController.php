<?php

namespace App\Controller;

use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefautController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index() : Response
    {
        return $this->render('index.html.twig', [
            'bienvenue' => 'Bienvenue sur Wild Series',
        ]);
    }
}
