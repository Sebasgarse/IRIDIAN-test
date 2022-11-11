<?php

namespace App\Service;

use App\Entity\ContactTypes;
use Doctrine\Persistence\ManagerRegistry;

class ContactTypesManager
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getTypes(): array
    {
        $contactTypes = $this->doctrine->getRepository(ContactTypes::class)->findAll();
        if (empty($contactTypes)) {
            $this->generateDefaultTypes();
            $contactTypes = $this->doctrine->getRepository(ContactTypes::class)->findAll();
        }
        return $contactTypes;
    }

    private function generateDefaultTypes(): void
    {
        $entityManager = $this->doctrine->getManager();
        $ar = ['Linkedin', 'Facebook', 'Referidos', 'Twitter', 'Otro'];

        foreach ($ar as $value) {
            $contact_type = new ContactTypes();
            $contact_type->setName($value);
            $entityManager->persist($contact_type);
            $entityManager->flush();
        }
    }
}
