import { Component, OnInit, ViewEncapsulation, AfterViewInit } from '@angular/core';
import { Helpers } from '../../../helpers';

declare let mLayout: any;
@Component({
selector: "app-aside-nav",
templateUrl: "./aside-nav.component.html",
encapsulation: ViewEncapsulation.None,
})
export class AsideNavComponent implements OnInit, AfterViewInit {


constructor()  {

}
ngOnInit()  {

}
ngAfterViewInit()  {

mLayout.initAside();
let menu = (<any>$('#m_aside_left')).mMenu(); let item = $(menu).find('a[href="' + window.location.pathname + '"]').parent('.m-menu__item'); (<any>$(menu).data('menu')).setActiveItem(item);
}

}