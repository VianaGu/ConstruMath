package br.com.gerenciamento.enums;

public enum Tijolo {
    
    LAMINADO("Laminado"),
    CONCRETO("Concreto"),
    BAIANO("Baiano"),
    MACICO("Maciço"),
    ECOLOGICO("Ecológico"),
    CERAMICA("Cerâmica");

    private String tijolo;

    private Tijolo(String tijolo) {
        this.tijolo = tijolo;
    }
}
