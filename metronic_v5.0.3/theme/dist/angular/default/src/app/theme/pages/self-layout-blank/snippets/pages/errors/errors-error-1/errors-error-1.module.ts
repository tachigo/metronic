import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { ErrorsError1Component } from './errors-error-1.component';
import { LayoutModule } from '../../../../../../layouts/layout.module';

const routes: Routes = [
    {
        "path": "",
        "component": ErrorsError1Component
    }
];
@NgModule({imports: [
CommonModule,RouterModule.forChild(routes),LayoutModule
],exports: [
RouterModule
],declarations: [
ErrorsError1Component
]})
export class ErrorsError1Module  {



}