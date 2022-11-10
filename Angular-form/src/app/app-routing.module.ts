import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { FormContactComponent } from './form-contact/form-contact.component';
import { FormErrorComponent } from './form-error/form-error.component';
import { FormSuccessComponent } from './form-success/form-success.component';

const routes: Routes = [
  { path: 'success', component: FormSuccessComponent },
  { path: 'error', component: FormErrorComponent },
  { path: '', component: FormContactComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
