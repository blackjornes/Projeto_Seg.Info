// Entrar/ Cadastrar
let cadastrarBtn = document.querySelector('.conta-form .cadastrar-btn');
let entrarBtn = document.querySelector('.conta-form .entrar-btn');

cadastrarBtn.onclick = () =>{
    cadastrarBtn.classList.add('ativo');
    entrarBtn.classList.remove('ativo');
    document.querySelector('.conta-form .entrar-form').classList.remove('ativo');
    document.querySelector('.conta-form .cadastrar-form').classList.add('ativo');
};
entrarBtn.onclick = () =>{
    cadastrarBtn.classList.remove('ativo');
    entrarBtn.classList.add('ativo');
    document.querySelector('.conta-form .entrar-form').classList.add('ativo');
    document.querySelector('.conta-form .cadastrar-form').classList.remove('ativo');
};


let contaForm = document.querySelector('.conta-form');
document.querySelector('#acesso-btn').onclick = () =>{
    contaForm.classList.add('ativo');
};
document.querySelector('#fechar-form').onclick = () =>{
    contaForm.classList.remove('ativo');
};

