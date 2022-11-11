<?php

namespace App\Service;

use App\Entity\ContactTypes;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;

class HandleSubmittedData
{
    private $doctrine;
    private $request;
    private $contactInfoTimeValidation;

    public $ALREADY = 'already';
    public $SUCCESS = 'success';

    public function __construct(ManagerRegistry $doctrine, RequestStack $request, ContactInfoTimeValidation $contactInfoTimeValidation)
    {
        $this->doctrine = $doctrine;
        $this->request = $request->getCurrentRequest();
        $this->contactInfoTimeValidation = $contactInfoTimeValidation;
    }

    public function handle($form, $contact): string | false
    {
        $form->handleRequest($this->request);
        if ($form->isSubmitted() && $form->isValid()) {

            if ($this->contactInfoTimeValidation->AlreadyDoneToday($form['email']->getData())) {
                return $this->ALREADY;
            }

            $type = $this->doctrine->getRepository(ContactTypes::class)->find($form['contact_type_id']->getData());
            $contact->setContactType($type);

            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->SUCCESS;
        }
        return false;
    }
}
