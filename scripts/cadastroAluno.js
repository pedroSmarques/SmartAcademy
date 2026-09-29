//Mascara para o telefone ficar nesse formato - (00) 00000-0000
function mascaraTelefone(event) {
    let input = event.target;
    let valorDigitado = input.value.replace(/\D/g, "");

    if (valorDigitado.length > 11) {
        valorDigitado = valorDigitado.substring(0, 11);
    }



    if (valorDigitado.length > 10) {
        valorDigitado = valorDigitado.replace(/^(\d{2})(\d{5})(\d{4})/, "($1) $2-$3");
    }

    input.value = valorDigitado;

}
document.getElementById("telefone").addEventListener("input", mascaraTelefone);
//Mascara para o CPF ficar nesse formato - 000.000.000-00
function mascaraCPF(event) {
    let input = event.target
    let valorDigitado = input.value.replace(/\D/g, "");

    if (valorDigitado.length > 11) {
        valorDigitado = valorDigitado.substring(0, 11);
    }

    if (valorDigitado.length > 9) {
        valorDigitado = valorDigitado.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
    }

    input.value = valorDigitado;
}
document.getElementById("cpf").addEventListener("input", mascaraCPF);