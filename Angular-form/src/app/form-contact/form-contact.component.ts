import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ContactInformation } from '../contact-information';
import { SendFormService } from './services/send-form.service';

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

  constructor(private router: Router, private sendForm: SendFormService) { }

  ngOnInit(): void {
  }

  onSave(): void {
    this.sendForm.send(this.contactInformation);
  }

}
