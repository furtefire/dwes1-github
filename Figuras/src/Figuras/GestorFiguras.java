package Figuras;
import java.util.ArrayList;

public class GestorFiguras {
	protected ArrayList<Figura> arrayFiguras;

	public GestorFiguras() {
		arrayFiguras = new ArrayList<Figura>();
	}

	/**
	 * Constructor: no recibirá ningún valor pero inicializará el ArrayList
	 *
	 */

	public boolean añadirFigura(Figura f) {
		String titulo;
		titulo = f.getTitulo();
		for (int i=0;i<arrayFiguras.size();i++) {
			if (arrayFiguras.get(i).getTitulo() == titulo) {
				System.err.println("Ya existe");
				return false;
			}
		}
		arrayFiguras.add(f);
		return true;
	}

	/**
	 * añadirFigura: recibirá un objeto de la clase Figura y lo añadirá a la lista
	 *	siempre que no tenga el mismo título
	 */

	public boolean eliminarFigura(String f) {
		for (int i=0;i<arrayFiguras.size();i++) {
			if (arrayFiguras.get(i).getTitulo() == f) {
				arrayFiguras.remove(i);
				return true;
			}
		}
		System.err.println("No se ha encontrado el titulo");
		return false;
	}

	/**
	 *
	 * eliminarFigura: eliminará una figura segun su título
	 *
	 */


	public void mostrarFiguras() {
		for (Figura f : arrayFiguras) {
			System.out.println(f.toString());
		}		
	}
	/**
	 *
	 * mostrarFiguras: Escribirá por pantalla de forma ordenada los datos
	 *  de las figuras 
	 *
	 */

	public double calcularSumatorioAreas () {
		double area = 0;
		for (Figura f : arrayFiguras) {
			area += f.area();
		}
		 
		return area;
	}
	public double calcularSumatorioPerimetros () {
		double perimetro = 0;
		for (Figura f : arrayFiguras) {
			perimetro += f.perimetro();
		}
		 
		return perimetro;
	}

}