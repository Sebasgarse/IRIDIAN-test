<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Entity\ContactTypes;
use App\Form\Type\ContactType;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/', name: 'app_contact')]
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $ar = ['Linkedin', 'Facebook', 'Referidos', 'Twitter', 'Otro'];
        $contact = new Contacts();
        $contactTypes = $doctrine->getRepository(ContactTypes::class)->findAll();
        if (empty($contactTypes)) {
            foreach ($ar as $value) {
                $contact_type = new ContactTypes();
                $contact_type->setName($value);
                $entityManager->persist($contact_type);
                $entityManager->flush();
            }
            $contactTypes = $doctrine->getRepository(ContactTypes::class)->findAll();
        }

        $form = $this->createForm(ContactType::class, $contact, ['types' => $contactTypes]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $type = $doctrine->getRepository(ContactTypes::class)->find($form['contact_type_id']->getData());
            $contact->setContactType($type);
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('app_contact_success');
        }


        return $this->renderForm('contact/index.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/success', name: 'app_contact_success')]
    public function success(): Response
    {
        return $this->render('contact/success.html.twig');
    }

    #[Route('/error', name: 'app_contact_error')]
    public function failure(): Response
    {
        return $this->render('contact/failure.html.twig');
    }
}
