import { Component } from '@angular/core';
import { Person } from './shared/person';
import { Address } from './shared/address';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Homework Stuff';

  thePerson:
    Person = {
      firstName: 'Donald',
      lastName: 'Trump',
      address: {
        street: '1600 Pennsylvania Ave',
        city: 'Washington',
        state: 'DC',
        zip: '12345'
      },
      //friends: ['putin', 'dunnes', 'rubashkin']
    };

  constructor() {
    // let counter = 1;
    /*setInterval(() =>
      this.thePerson.firstName = (counter++) + this.thePerson.firstName
      , 1000);*/
  }
}
