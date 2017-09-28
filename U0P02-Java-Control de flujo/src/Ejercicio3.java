import java.util.Scanner;
public class Ejercicio3 {
	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		validarNumero(sc);
		validarNumero1_10(sc);
		sc.close();
	}
	public static void validarNumero(Scanner sc) {
		System.out.println("Hola! por favor introduce un numero que no sea una letra");
		int aux;
		boolean correcto=false;	
		while(correcto==false) {
			try {
				aux=sc.nextInt();
				correcto=true;
			}catch(Exception e) {
				sc = new Scanner(System.in);
				correcto=false;
			}
			
		}
		System.out.println("Tu numero es correcto"
				+"\n"+"Bye...");	
	}
	public static void validarNumero1_10(Scanner sc) {
		System.out.println("Hola! por favor introduce un numero entre 1 y 10 que no sea una letra");
		int aux;
		boolean correcto=false;	
		while(correcto==false) {
			try {
				aux=sc.nextInt();
				if (aux >=1 && aux<11)
				correcto=true;
			}catch(Exception e) {
				sc = new Scanner(System.in);
				correcto=false;
			}
			
		}
		System.out.println("Tu numero es correcto"
				+"\n"+"Bye...");
	}

}
