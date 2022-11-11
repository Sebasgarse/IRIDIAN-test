<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Form\Type\ContactType;
use App\Service\ContactTypesManager;
use App\Service\HandleSubmittedData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/', name: 'app_contact')]
    public function index(
        HandleSubmittedData $handleSubmittedData,
        ContactTypesManager $contactTypesManager
    ): Response {
        $contact = new Contacts();

        $form = $this->createForm(ContactType::class, $contact, ['types' => $contactTypesManager->getTypes()]);

        $result = $handleSubmittedData->handle($form, $contact);


        if ($result == $handleSubmittedData->ALREADY) {
            return $this->redirectToRoute('app_contact_already');
        }

        if ($result == $handleSubmittedData->SUCCESS) {
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
