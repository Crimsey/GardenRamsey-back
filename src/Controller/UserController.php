<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(): Response
    {
        /*return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);*/
        $entityManager = $this->getDoctrine()->getManager();
        $user = new User();
        $user->setFirstName('Jakub');
        $user->setLastName('Sokół');
        $user->setLogin('kubek');
        $user->setPassword('12345678');
        $user->setEmail('kubsok2@wp.pl');
        $entityManager->persist($user);
        $entityManager->flush();
        return new Response('Saved new product with id '.$user->getId());
    }
}
