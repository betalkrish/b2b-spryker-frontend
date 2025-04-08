import { CommonModule } from '@angular/common';
import { NgModule } from '@angular/core';
import { TableModule } from '@spryker/table';
import { CustomerTableComponent } from './customer-table.component';

@NgModule({
    imports: [CommonModule, TableModule],
    declarations: [CustomerTableComponent],
    exports: [CustomerTableComponent],
})
export class CustomerTableModule {}
