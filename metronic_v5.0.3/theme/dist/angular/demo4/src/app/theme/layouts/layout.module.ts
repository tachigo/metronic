import {NgModule} from '@angular/core';
import { DefaultComponent } from '../pages/default/default.component';
import { AsideNavComponent } from './aside-nav/aside-nav.component';
import { HeaderBrandComponent } from './header-brand/header-brand.component';
import { HeaderTopbarComponent } from './header-topbar/header-topbar.component';
import { AsideLeftDisplayDisabledComponent } from '../pages/aside-left-display-disabled/aside-left-display-disabled.component';
import { HorMenuComponent } from './hor-menu/hor-menu.component';
import { SearchComponent } from './search/search.component';
import { FooterComponent } from './footer/footer.component';
import { QuickSidebarComponent } from './quick-sidebar/quick-sidebar.component';
import { ScrollTopComponent } from './scroll-top/scroll-top.component';
import { TooltipsComponent } from './tooltips/tooltips.component';
import {CommonModule} from '@angular/common';
import {RouterModule} from '@angular/router';
import {HrefPreventDefaultDirective} from '../../_directives/href-prevent-default.directive';
import {UnwrapTagDirective} from '../../_directives/unwrap-tag.directive';

@NgModule({
	declarations: [
DefaultComponent,
AsideNavComponent,
HeaderBrandComponent,
HeaderTopbarComponent,
AsideLeftDisplayDisabledComponent,
HorMenuComponent,
SearchComponent,
FooterComponent,
QuickSidebarComponent,
ScrollTopComponent,
TooltipsComponent,
		HrefPreventDefaultDirective,
		UnwrapTagDirective,
	],
	exports: [
DefaultComponent,
AsideNavComponent,
HeaderBrandComponent,
HeaderTopbarComponent,
AsideLeftDisplayDisabledComponent,
HorMenuComponent,
SearchComponent,
FooterComponent,
QuickSidebarComponent,
ScrollTopComponent,
TooltipsComponent,
		HrefPreventDefaultDirective,
	],
	imports: [
		CommonModule,
		RouterModule,
	]
})
export class LayoutModule {
}