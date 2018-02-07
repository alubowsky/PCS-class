import { Component, OnInit, Input } from '@angular/core';
import { Category } from '../shared/category';

@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.css']
})
export class CategoryComponent implements OnInit {

  @Input()
  categories: Category;

  constructor() { }

  ngOnInit() {
  }

}
