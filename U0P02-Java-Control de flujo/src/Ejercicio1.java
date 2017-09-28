import java.util.Scanner;
public class Ejercicio1 {

	public static void main(String[] args) {
	
		Scanner sc = new Scanner (System.in);
		String cadena1 , cadena2 , cadena3 , cadena4 , cadena5;
		System.out.println("Introduce la cadena 1");
		cadena1=sc.next();
		System.out.println("Introduce la cadena 2");
		cadena2=sc.next();
		System.out.println("Introduce la cadena 3");
		cadena3=sc.next();
		System.out.println("Introduce la cadena 4");
		cadena4=sc.next();
		System.out.println("Introduce la cadena 5");
		cadena5=sc.next();
		String aux=cadena1+cadena2+cadena3+cadena4+cadena5;
		System.out.println("La cadena es "+aux);
	}

}
