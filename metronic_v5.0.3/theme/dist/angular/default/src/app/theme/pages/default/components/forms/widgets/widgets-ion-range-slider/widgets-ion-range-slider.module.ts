import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { WidgetsIonRangeSliderComponent } from './widgets-ion-range-slider.component';
import { LayoutModule } from '../../../../../../layouts/layout.module';
import { DefaultComponent } from '../../../../default.component';

const routes: Routes = [
    {
        "path": "",
        "component": DefaultComponent,
        "children": [
            {
                "path": "",
                "component": WidgetsIonRangeSliderComponent
            }
        ]
    }
];
@NgModule({imports: [
CommonModule,RouterModule.forChild(routes),LayoutModule
],exports: [
RouterModule
],declarations: [
WidgetsIonRangeSliderComponent
]})
export class WidgetsIonRangeSliderModule  {



}