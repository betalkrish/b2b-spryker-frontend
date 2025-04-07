import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { WelcomeMessageComponent } from './welcome-message/welcome-message.component';
import { WelcomeMessageModule } from './welcome-message/welcome-message.module';

import { ButtonLinkComponent, ButtonLinkModule } from '@spryker/button';
import { ChipsComponent, ChipsModule } from '@spryker/chips';
import { WebComponentsModule } from '@spryker/web-components';
import { DashboardCardComponent } from '@mp/dashboard-merchant-portal-gui/';
import { DashboardCardModule } from '@mp/dashboard-merchant-portal-gui/';
import { DashboardStatsComponent } from '@mp/dashboard-merchant-portal-gui/';
import { DashboardStatsModule } from '@mp/dashboard-merchant-portal-gui/';
import { DashboardTableComponent } from '@mp/dashboard-merchant-portal-gui/';
import { DashboardTableModule } from '@mp/dashboard-merchant-portal-gui/';
import { DashboardComponent } from '@mp/dashboard-merchant-portal-gui/';
import { DashboardModule } from '@mp/dashboard-merchant-portal-gui/';

@NgModule({
    imports: [
        WebComponentsModule.withComponents([
            DashboardComponent,
            DashboardCardComponent,
            DashboardStatsComponent,
            ButtonLinkComponent,
            ChipsComponent,
            DashboardTableComponent,
            WelcomeMessageComponent,
        ]),
        ButtonLinkModule,
        ChipsModule,
        DashboardModule,
        DashboardCardModule,
        DashboardStatsModule,
        DashboardTableModule,
        WelcomeMessageModule,
    ],
    providers: [],
})
export class ComponentsModule {}
