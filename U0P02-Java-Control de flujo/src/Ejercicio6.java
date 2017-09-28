import java.util.Scanner;
public class Ejercicio6 {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int a;
		System.out.println("Introduce un valor para a para hayar su factorial");
		do {
			a=sc.nextInt();
		}while(a<0);
		factorialWhile(a);
		factorialdoWhile(a);
		factorialfor(a);
		sc.close();
	}
	public static void factorialWhile(int a) {
		int x=0,aux=1;
		while(x!=a) {
			x+=1;
			aux*=x;
		}
		System.out.println("El factorial de "+a+" es "+aux);	
	}
	public static void factorialdoWhile(int a) {
		int x=0,aux=1;
		do{
			x+=1;
			aux*=x;
		}while(x!=a);
		System.out.println("El factorial de "+a+" es "+aux);
	}
	
	public static void factorialfor(int a) {
		int aux=1;
		for(int i = 1 ;i<=a;i++) {
			aux*=i;
		}
		System.out.println("El factorial de "+a+" es "+aux);		
	}

}
