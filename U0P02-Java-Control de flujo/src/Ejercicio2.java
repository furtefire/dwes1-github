import java.util.Scanner;
public class Ejercicio2 {
	public static void main (String[]args) {
		Scanner sc = new Scanner (System.in);
		System.out.println("Hola bienvenido a la suma de numeros hasta 50");
		Ejercicio2 x = new Ejercicio2();
		x.pideNumeros(sc);
	}
	public static void pideNumeros(Scanner sc) {
		int i=0 , suma=0;
		do {
			System.out.println("Escribe un numero para sumarlo");
			i=sc.nextInt();
			suma+=i;
			if(suma>=51) 
				System.out.println("La suma es "+suma+"\n"
						+"Se va a cambiar a su tope");				
		}while(suma<51);
		suma=50;
		System.out.println("La suma resultada hasta 50 es de "+suma);
	}
}
