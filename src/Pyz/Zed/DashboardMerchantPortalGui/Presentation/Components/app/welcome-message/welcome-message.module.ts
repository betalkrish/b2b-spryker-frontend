import { CommonModule } from '@angular/common';
import { NgModule } from '@angular/core';
import { TableModule } from '@spryker/table';
import { WelcomeMessageComponent } from './welcome-message.component';

@NgModule({
    imports: [CommonModule, TableModule],
    declarations: [WelcomeMessageComponent],
    exports: [WelcomeMessageComponent],
})
export class WelcomeMessageModule {}
