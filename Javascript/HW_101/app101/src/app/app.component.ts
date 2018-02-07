import { Component } from '@angular/core';
import { Category } from './shared/category';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';
  categories: Category = {
    names: [
      'mp3 players', 'laptops', 'cellphones'
    ]
  };
}

