window.addEventListener('DOMContentLoaded', () => {
  // Aqui você pode expor funções que você vai usar no frontend.
  // Por exemplo, você pode usar `contextBridge` para comunicação segura entre o processo principal e o frontend:
  const { contextBridge } = require('electron');
  contextBridge.exposeInMainWorld('electron', {
    gerarLetrasAleatorias: (qntCrtr) => {
      const letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%&*";
      let result = "";
      for (let contador = 0; contador < qntCrtr; contador++) {
        result += letras.charAt(Math.floor(Math.random() * letras.length)); // Correção para gerar letra aleatória
      }
      return result;
    }
  });
});
