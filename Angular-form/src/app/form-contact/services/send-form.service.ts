import { Injectable } from '@angular/core';
import { ContactInformation } from 'src/app/contact-information';

@Injectable({
  providedIn: 'root'
})
export class SendFormService {

  constructor() { }

  send(contactInformation: ContactInformation): Promise<void> {
  return new Promise((resolve) => {
    resolve();
  })  
  }
}
