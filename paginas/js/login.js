// Seleciona todos os campos do formulário que possuem o atributo "required"
const fields = document.querySelectorAll("[required]");

// Função principal para validar um campo específico
function ValidateField(field) {

    // Função interna que verifica se há algum erro de validade no campo
    function verifyErrors() {
        let foundError = false;

        // Itera sobre as propriedades de "field.validity" para verificar qual erro ocorreu
        for(let error in field.validity) {
            // Se o campo tiver algum erro e não for considerado "válido" no geral, salva o erro encontrado
            if (field.validity[error] && !field.validity.valid ) {
                foundError = error;
            }
        }
        return foundError; // Retorna o erro encontrado (ou false se não houver erros)
    }

    // Função interna que define mensagens personalizadas para cada tipo de erro
    function customMessage(typeError) {
        // Dicionário com mensagens específicas para tipos de campo "text" e "password"
        const messages = {
            text: {
                valueMissing: "Usuário Inválido" // Mensagem se o campo "text" estiver vazio
            },
            password: {
                valueMissing: "Não se esqueça da senha" // Mensagem se o campo "password" estiver vazio
            }
        }

        // Retorna a mensagem correspondente ao tipo de erro para o tipo de campo atual
        return messages[field.type][typeError];
    }

    // Função interna que exibe ou remove a mensagem de erro personalizada
    function setCustomMessage(message) {
        // Seleciona o elemento <span> que exibirá a mensagem de erro
        const spanError = field.parentNode.querySelector("span.error");
        
        if (message) {
            // Se houver uma mensagem, ativa a classe "active" e insere a mensagem no <span>
            spanError.classList.add("active");
            spanError.innerHTML = message;
        } else {
            // Se não houver mensagem (validação passou), remove a classe "active" e limpa o <span>
            spanError.classList.remove("active");
            spanError.innerHTML = "";
        }
    }

    // Retorna uma função que é executada ao validar o campo
    return function() {
        const error = verifyErrors(); // Verifica se há erros

        if(error) {
            const message = customMessage(error); // Obtém a mensagem de erro personalizada

            field.style.borderColor = "red"; // Altera a borda do campo para vermelho se houver erro
            setCustomMessage(message); // Exibe a mensagem de erro
        } else {
            field.style.borderColor = "green"; // Altera a borda do campo para verde se estiver válido
            setCustomMessage(); // Remove a mensagem de erro, se existir
        }
    }
}

// Função que é acionada em eventos de validação personalizados
function customValidation(event) {
    const field = event.target; // Obtém o campo que disparou o evento
    const validation = ValidateField(field); // Cria a função de validação para o campo

    validation(); // Executa a função de validação
}

// Adiciona eventos para cada campo obrigatório
for( field of fields ){
    // Previne o comportamento padrão do HTML5 ao detectar um campo inválido
    field.addEventListener("invalid", event => { 
        event.preventDefault(); // Impede a exibição padrão do erro

        customValidation(event); // Executa a validação customizada
    });

    // Adiciona a validação personalizada quando o campo perde o foco (evento "blur")
    field.addEventListener("blur", customValidation);
}
