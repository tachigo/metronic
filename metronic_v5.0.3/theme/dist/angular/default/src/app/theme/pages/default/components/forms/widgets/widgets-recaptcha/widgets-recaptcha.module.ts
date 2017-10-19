import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RecaptchaModule } from 'ng-recaptcha';
import { Routes, RouterModule } from '@angular/router';
import { WidgetsRecaptchaComponent } from './widgets-recaptcha.component';
import { LayoutModule } from '../../../../../../layouts/layout.module';
import { DefaultComponent } from '../../../../default.component';

const routes: Routes = [
    {
        "path": "",
        "component": DefaultComponent,
        "children": [
            {
                "path": "",
                "component": WidgetsRecaptchaComponent
            }
        ]
    }
];
@NgModule({imports: [
RecaptchaModule.forRoot(),
CommonModule,RouterModule.forChild(routes),LayoutModule
],exports: [
RouterModule
],declarations: [
WidgetsRecaptchaComponent
]})
export class WidgetsRecaptchaModule  {



}