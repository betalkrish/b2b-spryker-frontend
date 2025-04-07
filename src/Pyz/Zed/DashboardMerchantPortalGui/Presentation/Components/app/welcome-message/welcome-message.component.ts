import { Component } from '@angular/core';

@Component({
  selector: 'mp-welcome-message',
  templateUrl: './welcome-message.component.html',
  styleUrls: ['./welcome-message.component.css']
})
export class WelcomeMessageComponent {
  message: string = 'Welcome to My Merchant Portal!';
}