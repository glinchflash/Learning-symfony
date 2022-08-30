<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class LearningController extends AbstractController
{
    #[Route('/aboutme', name: 'app_learning')]
    public function aboutMe():Response
    {
        return $this->render('learning/index.html.twig', [
            'name' => 'Glenn',
        ]);
    }

    #[Route('/', name: 'homepage')]
    public function showMyName()
    {
        return $this->render('Homepage/homepage.html.twig',[
            'name' => 'Unknown',
            'changeName' =>$this->changeMyName(),
        ]);
    }
    #[Route('/changeName', name: 'changeName/changeName.html.twig')]
    public function changeMyName()
    {
        $session = new Session();

        return $this->render('changeName/changeName.html.twig',[
            'name' => 'xd',

        ]);
    }

}
