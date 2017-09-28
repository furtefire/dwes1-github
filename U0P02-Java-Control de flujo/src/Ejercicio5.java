import java.util.Scanner;
public class Ejercicio5 {

	public static void main(String[] args) {
	int a , b , aux=0;
	Scanner sc = new Scanner(System.in);
	Ejercicio5 x = new Ejercicio5();
	
	
	do {
		System.out.println("introduzca un numero del 1 al 10");
		a=sc.nextInt();
	}while(a<1 || a>10);
	
	do {
		System.out.println("introduzca un numero del 1 al 10 y distinto de a");
		b=sc.nextInt();
	}while(b<1 || b>10 || a==b);
	System.out.println("El numero "+x.comprobarMayor(a, b)+" Es el menor");
	aux =x.comprobarMayor(a, b)+1;
	System.out.println("Ahora el numero "+x.comprobarMayor(a, b)+" Vale "+aux);
	sc.close();

	}
	public int comprobarMayor(int a , int b) {
		if(a > b)
			return b;
		else
		return a;
	}

}
