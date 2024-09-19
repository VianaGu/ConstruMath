
// Função para lidar com a tecla Enter
function handleEnterKeyPress(event) {
    // Verifica se a tecla pressionada é Enter
    if (event.keyCode === 13) {
        // Previne o comportamento padrão do formulário (submit)
        event.preventDefault();

        // Obtém o ID do elemento atual (campo focado)
        var currentElementId = event.target.id;

        // Verifica qual campo está focado atualmente e move para o próximo
        if (currentElementId === "usuario") {
            document.getElementById("senha").focus(); // Move para o campo de senha
        } else if (currentElementId === "senha") {
            // Se o campo de senha está focado, submete o formulário
            event.target.closest("form").submit();
        }
    }
}

// Adiciona um listener para o evento keydown nos campos de entrada
document.getElementById("usuario").addEventListener("keydown", handleEnterKeyPress);
document.getElementById("senha").addEventListener("keydown", handleEnterKeyPress);
