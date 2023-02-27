<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'categorie',methods:'GET')]
    public function listeCategorie(CategorieRepository $repo): Response
    {
        $categories=$repo->findAll();
        return $this->render('categorie/listeCategorie.html.twig', [
            'lesCategories' => $categories
        ]); 
    }

    #[Route('/categorie/{id}', name: 'fichecategorie',methods:'GET')]
    public function ficheCategorie(Categorie $categorie ): Response
    {
       
        return $this->render('categorie/ficheCategorie.html.twig', [
            'laCategorie' => $categorie
        ]); 
    }

}
