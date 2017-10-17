package Figuras;

public class Triangulo extends Figura{
	private double base;
	private double altura;
	public Triangulo(int base, int altura , String titulo , String color){
		super(titulo , color);
		this.base = base;
		this.altura = altura;
	}
	public double getBase() {
		return base;
	}
	public void setBase(double base) {
		this.base = base;
	}
	public double getAltura() {
		return altura;
	}
	public void setAltura(double altura) {
		this.altura = altura;
	}


	@Override
	public String toString() {
		return "Triangulo [base=" + base + ", altura=" + altura + ", getTitulo()=" + getTitulo() + ", getColor()="
				+ getColor() + "]";
	}
	@Override
	public double area() {
		return (this.base*this.altura)/2;
	}
	@Override
	public double perimetro() {
		return (this.altura+this.base)+(Math.sqrt(((Math.pow(this.altura, 2)+(Math.pow(this.base, 2))))));
	}
}
