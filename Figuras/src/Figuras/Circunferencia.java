package Figuras;

public class Circunferencia extends Figura{
	private double radio;

	public Circunferencia(double radio , String titulo , String color) {
		super(titulo, color);
		this.radio = radio;
	}

	public double getRadio() {
		return radio;
	}

	public void setRadio(double radio) {
		this.radio = radio;
	}


	@Override
	public String toString() {
		return "Circunferencia [radio=" + radio + ", getTitulo()=" + getTitulo() + ", getColor()=" + getColor() + "]";
	}

	@Override
	public double area() {
		return Math.PI * Math.pow(this.radio, 2);
	}

	@Override
	public double perimetro() {
		return 2*Math.PI*this.radio;
	}
}
