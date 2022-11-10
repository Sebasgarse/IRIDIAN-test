<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Entity\ContactTypes;
use App\Form\Type\ContactType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/', name: 'app_contact')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // $entityManager = $doctrine->getManager();
        // $ar = ['Linkedin', 'Facebook', 'Referidos', 'Twitter', 'Otro'];
        $contact = new Contacts();
        $contactTypes = $doctrine->getRepository(ContactTypes::class)->findAll();
        // foreach ($ar as $value) {
        //     $contact_type = new ContactTypes();
        //     $contact_type->setName($value);
        //     $entityManager->persist($contact_type);
        //     $entityManager->flush();
        // }

        $form = $this->createForm(ContactType::class, $contact, ['types' => $contactTypes]);
        return $this->renderForm('contact/index.html.twig', [
            'form' => $form,
        ]);
    }
}
