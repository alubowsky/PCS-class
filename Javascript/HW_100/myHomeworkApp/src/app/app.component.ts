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

  person:
    Person = {
      firstName: 'Donald',
      lastName: 'Trump',
      address: {
        street: '1600 Pennsylvania Ave',
        city: "Washington DC",
        zip: '20500'
      }
    };
}
