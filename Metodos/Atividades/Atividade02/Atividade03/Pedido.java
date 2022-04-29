package Metodos.Atividades.Atividade02.Atividade03;

public class Pedido {
    String nome;
    Integer codigo;
    Integer subtotal;

    String getNome() {
        return nome;
    }

    void setNome(String nome) {
        this.nome = nome;
    }

    Integer getCodigo() {
        return codigo;
    }

     void setCodigo(Integer codigo) {
        this.codigo = codigo;
    }

     Integer getSubtotal() {
        return subtotal;
    }

     void setSubtotal(Integer subtotal) {
        this.subtotal = subtotal;
    }

    Integer getDesconto() {
        return desconto;
    }

    void setDesconto(Integer desconto) {
        this.desconto = desconto;
    }
    Integer getTotal() {
        return subtotal - desconto;

    }

    Integer desconto;
    Integer total;

}
