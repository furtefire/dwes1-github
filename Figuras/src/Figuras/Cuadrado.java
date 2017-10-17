package Figuras;

public class Cuadrado extends Figura	{

private double lado;
	public Cuadrado(double  lado , String titulo, String color) {
		super(titulo , color);
		this.lado=lado;
	}
	
	public void setLado(double lado) {
		this.lado=lado;
	}
	public double getLado() {
		return this.lado;
	}
	
	@Override
	public String toString() {
		return "Cuadrado [lado=" + lado + ", getTitulo()=" + getTitulo() + ", getColor()=" + getColor() + "]";
	}

	@Override
	public double area() {
		return Math.pow(this.lado, 2);
	}

	@Override
	public double perimetro() {
		return 4*this.lado;
	}	
}
