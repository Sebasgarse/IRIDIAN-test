import { Controller, Get, Post } from '@nestjs/common';
import { AppService } from './app.service';
import { Contact } from './contact-information';

@Controller()
export class AppController {
  constructor(private readonly appService: AppService) {}

  @Get()
  getHello(): string {
    return '/types to get types </br> /save to send the data';
  }

  @Get('/types')
  getTypes(): Contact[] {
    return [
      { id: 1, name: 'Linkedin' },
      { id: 2, name: 'Facebook' },
      { id: 3, name: 'Amigo' },
      { id: 4, name: 'Familiar' },
      { id: 5, name: 'Twitter' },
    ];
  }

  @Post('/save')
  save(): string {
    return 'success';
  }
}
