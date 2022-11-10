import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormContactComponent } from './form-contact/form-contact.component';
import { FormSuccessComponent } from './form-success/form-success.component';
import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { FormErrorComponent } from './form-error/form-error.component';
import { LandImageComponent } from './land-image/land-image.component';

@NgModule({
  declarations: [
    AppComponent,
    FormContactComponent,
    FormSuccessComponent,
    FooterComponent,
    HeaderComponent,
    FormErrorComponent,
    LandImageComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ReactiveFormsModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
