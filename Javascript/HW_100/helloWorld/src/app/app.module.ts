import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';


import { AppComponent } from './app.component';
import { AnotherComponent } from './another/another.component';
import { PersonComponent } from './person/person.component';


@NgModule({
  declarations: [
    AppComponent,
    AnotherComponent,
    PersonComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
