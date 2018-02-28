package clases;

import java.util.Date;

public class Obra {
	private int cod_disco;
	private String nombre_disco;
	private Date fecha_salida;
	private String descripcion;
	private String autor;
	private String img_disco;
	private int cod_dj;
	private String img_autor;

	public Obra(int cod_disco, String nombre_disco, Date fecha_salida, String descripcion, String autor,
			String img_disco ,int cod_dj,String img_autor) {
		this.cod_disco = cod_disco;
		this.nombre_disco = nombre_disco;
		this.fecha_salida = fecha_salida;
		this.descripcion = descripcion;
		this.autor = autor;
		this.img_disco = img_disco;
		this.cod_dj = cod_dj;
		this.img_autor=img_autor;
	}
	public String getImg_autor() {
		return img_autor;
	}
	public void setImg_autor(String img_autor) {
		this.img_autor = img_autor;
	}
	public int getCod_disco() {
		return cod_disco;
	}
	public void setCod_disco(int cod_disco) {
		this.cod_disco = cod_disco;
	}
	public String getNombre_disco() {
		return nombre_disco;
	}
	public void setNombre_disco(String nombre_disco) {
		this.nombre_disco = nombre_disco;
	}
	public Date getFecha_salida() {
		return fecha_salida;
	}
	public void setFecha_salida(Date fecha_salida) {
		this.fecha_salida = fecha_salida;
	}
	public String getDescripcion() {
		return descripcion;
	}
	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}
	public String getAutor() {
		return autor;
	}
	public void setAutor(String autor) {
		this.autor = autor;
	}
	public String getImg_disco() {
		return img_disco;
	}
	public void setImg_disco(String img_disco) {
		this.img_disco = img_disco;
	}
	public int getCod_DJ() {
		return cod_dj;
	}
	public void setCod_dj(int cod_dj) {
		this.cod_dj = cod_dj;
	}

}
