package Metodos.Atividades.Atividade02.Atividade03;


public class Exercicio03 {
    public static void main(String[] args) {
        Pedido pedido = new Pedido();
        System.out.println(" ======ℕ𝕆𝕋𝔸 𝔽𝕀𝕊ℂ𝔸𝕃======");
        pedido.nome = "HOUSTON FULL BLACK 32MM";
        pedido.codigo = 54556789;
        pedido.subtotal = 280;
        pedido.desconto = 8;


        informarPedidoDoCliente(pedido);
    }
    static void informarPedidoDoCliente (Pedido pedido) {
        System.out.println(" O Produto: " + pedido.nome + "\n Com o Codigo De: "
                + pedido.codigo + "\n Tem o Subtotal De: " + pedido.getSubtotal() + " Reais " + "\n Tera a Reducao de "
                + pedido.getDesconto() + " Reais "
                + "\n Logo Tera Seu Valor Reduzido Para " + pedido.getTotal() +" Reais "
                + "\n O CLiente ira Pagar o Valor De: "
                + pedido.getTotal() + " Reais");

    }
}