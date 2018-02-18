import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Subscription } from 'rxjs/Subscription';
import { Observable } from 'rxjs/Observable';

@Component({
  selector: 'app-blog-list',
  templateUrl: './blog-list.component.html',
  styleUrls: ['./blog-list.component.css']
})
export class BlogListComponent implements OnInit {

  public blogs: Observable<any[]>;

  constructor(private httpClient: HttpClient) {
  }

  ngOnInit() {
    this.blogs = this.httpClient.get<any[]>('https://jsonplaceholder.typicode.com/users');
  }

}
