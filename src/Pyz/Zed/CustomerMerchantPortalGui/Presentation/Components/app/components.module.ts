import { NgModule } from '@angular/core';
import { CustomerTableModule } from './customer-table/customer-table.module';
import { WebComponentsModule } from '@spryker/web-components';
import { CustomerTableComponent } from './customer-table/customer-table.component';

@NgModule({
    imports: [
        WebComponentsModule.withComponents([
            CustomerTableComponent,
        ]),
        CustomerTableModule,
    ],
    providers: [],
})
export class ComponentsModule {}
