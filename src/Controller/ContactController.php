<?php

namespace App\Controller;


use App\Entity\Contact;
use App\Repository\ContactRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{


    #[Route('/contacts', name: 'contacts', methods:'GET')]
    public function listeContact(ContactRepository $repo, ManagerRegistry $doctrine): Response
    {
        // $manager = $doctrine->getManager();
        // $repo = $manager->getRepository(Contact::class);
        $Contacts = $repo->findAll();
        return $this->render('contact/listeContacts.html.twig', [
            'lesContacts' => $Contacts
        ]);
    } 

    #[Route('/contact/{id}', name: 'ficheContact', methods:'GET')]
    public function ficheContact(Contact $Contact): Response
    {
        // $Contact = $repo->find($id);
        return $this->render('contact/ficheContact.html.twig', [
            'leContact' => $Contact
        ]);
    } 



}
 