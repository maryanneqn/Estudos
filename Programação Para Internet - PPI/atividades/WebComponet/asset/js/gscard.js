export class GreenScriptCard extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){

        let imginput = this.getAttribute('img');
        let titulo = this.getAttribute('inputTitle');
        let conteudo = this.innerHTML;
        let botao = this.getAttribute('inputbotao');

        this.innerHTML = `
             <div class="card" style="width: 18rem;">
        <img src="${imginput}" alt="">
      <div class="card-body">
        <h5 class="card-title">${titulo}</h5>
        <p class="card-text">${conteudo}</p>
        <a href="#" class="btn btn-primary">${botao}</a>
      </div>
    </div>
    `;

    }

};

