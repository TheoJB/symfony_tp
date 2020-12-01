<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProStagesController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('pro_stages/index.html.twig', [
          
        ]);
    }

    public function entreprise(): Response
  {
      return $this->render('pro_stages/entreprise.html.twig', [

      ]);
  }

  public function formation(): Response
{
    return $this->render('pro_stages/formation.html.twig', [

    ]);
}

  public function stage($id): Response
{
    return $this->render('pro_stages/stage.html.twig', [
        'id' => $id,
  ]);
}

}
