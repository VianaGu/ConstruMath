# ConstruMath

> Projeto desenvolvido no 3º/4º semestre do curso de Análise e Desenvolvimento de Sistemas.

## 📌 Objetivos do Projeto
- Executar cálculos matemáticos para áreas ou volumes.
- Estimar os materiais necessários para construções (quantidade e tipo).
- Gerar um orçamento médio para execução da obra.

## 🛠️ Etapas do Desenvolvimento
1. Discussão em equipe sobre os requisitos (tópicos #p2, #p3, #p4).
2. Implementação do código.
3. Planejamento da estrutura do site.
4. Definição da Estrutura de Dados (ex: nomes de tabelas e campos no banco).
5. Desenvolvimento do layout com CSS.
6. Criação de um design visual e identidade.
7. Elaboração de um slogan impactante.

## 📋 Requisitos Técnicos
- Fórmulas para cálculo de materiais.
- Banco de dados para armazenamento (MySQL ou similar).
- Listagem de materiais necessários.
- Campos para avaliação ou feedback do usuário.

## 🚀 Funcionalidades de Configuração & Execução
1. Abra seu gerenciador de banco de dados (phpMyAdmin, MySQL Workbench etc.).
2. Execute o script `CriarDatabase.sql` para criar a base de dados.
3. Inicie um servidor local (XAMPP, WAMP ou equivalente).
4. Acesse no navegador: `http://localhost/paginas/`.

### ⚠️ Caso ocorra um erro como este:
```
Fatal error: Uncaught mysqli_sql_exception: Access denied for user 'root'@'localhost' (using password: YES) in ...
```
Basta ajustar as credenciais de conexão no arquivo de configuração (como `conexao.php`), editando usuário, senha e nome do banco conforme seu ambiente local.

---

## 📖 Sobre o Projeto
Desenvolvido durante o curso como parte do terceiro ou quarto semestre, este projeto demonstra o aprendizado em lógica, banco de dados e desenvolvimento web — juntando teoria e prática.

---

## 💻 Tecnologias Utilizadas
- PHP
- MySQL
- CSS
- JavaScript  

---

## 📂 Estrutura do Repositório 
```
/
├── Diagramas/           # Diagramas do sistema (drawio ou similares)
├── Exemplos/            # Exemplos de uso ou de dados
├── Prints Do Protótipo/ # Imagens ou prints do protótipo visual
├── miscelânea/          # Arquivos variados
├── paginas/             # Páginas frontend (HTML, PHP, CSS, JS)
├── CriarDatabase.sql    # Script de criação do banco de dados
├── README.md            # README atual (você está aqui)
└── LICENSE              # Se houver licença a ser aplicada
```

---

## 🤝 Como Colaborar
Quer sugerir melhorias, correções ou novas funcionalidades?  
Fique à vontade para abrir uma *issue* ou enviar um *Pull Request*. Todo feedback é super bem-vindo!

---

## ⭐ Gostou?
Se curtiu o projeto, dê uma estrelinha ⭐ no repositório!  
Acho que seria ótimo trocar ideias sobre lógica, cálculos, banco de dados ou design também — estou por aqui!
