<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Entity\ContactTypes;
use App\Form\Type\ContactType;
use App\Service\ContactInfoTimeValidation;
use App\Service\ContactTypesManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/', name: 'app_contact')]
    public function index(
        ManagerRegistry $doctrine,
        Request $request,
        ContactTypesManager $contactTypesManager,
        ContactInfoTimeValidation $contactInfoTimeValidation
    ): Response {
        $entityManager = $doctrine->getManager();
        $contact = new Contacts();

        $form = $this->createForm(ContactType::class, $contact, ['types' => $contactTypesManager->getTypes()]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($contactInfoTimeValidation->AlreadyDoneToday($form['email']->getData())) {
                return $this->redirectToRoute('app_contact_already');
            }
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

    #[Route('/already', name: 'app_contact_already')]
    public function already(): Response
    {
        return $this->render('contact/already.html.twig');
    }
}
