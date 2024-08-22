package br.com.gerenciamento.enums;

public enum Curso {

    ADMINISTRACAO("Administração"),
    INFORMATICA("Informática"),
    CONTABILIDADE("Contabilidade"),
    ENFERMAGEM("Enfermagem"),
    BIOMEDICINA("Biomedicina"),
    DIREITO("Direito"),
    ADS("Analise e desenvolvimento de sistemas"),
    ARQUITETURA("Arquitetura");

    private String curso;

    private Curso(String curso) {
        this.curso = curso;
    }

}
