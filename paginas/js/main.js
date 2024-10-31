// Função que gera uma matrícula única
function GerarMatricula() {
    // Prefixo fixo da matrícula
    var txt = "ACA";

    // Gera um número aleatório entre 0 e 998
    var aleatorio = Math.floor(Math.random() * 999);

    // Obtém a data atual
    const date = new Date();

    // Extrai o ano atual da data
    var data = date.getFullYear();

    // Combina o prefixo, o ano e o número aleatório para criar a matrícula
    document.getElementById('matricula').value = (txt + data + aleatorio);
}
