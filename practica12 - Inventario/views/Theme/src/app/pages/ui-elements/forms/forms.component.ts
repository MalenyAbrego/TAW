import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-forms',
  template: '<router-outlet><app-spinner></app-spinner></router-outlet>'
})
export class FormsComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}
