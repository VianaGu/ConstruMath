package br.com.gerenciamento.model;

import javax.persistence.*;
import javax.validation.constraints.NotBlank;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;

import br.com.gerenciamento.enums.*;


/* (id, nome, altura, largura, comprimento, valorMedio) */
@Entity
public class TijoloItem {
    
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @Column(name = "nome")
    @Size(min = 5, max = 35, message = "O Nome deve conter entre 5 a 35 caracteres")
    @NotBlank(message = "O nome não pode ser vazio")
    @NotNull
    private Tijolo nome;

    @Column(name = "altura")
    @NotNull
    private float alturaTijolo;

    @Column(name = "largura")
    @NotNull
    private float larguraTijolo;

    @Column(name = "comprimento")
    @NotNull
    private float comprimentoTijolo;

    @Column(name = "preco")
    @NotNull
    private float precoTijolo;
}
