import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { BaseColumnWidthComponent } from './base-column-width.component';
import { LayoutModule } from '../../../../../../layouts/layout.module';
import { DefaultComponent } from '../../../../default.component';

const routes: Routes = [
    {
        "path": "",
        "component": DefaultComponent,
        "children": [
            {
                "path": "",
                "component": BaseColumnWidthComponent
            }
        ]
    }
];
@NgModule({imports: [
CommonModule,RouterModule.forChild(routes),LayoutModule
],exports: [
RouterModule
],declarations: [
BaseColumnWidthComponent
]})
export class BaseColumnWidthModule  {



}