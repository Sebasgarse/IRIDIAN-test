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

    public function AlreadyDoneToday(string $email): bool
    {
        $contacts = $this->contacts->getLast($email);
        if (!empty($contacts)) {
            return true;
        }
        $contact = $contacts[0];
        $today = date('Y-m-d');
        $last_time = date_format($contact->created_at, 'Y-m-d');
        if ($today == $last_time) {
            return true;
        }
        return false;
    }
}
