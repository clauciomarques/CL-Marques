package Metodos;

public class PrimeiraClasse {
    public static void main(String[] args) {
        Produto smartphone = new Produto();
        smartphone.nome = "Galaxy S22";
        smartphone.precoUnitario = 8500.0;
        smartphone.quantidade = 15;
        exibirQuantidadeEmEstoque(smartphone);
    }

    static void exibirQuantidadeEmEstoque(Produto produto) {
        System.out.println("Quantidade em estoque do produto " + produto.nome
                + " é de " + produto.quantidade + " unidade(s).");
    }
}
