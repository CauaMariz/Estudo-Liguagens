import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-componente-teste',
  imports: [CommonModule],
  templateUrl: './componente-teste.component.html',
  styleUrl: './componente-teste.component.css'
})
export class ComponenteTesteComponent {
  idadeUser = document.querySelector("#idadeUser") as HTMLInputElement;

  start() {
      if (parseInt(this.idadeUser.value) < 18) {
        return false
      }
      else {
        return true
      }
    }
}
