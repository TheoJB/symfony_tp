<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\Entreprise;
use App\Entity\Formation;


class ProStagesController extends AbstractController
{
    public function index(): Response
    {
      //Recupérer le repository de l'entité stage
      $repositoryStage = $this->getDoctrine()->getRepository(stage::class);

      //Récupérer les stages enregistrées en BD
      $stages = $repositoryStage->findAll();

      //Envoyer les stages à la vue chargée de les afficher
        return $this->render('pro_stages/index.html.twig', ['stages'=>$stages]);
    }

    public function entreprise(): Response
  {
    $repositoryEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);

    //Récupérer les stages enregistrées en BD
    $entreprises = $repositoryEntreprise->findAll();

      return $this->render('pro_stages/entreprise.html.twig', [
        'entreprises'=>$entreprises,
      ]);
  }

  public function formation(): Response
{
    $repositoryFormation = $this->getDoctrine()->getRepository(Formation::class);
    $formations = $repositoryFormation->findAll();

    return $this->render('pro_stages/formation.html.twig', [
        'formations'=>$formations
    ]);
}

  public function stage($id): Response
{  //Recupérer le repository de l'entité stage
      $repositoryStage = $this->getDoctrine()->getRepository(stage::class);

      //Récupérer les stages enregistrées en BD
      $stage = $repositoryStage->find($id);
    return $this->render('pro_stages/stage.html.twig', [
        'id' => $id, 'stage'=>$stage
  ]);
}

public function formationStages($id): Response
{  //Recupérer le repository de l'entité stage
    $repositoryFormation = $this->getDoctrine()->getRepository(Formation::class);

    //Récupérer les stages enregistrées en BD
    $formation = $repositoryFormation->find($id);
  return $this->render('pro_stages/formationStage.html.twig', [
      'id' => $id, 'formation'=>$formation
]);
}

public function entrepriseStages($id): Response
{  //Recupérer le repository de l'entité stage
    $repositoryEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);

    //Récupérer les stages enregistrées en BD
    $entreprise = $repositoryEntreprise->find($id);
  return $this->render('pro_stages/entrepriseStage.html.twig', [
      'id' => $id, 'entreprise'=>$entreprise
]);
}

}
