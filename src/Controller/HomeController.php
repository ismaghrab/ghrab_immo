<?php

namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
class HomeController extends AbstractController
{

    public function index(PropertyRepository $repository):Response
    {
        $property = $repository->findLatest();
        return $this->render('pages/home.html.twig',
    [
        'properties' => $property
    ]);
        // return new Response("salut");
    }
    
}
