<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/blog', name: 'blog_list')]
    public function viewAction(): Response
    {
        return $this->render('default.html.twig');
    }


}
