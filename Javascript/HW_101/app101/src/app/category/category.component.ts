import { Component, OnInit, Input } from '@angular/core';
import { Category } from '../shared/category';


@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.css']
})
export class CategoryComponent implements OnInit {

  @Input()
  categories: Category[];
  theCategory: Category;

  constructor() { }

  selectedCategory(index: number) {
    if (index >= 0) {
      this.theCategory = this.categories[index];
    } else {
      this.theCategory = null;
    }
  }

  ngOnInit() {
  }

}
