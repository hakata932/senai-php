let botao = document.querySelector('#botao')

botao.addEventListener('click', formulario)

function formulario(){
    let nome = document.querySelector('#nome').value
    let email = document.querySelector('#email').value
    let telefone = document.querySelector('#numero').value

    if(nome == '' || email == '' || telefone == ''){
        return false
    }

    alert('Seu usuário foi cadastrado, espere em breve por notícias!')
}