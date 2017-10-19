import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { UserLogin2Component } from './user-login-2.component';
import { LayoutModule } from '../../../../../../layouts/layout.module';

const routes: Routes = [
    {
        "path": "",
        "component": UserLogin2Component
    }
];
@NgModule({imports: [
CommonModule,RouterModule.forChild(routes),LayoutModule
],exports: [
RouterModule
],declarations: [
UserLogin2Component
]})
export class UserLogin2Module  {



}