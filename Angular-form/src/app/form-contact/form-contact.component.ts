import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Contact, ContactInformation } from '../contact-information';
import { SendFormService } from './services/send-form.service';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { GetContactService } from './services/get-contact.service';

@Component({
  selector: 'app-form-contact',
  templateUrl: './form-contact.component.html',
  styleUrls: ['./form-contact.component.css']
})
export class FormContactComponent implements OnInit {

  contactInformation: ContactInformation = {
    name: '',
    surname: '',
    email: '',
    telephone: '',
    contact: '',
    message: ''
  }

  contactForm = new FormGroup({
    name: new FormControl(this.contactInformation.name, [
      Validators.required
    ]),
    surname: new FormControl(this.contactInformation.surname),
    email: new FormControl(this.contactInformation.email, [Validators.required, Validators.email]),
    telephone: new FormControl(this.contactInformation.telephone, Validators.required),
    contact: new FormControl(this.contactInformation.contact, Validators.required),
    message: new FormControl(this.contactInformation.message, Validators.required)
  })

  constructor(private router: Router, private sendForm: SendFormService, private getContact: GetContactService) {}

  ngOnInit(): void {

  }

  onSubmit(): void {
    this.sendForm.send(this.contactForm.value as ContactInformation).then(() => {
      this.router.navigate(['success']);
    }).catch(() => {
      this.router.navigate(['error']);
    });
  }

  get name() { return this.contactForm.get('name'); }

  get surname() { return this.contactForm.get('surname'); }

  get email() { return this.contactForm.get('email'); }

  get telephone() { return this.contactForm.get('telephone'); }

  get contact() { return this.contactForm.get('contact'); }

  get message() { return this.contactForm.get('message'); }

  get contacts(): Contact[] { return this.getContact.get(); }

}
