let cadastrarBtn = document.querySelector('.conta-form .cadastrar-btn');
let entrarBtn = document.querySelector('.conta-form .entrar-btn');

cadastrarBtn.onclick = () =>{
    cadastrarBtn.classList.add('ativo');
    entrarBtn.classList.remove('ativo');
}