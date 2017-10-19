import {NgModule} from '@angular/core';
import { ThemeComponent } from './theme.component';
import {Routes, RouterModule} from '@angular/router';
import {AuthGuard} from "../auth/_guards/auth.guard";

const routes: Routes = [
    {
        "path": "",
        "component": ThemeComponent,
        "canActivate": [AuthGuard],
        "children": [
            {
                "path": "angular\/ng-bootstrap",
                "loadChildren": ".\/pages\/default\/angular\/ng-bootstrap\/ng-bootstrap.module#NgBootstrapModule"
            },
            {
                "path": "angular\/primeng",
                "loadChildren": ".\/pages\/default\/angular\/primeng\/primeng.module#PrimengModule"
            },
            {
                "path": "index",
                "loadChildren": ".\/pages\/default\/index\/index.module#IndexModule"
            },
            {
                "path": "components\/base\/typography",
                "loadChildren": ".\/pages\/default\/components\/base\/base-typography\/base-typography.module#BaseTypographyModule"
            },
            {
                "path": "components\/base\/state",
                "loadChildren": ".\/pages\/default\/components\/base\/base-state\/base-state.module#BaseStateModule"
            },
            {
                "path": "components\/base\/stack",
                "loadChildren": ".\/pages\/default\/components\/base\/base-stack\/base-stack.module#BaseStackModule"
            },
            {
                "path": "components\/base\/tables",
                "loadChildren": ".\/pages\/default\/components\/base\/base-tables\/base-tables.module#BaseTablesModule"
            },
            {
                "path": "components\/base\/modal",
                "loadChildren": ".\/pages\/default\/components\/base\/base-modal\/base-modal.module#BaseModalModule"
            },
            {
                "path": "components\/base\/alerts",
                "loadChildren": ".\/pages\/default\/components\/base\/base-alerts\/base-alerts.module#BaseAlertsModule"
            },
            {
                "path": "components\/base\/progress",
                "loadChildren": ".\/pages\/default\/components\/base\/base-progress\/base-progress.module#BaseProgressModule"
            },
            {
                "path": "components\/base\/popover",
                "loadChildren": ".\/pages\/default\/components\/base\/base-popover\/base-popover.module#BasePopoverModule"
            },
            {
                "path": "components\/base\/tooltip",
                "loadChildren": ".\/pages\/default\/components\/base\/base-tooltip\/base-tooltip.module#BaseTooltipModule"
            },
            {
                "path": "components\/base\/blockui",
                "loadChildren": ".\/pages\/default\/components\/base\/base-blockui\/base-blockui.module#BaseBlockuiModule"
            },
            {
                "path": "components\/base\/spinners",
                "loadChildren": ".\/pages\/default\/components\/base\/base-spinners\/base-spinners.module#BaseSpinnersModule"
            },
            {
                "path": "components\/base\/scrollable",
                "loadChildren": ".\/pages\/default\/components\/base\/base-scrollable\/base-scrollable.module#BaseScrollableModule"
            },
            {
                "path": "components\/base\/dropdown",
                "loadChildren": ".\/pages\/default\/components\/base\/base-dropdown\/base-dropdown.module#BaseDropdownModule"
            },
            {
                "path": "components\/base\/tabs\/bootstrap",
                "loadChildren": ".\/pages\/default\/components\/base\/tabs\/tabs-bootstrap\/tabs-bootstrap.module#TabsBootstrapModule"
            },
            {
                "path": "components\/base\/tabs\/line",
                "loadChildren": ".\/pages\/default\/components\/base\/tabs\/tabs-line\/tabs-line.module#TabsLineModule"
            },
            {
                "path": "components\/base\/navs",
                "loadChildren": ".\/pages\/default\/components\/base\/base-navs\/base-navs.module#BaseNavsModule"
            },
            {
                "path": "components\/base\/lists",
                "loadChildren": ".\/pages\/default\/components\/base\/base-lists\/base-lists.module#BaseListsModule"
            },
            {
                "path": "components\/base\/treeview",
                "loadChildren": ".\/pages\/default\/components\/base\/base-treeview\/base-treeview.module#BaseTreeviewModule"
            },
            {
                "path": "components\/base\/bootstrap-notify",
                "loadChildren": ".\/pages\/default\/components\/base\/base-bootstrap-notify\/base-bootstrap-notify.module#BaseBootstrapNotifyModule"
            },
            {
                "path": "components\/base\/toastr",
                "loadChildren": ".\/pages\/default\/components\/base\/base-toastr\/base-toastr.module#BaseToastrModule"
            },
            {
                "path": "components\/icons\/flaticon",
                "loadChildren": ".\/pages\/default\/components\/icons\/icons-flaticon\/icons-flaticon.module#IconsFlaticonModule"
            },
            {
                "path": "components\/icons\/fontawesome",
                "loadChildren": ".\/pages\/default\/components\/icons\/icons-fontawesome\/icons-fontawesome.module#IconsFontawesomeModule"
            },
            {
                "path": "components\/icons\/lineawesome",
                "loadChildren": ".\/pages\/default\/components\/icons\/icons-lineawesome\/icons-lineawesome.module#IconsLineawesomeModule"
            },
            {
                "path": "components\/icons\/socicons",
                "loadChildren": ".\/pages\/default\/components\/icons\/icons-socicons\/icons-socicons.module#IconsSociconsModule"
            },
            {
                "path": "components\/buttons\/base\/default",
                "loadChildren": ".\/pages\/default\/components\/buttons\/base\/base-default\/base-default.module#BaseDefaultModule"
            },
            {
                "path": "components\/buttons\/base\/square",
                "loadChildren": ".\/pages\/default\/components\/buttons\/base\/base-square\/base-square.module#BaseSquareModule"
            },
            {
                "path": "components\/buttons\/base\/pill",
                "loadChildren": ".\/pages\/default\/components\/buttons\/base\/base-pill\/base-pill.module#BasePillModule"
            },
            {
                "path": "components\/buttons\/base\/air",
                "loadChildren": ".\/pages\/default\/components\/buttons\/base\/base-air\/base-air.module#BaseAirModule"
            },
            {
                "path": "components\/buttons\/group",
                "loadChildren": ".\/pages\/default\/components\/buttons\/buttons-group\/buttons-group.module#ButtonsGroupModule"
            },
            {
                "path": "components\/buttons\/dropdown",
                "loadChildren": ".\/pages\/default\/components\/buttons\/buttons-dropdown\/buttons-dropdown.module#ButtonsDropdownModule"
            },
            {
                "path": "components\/buttons\/icon\/lineawesome",
                "loadChildren": ".\/pages\/default\/components\/buttons\/icon\/icon-lineawesome\/icon-lineawesome.module#IconLineawesomeModule"
            },
            {
                "path": "components\/buttons\/icon\/fontawesome",
                "loadChildren": ".\/pages\/default\/components\/buttons\/icon\/icon-fontawesome\/icon-fontawesome.module#IconFontawesomeModule"
            },
            {
                "path": "components\/buttons\/icon\/flaticon",
                "loadChildren": ".\/pages\/default\/components\/buttons\/icon\/icon-flaticon\/icon-flaticon.module#IconFlaticonModule"
            },
            {
                "path": "components\/buttons\/spinner",
                "loadChildren": ".\/pages\/default\/components\/buttons\/buttons-spinner\/buttons-spinner.module#ButtonsSpinnerModule"
            },
            {
                "path": "components\/forms\/controls\/base",
                "loadChildren": ".\/pages\/default\/components\/forms\/controls\/controls-base\/controls-base.module#ControlsBaseModule"
            },
            {
                "path": "components\/forms\/controls\/checkbox-radio",
                "loadChildren": ".\/pages\/default\/components\/forms\/controls\/controls-checkbox-radio\/controls-checkbox-radio.module#ControlsCheckboxRadioModule"
            },
            {
                "path": "components\/forms\/controls\/switch",
                "loadChildren": ".\/pages\/default\/components\/forms\/controls\/controls-switch\/controls-switch.module#ControlsSwitchModule"
            },
            {
                "path": "components\/forms\/controls\/input-group",
                "loadChildren": ".\/pages\/default\/components\/forms\/controls\/controls-input-group\/controls-input-group.module#ControlsInputGroupModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-datepicker",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-datepicker\/widgets-bootstrap-datepicker.module#WidgetsBootstrapDatepickerModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-datetimepicker",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-datetimepicker\/widgets-bootstrap-datetimepicker.module#WidgetsBootstrapDatetimepickerModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-timepicker",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-timepicker\/widgets-bootstrap-timepicker.module#WidgetsBootstrapTimepickerModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-daterangepicker",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-daterangepicker\/widgets-bootstrap-daterangepicker.module#WidgetsBootstrapDaterangepickerModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-touchspin",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-touchspin\/widgets-bootstrap-touchspin.module#WidgetsBootstrapTouchspinModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-maxlength",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-maxlength\/widgets-bootstrap-maxlength.module#WidgetsBootstrapMaxlengthModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-switch",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-switch\/widgets-bootstrap-switch.module#WidgetsBootstrapSwitchModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-multipleselectsplitter",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-multipleselectsplitter\/widgets-bootstrap-multipleselectsplitter.module#WidgetsBootstrapMultipleselectsplitterModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-select",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-select\/widgets-bootstrap-select.module#WidgetsBootstrapSelectModule"
            },
            {
                "path": "components\/forms\/widgets\/select2",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-select2\/widgets-select2.module#WidgetsSelect2Module"
            },
            {
                "path": "components\/forms\/widgets\/typeahead",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-typeahead\/widgets-typeahead.module#WidgetsTypeaheadModule"
            },
            {
                "path": "components\/forms\/widgets\/nouislider",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-nouislider\/widgets-nouislider.module#WidgetsNouisliderModule"
            },
            {
                "path": "components\/forms\/widgets\/ion-range-slider",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-ion-range-slider\/widgets-ion-range-slider.module#WidgetsIonRangeSliderModule"
            },
            {
                "path": "components\/forms\/widgets\/input-mask",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-input-mask\/widgets-input-mask.module#WidgetsInputMaskModule"
            },
            {
                "path": "components\/forms\/widgets\/autosize",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-autosize\/widgets-autosize.module#WidgetsAutosizeModule"
            },
            {
                "path": "components\/forms\/widgets\/clipboard",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-clipboard\/widgets-clipboard.module#WidgetsClipboardModule"
            },
            {
                "path": "components\/forms\/widgets\/dropzone",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-dropzone\/widgets-dropzone.module#WidgetsDropzoneModule"
            },
            {
                "path": "components\/forms\/widgets\/recaptcha",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-recaptcha\/widgets-recaptcha.module#WidgetsRecaptchaModule"
            },
            {
                "path": "components\/forms\/widgets\/summernote",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-summernote\/widgets-summernote.module#WidgetsSummernoteModule"
            },
            {
                "path": "components\/forms\/widgets\/bootstrap-markdown",
                "loadChildren": ".\/pages\/default\/components\/forms\/widgets\/widgets-bootstrap-markdown\/widgets-bootstrap-markdown.module#WidgetsBootstrapMarkdownModule"
            },
            {
                "path": "components\/forms\/layouts\/default-forms",
                "loadChildren": ".\/pages\/default\/components\/forms\/layouts\/layouts-default-forms\/layouts-default-forms.module#LayoutsDefaultFormsModule"
            },
            {
                "path": "components\/forms\/layouts\/multi-column-forms",
                "loadChildren": ".\/pages\/default\/components\/forms\/layouts\/layouts-multi-column-forms\/layouts-multi-column-forms.module#LayoutsMultiColumnFormsModule"
            },
            {
                "path": "components\/forms\/layouts\/action-bars",
                "loadChildren": ".\/pages\/default\/components\/forms\/layouts\/layouts-action-bars\/layouts-action-bars.module#LayoutsActionBarsModule"
            },
            {
                "path": "components\/forms\/validation\/states",
                "loadChildren": ".\/pages\/default\/components\/forms\/validation\/validation-states\/validation-states.module#ValidationStatesModule"
            },
            {
                "path": "components\/forms\/validation\/form-controls",
                "loadChildren": ".\/pages\/default\/components\/forms\/validation\/validation-form-controls\/validation-form-controls.module#ValidationFormControlsModule"
            },
            {
                "path": "components\/forms\/validation\/form-widgets",
                "loadChildren": ".\/pages\/default\/components\/forms\/validation\/validation-form-widgets\/validation-form-widgets.module#ValidationFormWidgetsModule"
            },
            {
                "path": "components\/datatables\/base\/data-local",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-data-local\/base-data-local.module#BaseDataLocalModule"
            },
            {
                "path": "components\/datatables\/base\/data-json",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-data-json\/base-data-json.module#BaseDataJsonModule"
            },
            {
                "path": "components\/datatables\/base\/data-ajax",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-data-ajax\/base-data-ajax.module#BaseDataAjaxModule"
            },
            {
                "path": "components\/datatables\/base\/record-selection",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-record-selection\/base-record-selection.module#BaseRecordSelectionModule"
            },
            {
                "path": "components\/datatables\/base\/column-rendering",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-column-rendering\/base-column-rendering.module#BaseColumnRenderingModule"
            },
            {
                "path": "components\/datatables\/base\/column-width",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-column-width\/base-column-width.module#BaseColumnWidthModule"
            },
            {
                "path": "components\/datatables\/base\/responsive-columns",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-responsive-columns\/base-responsive-columns.module#BaseResponsiveColumnsModule"
            },
            {
                "path": "components\/datatables\/base\/translation",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-translation\/base-translation.module#BaseTranslationModule"
            },
            {
                "path": "components\/datatables\/base\/local-sort",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-local-sort\/base-local-sort.module#BaseLocalSortModule"
            },
            {
                "path": "components\/datatables\/base\/html-table",
                "loadChildren": ".\/pages\/default\/components\/datatables\/base\/base-html-table\/base-html-table.module#BaseHtmlTableModule"
            },
            {
                "path": "components\/datatables\/scrolling\/vertical",
                "loadChildren": ".\/pages\/default\/components\/datatables\/scrolling\/scrolling-vertical\/scrolling-vertical.module#ScrollingVerticalModule"
            },
            {
                "path": "components\/datatables\/scrolling\/horizontal",
                "loadChildren": ".\/pages\/default\/components\/datatables\/scrolling\/scrolling-horizontal\/scrolling-horizontal.module#ScrollingHorizontalModule"
            },
            {
                "path": "components\/datatables\/scrolling\/both",
                "loadChildren": ".\/pages\/default\/components\/datatables\/scrolling\/scrolling-both\/scrolling-both.module#ScrollingBothModule"
            },
            {
                "path": "components\/datatables\/locked\/left",
                "loadChildren": ".\/pages\/default\/components\/datatables\/locked\/locked-left\/locked-left.module#LockedLeftModule"
            },
            {
                "path": "components\/datatables\/locked\/right",
                "loadChildren": ".\/pages\/default\/components\/datatables\/locked\/locked-right\/locked-right.module#LockedRightModule"
            },
            {
                "path": "components\/datatables\/locked\/both",
                "loadChildren": ".\/pages\/default\/components\/datatables\/locked\/locked-both\/locked-both.module#LockedBothModule"
            },
            {
                "path": "components\/datatables\/child\/data-local",
                "loadChildren": ".\/pages\/default\/components\/datatables\/child\/child-data-local\/child-data-local.module#ChildDataLocalModule"
            },
            {
                "path": "components\/datatables\/child\/data-ajax",
                "loadChildren": ".\/pages\/default\/components\/datatables\/child\/child-data-ajax\/child-data-ajax.module#ChildDataAjaxModule"
            },
            {
                "path": "components\/datatables\/api\/methods",
                "loadChildren": ".\/pages\/default\/components\/datatables\/api\/api-methods\/api-methods.module#ApiMethodsModule"
            },
            {
                "path": "components\/datatables\/api\/events",
                "loadChildren": ".\/pages\/default\/components\/datatables\/api\/api-events\/api-events.module#ApiEventsModule"
            },
            {
                "path": "components\/portlets\/base",
                "loadChildren": ".\/pages\/default\/components\/portlets\/portlets-base\/portlets-base.module#PortletsBaseModule"
            },
            {
                "path": "components\/portlets\/advanced",
                "loadChildren": ".\/pages\/default\/components\/portlets\/portlets-advanced\/portlets-advanced.module#PortletsAdvancedModule"
            },
            {
                "path": "components\/portlets\/creative",
                "loadChildren": ".\/pages\/default\/components\/portlets\/portlets-creative\/portlets-creative.module#PortletsCreativeModule"
            },
            {
                "path": "components\/portlets\/tabbed",
                "loadChildren": ".\/pages\/default\/components\/portlets\/portlets-tabbed\/portlets-tabbed.module#PortletsTabbedModule"
            },
            {
                "path": "components\/portlets\/draggable",
                "loadChildren": ".\/pages\/default\/components\/portlets\/portlets-draggable\/portlets-draggable.module#PortletsDraggableModule"
            },
            {
                "path": "components\/portlets\/tools",
                "loadChildren": ".\/pages\/default\/components\/portlets\/portlets-tools\/portlets-tools.module#PortletsToolsModule"
            },
            {
                "path": "components\/widgets\/general",
                "loadChildren": ".\/pages\/default\/components\/widgets\/widgets-general\/widgets-general.module#WidgetsGeneralModule"
            },
            {
                "path": "components\/widgets\/chart",
                "loadChildren": ".\/pages\/default\/components\/widgets\/widgets-chart\/widgets-chart.module#WidgetsChartModule"
            },
            {
                "path": "components\/calendar\/basic",
                "loadChildren": ".\/pages\/default\/components\/calendar\/calendar-basic\/calendar-basic.module#CalendarBasicModule"
            },
            {
                "path": "components\/calendar\/list-view",
                "loadChildren": ".\/pages\/default\/components\/calendar\/calendar-list-view\/calendar-list-view.module#CalendarListViewModule"
            },
            {
                "path": "components\/calendar\/google",
                "loadChildren": ".\/pages\/default\/components\/calendar\/calendar-google\/calendar-google.module#CalendarGoogleModule"
            },
            {
                "path": "components\/calendar\/external-events",
                "loadChildren": ".\/pages\/default\/components\/calendar\/calendar-external-events\/calendar-external-events.module#CalendarExternalEventsModule"
            },
            {
                "path": "components\/calendar\/background-events",
                "loadChildren": ".\/pages\/default\/components\/calendar\/calendar-background-events\/calendar-background-events.module#CalendarBackgroundEventsModule"
            },
            {
                "path": "components\/charts\/amcharts\/charts",
                "loadChildren": ".\/pages\/default\/components\/charts\/amcharts\/amcharts-charts\/amcharts-charts.module#AmchartsChartsModule"
            },
            {
                "path": "components\/charts\/amcharts\/stock-charts",
                "loadChildren": ".\/pages\/default\/components\/charts\/amcharts\/amcharts-stock-charts\/amcharts-stock-charts.module#AmchartsStockChartsModule"
            },
            {
                "path": "components\/charts\/amcharts\/maps",
                "loadChildren": ".\/pages\/default\/components\/charts\/amcharts\/amcharts-maps\/amcharts-maps.module#AmchartsMapsModule"
            },
            {
                "path": "components\/charts\/flotcharts",
                "loadChildren": ".\/pages\/default\/components\/charts\/charts-flotcharts\/charts-flotcharts.module#ChartsFlotchartsModule"
            },
            {
                "path": "components\/charts\/google-charts",
                "loadChildren": ".\/pages\/default\/components\/charts\/charts-google-charts\/charts-google-charts.module#ChartsGoogleChartsModule"
            },
            {
                "path": "components\/charts\/morris-charts",
                "loadChildren": ".\/pages\/default\/components\/charts\/charts-morris-charts\/charts-morris-charts.module#ChartsMorrisChartsModule"
            },
            {
                "path": "components\/maps\/google-maps",
                "loadChildren": ".\/pages\/default\/components\/maps\/maps-google-maps\/maps-google-maps.module#MapsGoogleMapsModule"
            },
            {
                "path": "components\/maps\/jqvmap",
                "loadChildren": ".\/pages\/default\/components\/maps\/maps-jqvmap\/maps-jqvmap.module#MapsJqvmapModule"
            },
            {
                "path": "components\/utils\/idle-timer",
                "loadChildren": ".\/pages\/default\/components\/utils\/utils-idle-timer\/utils-idle-timer.module#UtilsIdleTimerModule"
            },
            {
                "path": "components\/utils\/session-timeout",
                "loadChildren": ".\/pages\/default\/components\/utils\/utils-session-timeout\/utils-session-timeout.module#UtilsSessionTimeoutModule"
            },
            {
                "path": "header\/actions",
                "loadChildren": ".\/pages\/default\/header\/header-actions\/header-actions.module#HeaderActionsModule"
            },
            {
                "path": "header\/profile",
                "loadChildren": ".\/pages\/default\/header\/header-profile\/header-profile.module#HeaderProfileModule"
            },
            {
                "path": "404",
                "loadChildren": ".\/pages\/default\/not-found\/not-found\/not-found.module#NotFoundModule"
            },
            {
                "path": "",
                "redirectTo": "index",
                "pathMatch": "full"
            }
        ]
    },
    {
        "path": "snippets\/pages\/user\/login-1",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/user\/user-login-1\/user-login-1.module#UserLogin1Module"
    },
    {
        "path": "snippets\/pages\/user\/login-2",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/user\/user-login-2\/user-login-2.module#UserLogin2Module"
    },
    {
        "path": "snippets\/pages\/user\/login-3",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/user\/user-login-3\/user-login-3.module#UserLogin3Module"
    },
    {
        "path": "snippets\/pages\/user\/login-4",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/user\/user-login-4\/user-login-4.module#UserLogin4Module"
    },
    {
        "path": "snippets\/pages\/user\/login-5",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/user\/user-login-5\/user-login-5.module#UserLogin5Module"
    },
    {
        "path": "snippets\/pages\/errors\/error-1",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/errors\/errors-error-1\/errors-error-1.module#ErrorsError1Module"
    },
    {
        "path": "snippets\/pages\/errors\/error-2",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/errors\/errors-error-2\/errors-error-2.module#ErrorsError2Module"
    },
    {
        "path": "snippets\/pages\/errors\/error-3",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/errors\/errors-error-3\/errors-error-3.module#ErrorsError3Module"
    },
    {
        "path": "snippets\/pages\/errors\/error-4",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/errors\/errors-error-4\/errors-error-4.module#ErrorsError4Module"
    },
    {
        "path": "snippets\/pages\/errors\/error-5",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/errors\/errors-error-5\/errors-error-5.module#ErrorsError5Module"
    },
    {
        "path": "snippets\/pages\/errors\/error-6",
        "loadChildren": ".\/pages\/self-layout-blank\/snippets\/pages\/errors\/errors-error-6\/errors-error-6.module#ErrorsError6Module"
    },
    {
        "path": "**",
        "redirectTo": "404",
        "pathMatch": "full"
    }
];

@NgModule({
	imports: [RouterModule.forChild(routes)],
	exports: [RouterModule]
})
export class ThemeRoutingModule {}