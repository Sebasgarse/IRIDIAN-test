import { Injectable } from '@angular/core';
import { ContactInformation } from 'src/app/contact-information';
import axios from 'axios';

@Injectable({
  providedIn: 'root',
})
export class SendFormService {
  constructor() {}

  async send(contactInformation: ContactInformation): Promise<void | string> {
    const resp = await axios.post(
      'http://localhost:3000/save',
      contactInformation
    );

    if (resp.status !== 201) {
      return resp.statusText;
    }
    return;
  }
}
