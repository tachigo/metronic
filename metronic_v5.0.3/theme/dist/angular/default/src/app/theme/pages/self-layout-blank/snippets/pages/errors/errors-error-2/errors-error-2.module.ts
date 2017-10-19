import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { ErrorsError2Component } from './errors-error-2.component';
import { LayoutModule } from '../../../../../../layouts/layout.module';

const routes: Routes = [
    {
        "path": "",
        "component": ErrorsError2Component
    }
];
@NgModule({imports: [
CommonModule,RouterModule.forChild(routes),LayoutModule
],exports: [
RouterModule
],declarations: [
ErrorsError2Component
]})
export class ErrorsError2Module  {



}