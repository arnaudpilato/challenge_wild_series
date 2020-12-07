<?php
namespace App\Controller;
use App\Entity\Category;
use App\Entity\Program;
use App\Entity\Actor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/actor", name="actor_")
 */
class ActorController extends AbstractController
{
    /**
     * @param Actor $actor
     * @return Response
     * @Route ("/{id}", requirements={"id"="\d+"}, name="show", methods={"GET"})
     */
    public function show(Actor $actor): Response
    {
        return $this->render('actor/show.html.twig', [
            'actor' => $actor,
            'programs' => $actor->getPrograms(),
        ]);
    }
}