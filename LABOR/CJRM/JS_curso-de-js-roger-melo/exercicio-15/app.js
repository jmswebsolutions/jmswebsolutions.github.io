/*
  01

  - Obtenha a ul do index.html e adicione em todos os elementos filhos dela,  
    uma classe 'video';
  - Exiba no console os elementos filhos da ul com a classe já inserida.
*/

for (let i = 0; i < document.querySelector("ul").childElementCount; i++) {
  document.querySelector("ul").children[i].classList.add("video");
}
console.log(document.querySelector("ul"));

/*
  02

  - Usando a propriedade adequada, descubra quem é o elemento pai do h2
    e exiba-o no console;
*/

console.log(document.querySelector("h2").parentElement);

/*
  03

  - Descubra quem é o próximo elemento irmão do h1 e exiba-o no console;
*/

console.log(document.querySelector("h2").nextElementSibling);

/*
  04

  - Descubra quem é o irmão anterior da ul e exiba-o no console;
*/

console.log(document.querySelector("ul").previousElementSibling);

/*
  05

  - Quando um clique acontecer em alguma das lis, faça com que a li clicada seja  
    exibida no console.
*/

for(let i=0;i<document.querySelectorAll("li").length;i++){
  document.querySelectorAll("li")[i].addEventListener("click", function () {
    return console.log(document.querySelectorAll("li")[i].textContent);
  });
}


/*
  06

  - Quando o botão for clicado, adicione o nome dos vídeos abaixo dentro da ul;
  - Cada nome deve estar dentro de uma li.
*/

const videos = [
  {
    name: "Como o promise all funciona | JavaScript",
    length: "00:01:52",
  },
  {
    name: "Como refatorar um for loop | JavaScript",
    length: "00:04:18",
  },
  {
    name: "Como fazer requisições HTTP com o método fetch | JavaScript",
    length: "00:02:55",
  },
];

function adicionar() {
  for (let i = 0; i < videos.length; i++) {
    document.querySelector("ul").innerHTML += `<li>${videos[i].name}</li>`;
  }
}

/*
  07

  - Se um clique no h1 acontecer, faça com que todos os elementos dentro do body 
    sejam removidos.
*/

document.querySelector('h1').addEventListener('click',function(){
  document.getElementsByTagName('body')[0].remove()
})


