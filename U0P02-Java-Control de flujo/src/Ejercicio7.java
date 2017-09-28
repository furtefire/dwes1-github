import java.util.Scanner;
public class Ejercicio7 {

	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		int key;
		int opciones=0;
		int opciones2=0;
		do {
			System.out.println("Hay dos menus escoge uno");
			key=sc.nextInt();
		}while(key<1 || key>2);

		switch(key) {
		case 1:
			System.out.println("menu uno");	
			do {
				System.out.println("Hay dos menus escoge uno");
				opciones=sc.nextInt();
			}while(opciones<1 || opciones>2);
			meNu(opciones);
			break;
		case 2:
			System.out.println("menu dos");
			do {
				System.out.println("Hay dos menus escoge uno");
				opciones2=sc.nextInt();
			}while(opciones2<1 || opciones2>2);
			menuDos(opciones2);
			break;
		default:
			sc.close();
			break;
		}
		sc.close();
	}

	public static void meNu(int opciones) {

		switch(opciones) {
		case 1:
			System.out.println("Primera opcion menu uno");			
			break;
		case 2:
			System.out.println("Segunda opcion menu uno");
			break;
		default:
			System.out.println("Bye");
			break;
		}
	}

	public static void menuDos(int opciones) {

		switch(opciones) {
		case 1:
			System.out.println("Primera opcion menu dos");			
			break;
		case 2:
			System.out.println("Segunda opcion menu dos");
			break;
		default:
			System.out.println("Bye");
			break;
		}
	}
}
