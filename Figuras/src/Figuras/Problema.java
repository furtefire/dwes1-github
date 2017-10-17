package Figuras;

public class Problema {

	public static void main(String[]args) {
		double leiarea , leiaperimetro;
		Circunferencia c1 = new Circunferencia(4.8 ,"Circunferencia grande","verde");
		Circunferencia c2 = new Circunferencia(1.5,"Circunferencia pequenna","azul");
		Cuadrado cu = new Cuadrado(4.2,"Cuadrado normalini","Rojo");
		Triangulo tri = new Triangulo(8, 15 ,"Triangulo tocho imperial","naranja");
		
		leiarea=(c1.area()/2)+(c2.area()*0.75)+cu.area()+tri.area();
		leiaperimetro=((c1.perimetro()/2)-(c1.getRadio()*2))+((c2.perimetro()*0.75)-(c2.getRadio()*2))+(cu.perimetro()-(cu.getLado()*2))+tri.perimetro();
		
		System.out.println("El area de la figura es: "+leiarea+" Y el perimetro es: "+leiaperimetro);	
		System.out.println("\n");
		System.out.println("La primera circunferencia es "+c1.toString()+
				"\n"+" La segunda circunferencia es "
		+"\n"+c2.toString()+
		"\n"+" El cuadrado es "
		+"\n"+cu.toString()+
		"\n"+" El triangulo es "+
		"\n"+tri.toString());
	}
}
