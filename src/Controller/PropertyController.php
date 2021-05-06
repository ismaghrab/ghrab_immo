<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{

    private $repository;

    function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }
    
    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */

    public function index():Response
    {
      $property = $this->repository->findall();
      dump($property);
    
        return $this->render("/property/index.html.twig",
    [
        "current_menu" => 'properties'
    ]);
    }
}
