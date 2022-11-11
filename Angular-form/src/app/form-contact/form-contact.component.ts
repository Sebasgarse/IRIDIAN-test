import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Contact, ContactInformation } from '../contact-information';
import { SendFormService } from './services/send-form.service';
import {
  AbstractControl,
  FormControl,
  FormGroup,
  Validators,
} from '@angular/forms';
import { GetContactService } from './services/get-contact.service';

@Component({
  selector: 'app-form-contact',
  templateUrl: './form-contact.component.html',
  styleUrls: ['./form-contact.component.css'],
})
export class FormContactComponent implements OnInit {
  contactInformation: ContactInformation = {
    name: '',
    surname: '',
    email: '',
    telephone: '',
    contact: 0,
    message: '',
  };

  contacts: Contact[] = [];

  contactForm = new FormGroup({
    name: new FormControl(this.contactInformation.name, [Validators.required]),
    surname: new FormControl(this.contactInformation.surname),
    email: new FormControl(this.contactInformation.email, [
      Validators.required,
      Validators.email,
    ]),
    telephone: new FormControl(
      this.contactInformation.telephone,
      Validators.required
    ),
    contact: new FormControl(
      this.contactInformation.contact,
      Validators.required
    ),
    message: new FormControl(
      this.contactInformation.message,
      Validators.required
    ),
  });

  constructor(
    private router: Router,
    private sendForm: SendFormService,
    private getContact: GetContactService
  ) {
    this.getContacts;
  }

  ngOnInit(): void {}

  onClickRadio(id: number): void {
    this.contact?.setValue(id);
  }

  onSubmit(): void {
    this.sendForm
      .send(this.contactForm.value as ContactInformation)
      .then(() => {
        this.router.navigate(['success']);
      })
      .catch(() => {
        this.router.navigate(['error']);
      });
  }

  async getContacts() {
    this.contacts = await this.getContact.get();
  }

  get name(): AbstractControl<string | null, string | null> | null {
    return this.contactForm.get('name');
  }

  get surname(): AbstractControl<string | null, string | null> | null {
    return this.contactForm.get('surname');
  }

  get email(): AbstractControl<string | null, string | null> | null {
    return this.contactForm.get('email');
  }

  get telephone(): AbstractControl<string | null, string | null> | null {
    return this.contactForm.get('telephone');
  }

  get contact(): AbstractControl<number | null, number | null> | null {
    return this.contactForm.get('contact');
  }

  get message(): AbstractControl<string | null, string | null> | null {
    return this.contactForm.get('message');
  }
}
