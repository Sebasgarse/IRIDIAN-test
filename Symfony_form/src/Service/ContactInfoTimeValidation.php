<?php

namespace App\Service;

use App\Repository\ContactsRepository;

class ContactInfoTimeValidation
{
    private $contacts;

    public function __construct(ContactsRepository $contacts)
    {
        $this->contacts = $contacts;
    }

    public function AlreadyDoneToday(string $email)
    {
        $contacts = $this->contacts->getLast($email);
        if (empty($contacts)) {
            return false;
        }
        $contact = $contacts[0];
        $today = date('Y-m-d');
        $last_time = date_format($contact->getCreatedAt(), 'Y-m-d');
        if ($today == $last_time) {
            return true;
        }
        return false;
    }
}
