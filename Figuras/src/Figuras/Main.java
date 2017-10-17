package Figuras;

public class Main {


	public static void main(String[] args) {
		//Instanciamos los objetos
		Circunferencia c1 = new Circunferencia(4.8 ,"Circunferencia grande","verde");
		Circunferencia c2 = new Circunferencia(1.5,"Circunferencia pequenna","azul");
		Cuadrado cu = new Cuadrado(4.2,"Cuadrado normalini","Rojo");
		Triangulo tri = new Triangulo(8, 15 ,"Triangulo tocho imperial","naranja");


		//Iniciamos el arraylist
		GestorFiguras GF = new GestorFiguras();

		//Introducimos los datos en el arraylist
		GF.añadirFigura(tri);
		GF.añadirFigura(cu);
		GF.añadirFigura(c1);
		GF.añadirFigura(c2);

		//Probamos a borrar una figura del array
		GF.eliminarFigura("Circunferencia pequenna");
		GF.eliminarFigura("Circunferencia grande");

		//Imprimimos los objetos recorriendo el arraylist
		GF.mostrarFiguras();

		//Mostramos el area de todas las figuras
		System.out.println("El area de todas las figuras es: " + GF.calcularSumatorioAreas());

		//Mostramos el perimetro de todas las figuras
		System.out.println("El area de todas las figuras es: " + GF.calcularSumatorioPerimetros());
	}

}

