package Figuras;

public abstract class Figura {
	private String titulo;
	private String color;
	public Figura(String titulo, String color) {
		this.titulo = titulo;
		this.color = color;
	}
	public String getTitulo() {
		return titulo;
	}
	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}
	public String getColor() {
		return color;
	}
	public void setColor(String color) {
		this.color = color;
	}
public abstract double area();

public abstract double perimetro();


}
