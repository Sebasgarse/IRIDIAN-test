import { Injectable } from '@angular/core';
import { Contact } from 'src/app/contact-information';
import axios from 'axios';

@Injectable({
  providedIn: 'root',
})
export class GetContactService {
  constructor() {}

  async get(): Promise<Contact[]> {
    const resp = await axios.get<Contact[]>('http://localhost:3000/types');
    return resp.data;
  }
}
