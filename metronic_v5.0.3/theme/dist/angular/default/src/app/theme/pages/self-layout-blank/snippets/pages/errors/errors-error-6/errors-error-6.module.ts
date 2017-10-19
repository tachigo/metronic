import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { ErrorsError6Component } from './errors-error-6.component';
import { LayoutModule } from '../../../../../../layouts/layout.module';

const routes: Routes = [
    {
        "path": "",
        "component": ErrorsError6Component
    }
];
@NgModule({imports: [
CommonModule,RouterModule.forChild(routes),LayoutModule
],exports: [
RouterModule
],declarations: [
ErrorsError6Component
]})
export class ErrorsError6Module  {



}