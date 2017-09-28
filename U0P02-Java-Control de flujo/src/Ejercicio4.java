import java.util.Scanner;
public class Ejercicio4 {
	public static void main (String[]args) {
		int mes;
		String nombre;
		boolean troll;
		Scanner sc = new Scanner (System.in);
		troll=bisiestoAnno(sc);
		System.out.println("Elige tu mes preferido con un numero del 1 al 12");
		do {
			mes=sc.nextInt();
		}while(mes<1 || mes > 12);

		switch(mes) {
		case 1:
			nombre="Enero";
			System.out.println("El mes que has introducido es: "+nombre);
				System.out.println("El numero de dias es de 31");
			break;
		case 2:
			nombre="Febrero";
			System.out.println("El mes que has introducido es: "+nombre);
			if(troll==true)
				System.out.println("El numero de dias es de 29 por ser año bisiesto");
			else
				System.out.println("El numero de dias es de 28 ");
			break;
		case 3:
			nombre="Marzo";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 31");

			break;
		case 4:
			nombre="Abril";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 30");


			break;
		case 5:
			nombre="Mayo";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 31");

			break;
		case 6:
			nombre="Junio";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 30");

			break;
		case 7:
			nombre="Julio";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 31");

			break;
		case 8:
			nombre="Agosto";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 31");

			break;
		case 9:
			nombre="Septiembre";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 30");

			break;
		case 10:
			nombre="Octubre";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 31");

			break;
		case 11:
			nombre="Noviembre";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 30");

			break;
		case 12:
			nombre="Diciembre";
			System.out.println("El mes que has introducido es: "+nombre);
			System.out.println("El numero de dias es de 31");

			break;
		default:
			break;
		}
		
	}
	public static boolean bisiestoAnno(Scanner sc) {
		int bisiesto ;
		System.out.println("Introduce un año para saber si es bisiesto");
		bisiesto=sc.nextInt();
		boolean correctoB=false;
		if (bisiesto % 4 ==0) {
			System.out.println("El año es bisiesto ,el numero de dias es 366");
			return correctoB=true;
			
		}else
			System.out.println("El año no es bisiesto , el numero de dias es 365");
			return correctoB=false;			
	}
}
