package Metodos.Instancia;

public class UtilizandoInstancia {
    public static void main(String[] args) {
        Cliente cliente = new Cliente();
        cliente.primeiroNome = "Alexandre";
        cliente.ultimoNome = "Afonso";
        cliente.telefone = "28996447047";
        cliente.email = "alexandre.afonso@algawork.com";

        Cliente cliente2 = new Cliente();
        cliente2.primeiroNome = "João";
        cliente2.ultimoNome = "Silva";
        cliente2.telefone = "27997005496";


//		 System.out.println("Nome cliente: " + Cliente.obterNomeCompleto(cliente)); // Esse é o método estático.

        System.out.println("Nome cliente: " + cliente.obterNomeCompleto() + ", DDD: " + cliente.obterDDD());
        System.out.println("Nome cliente: " + cliente2.obterNomeCompleto() + ", DDD: " + cliente2.obterDDD());
    }

//	static String obterNomeCompletoCliente(Cliente cliente) {
//		String nomeCompleto = cliente.primeiroNome + " " + cliente.ultimoNome;
//
//		return nomeCompleto;
//	}

}

