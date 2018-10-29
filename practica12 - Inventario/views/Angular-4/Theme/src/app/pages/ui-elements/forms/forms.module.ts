import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsComponent } from './forms.component';
import {RouterModule, Routes} from '@angular/router';
import {SharedModule} from '../../../shared/shared.module';

export const FormsRoutes: Routes = [
  {
    path: '',
    data: {
      breadcrumb: 'Form Components',
      status: false
    },
    children: [
      {
        path: 'basic-elements',
        loadChildren: './basic-elements/basic-elements.module#BasicElementsModule'
      }, {
        path: 'add-on',
        loadChildren: './add-on/add-on.module#AddOnModule'
      }, {
        path: 'advance-elements',
        loadChildren: './advance-elements/advance-elements.module#AdvanceElementsModule'
      }, {
        path: 'form-validation',
        loadChildren: './form-validation/form-validation.module#FormValidationModule'
      }, {
        path: 'picker',
        loadChildren: './picker/picker.module#PickerModule'
      }, {
        path: 'select',
        loadChildren: './select/select.module#SelectFormModule'
      }, {
        path: 'masking',
        loadChildren: './masking/masking.module#MaskingModule'
      }
    ]
  }
];

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(FormsRoutes),
    SharedModule
  ],
  declarations: [FormsComponent]
})
export class FormsModule { }
