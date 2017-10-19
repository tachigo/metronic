import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { UserLogin1Component } from './user-login-1.component';
import { LayoutModule } from '../../../../../../layouts/layout.module';

const routes: Routes = [
    {
        "path": "",
        "component": UserLogin1Component
    }
];
@NgModule({imports: [
CommonModule,RouterModule.forChild(routes),LayoutModule
],exports: [
RouterModule
],declarations: [
UserLogin1Component
]})
export class UserLogin1Module  {



}