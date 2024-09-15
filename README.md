# ConstruMath
Projeto desenvolvido no 3º semestre do curso de Analise e Desenvolvimento de Sistemas

Objetivos do projeto:
- Deve fazer cálculos matemáticos 
- Descrever quais materiais necessesarios e suas quantidade para construção pré determinada
- Definir um orçamento médio para realização da obra

Etapas:
- Realizar topicos de discução(#p2 #p3 #p4)
- Desenvolver código
- Desenvolver a estrutura para o site
- Estrutura de Dados(Ex: nome das tabelas, coisas que a tabela precisa ter)
- Desenvolver o estilo(css)
- Desenvolver um design
- Desenvolver um Slogan

Requisitos:
- Formulas de cálculo de máterial
- Banco de dados 
- Lista de máteriais
- Campos para avaliação
<br>
<br>
<br>

Cor da NavBar = #004A8D

<br>
Para rodar o site:
<br>
1.Abra o administrador de banco de dados do seu computador 
<br>
2.Abra o arquivo <a href="./testes/CriarDatabase.sql">CriarDatabase.sql </a> e rode no seu computador 
<br>
3.Inicie um servidor apache com xampp ou wampp
<br>
4.Abra seu navegador e entre em 'localhost/paginas/'
<br>
<br>
<br>
Caso você tenha esse erro:<br><br>
'Fatal error: Uncaught mysqli_sql_exception: Access denied for user 'root'@'localhost' (using password: YES) in C:\xampp\htdocs\ConstruMath\paginas\conexao.php:7 Stack trace: #0 C:\xampp\htdocs\ConstruMath\paginas\conexao.php(7): mysqli_connect('127.0.0.1', 'root', Object(SensitiveParameterValue), 'login') #1 C:\xampp\htdocs\ConstruMath\paginas\login.php(3): include('C:\\xampp\\htdocs...') #2 {main} thrown in C:\xampp\htdocs\ConstruMath\paginas\conexao.php on line 7'
<br>
basta alterar as credenciais <a href="./paginas/conexao.php">aqui</a>