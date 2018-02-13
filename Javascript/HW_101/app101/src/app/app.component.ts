import { Component } from '@angular/core';
import { Category } from './shared/category';
import { Item } from './shared/item';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';

  categories: Category[] = [
    {
      name: 'mp3 player', items: [
        { name: 'ipod', price: 120 }, { name: 'sansa', price: 40 }
      ]
    },
    {
      name: 'phones', items: [
        { name: 'samsung', price: 500 }, { name: 'nokia', price: 150 }
      ]
    },
    {
      name: 'empty category test 1'
    },
    {
      name: 'empty category test 2', items: []
    }
  ];

}

