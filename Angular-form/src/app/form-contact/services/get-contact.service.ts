import { Injectable } from '@angular/core';
import { Contact } from 'src/app/contact-information';

@Injectable({
  providedIn: 'root'
})
export class GetContactService {

  constructor() { }

  get(): Contact[] {
    return [
      {id: 1, name: 'linkedin'},
      {id: 2, name: 'Facebook'},
      {id: 3, name: 'Amigo'},
      {id: 4, name: 'Familiar'},
      {id: 5, name: 'Twitter'},
    ];
  }
}
