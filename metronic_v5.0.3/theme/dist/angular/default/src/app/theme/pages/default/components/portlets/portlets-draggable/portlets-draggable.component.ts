import { Component, OnInit, ViewEncapsulation, AfterViewInit } from '@angular/core';
import { Helpers } from '../../../../../../helpers';
import { ScriptLoaderService } from '../../../../../../_services/script-loader.service';


@Component({
selector: ".m-grid__item.m-grid__item--fluid.m-wrapper",
templateUrl: "./portlets-draggable.component.html",
encapsulation: ViewEncapsulation.None,
})
export class PortletsDraggableComponent implements OnInit, AfterViewInit {


constructor(private _script: ScriptLoaderService)  {

}
ngOnInit()  {

}
ngAfterViewInit()  {
this._script.load('.m-grid__item.m-grid__item--fluid.m-wrapper',
'//code.jquery.com/ui/1.12.1/jquery-ui.js',
'assets/demo/default/custom/components/portlets/draggable.js');

}

}