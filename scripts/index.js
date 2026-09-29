const btn_modaliade = document.getElementById('cadastrarModalidade');
const btn_aluno = document.getElementById('cadastrarAluno');
//Botão direciona para página - Cadastro de Aluno
btn_aluno.addEventListener('click', function () {
    window.location.href = 'cadastroAluno.html'
});
//Botão direciona para página - Cadastro de modalidade
btn_modaliade.addEventListener('click', function () {
    window.location.href = 'cadastroModalidade.html'
});