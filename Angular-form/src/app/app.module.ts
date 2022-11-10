import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormContactComponent } from './form-contact/form-contact.component';
import { FormSuccessComponent } from './form-success/form-success.component';

@NgModule({
  declarations: [
    AppComponent,
    FormContactComponent,
    FormSuccessComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
