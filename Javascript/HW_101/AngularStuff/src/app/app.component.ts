import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';
  name = 'user';
  birthday: Date;
  /*updateTitle(event) {
    //console.log(event);
    this.title = event.target.value;
  }*/
}
