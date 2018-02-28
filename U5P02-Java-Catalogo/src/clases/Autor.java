package clases;

public class Autor {
	private int cod_dj;
	private String nombre_dj;
	private String nacionalidad;
	private String descripcion;
	private String genero_musical;
	private String img_autor;
	public Autor(int cod_dj, String nombre_dj, String nacionalidad, String descripcion, String genero_musical,
			String img_autor) {
		super();
		this.cod_dj = cod_dj;
		this.nombre_dj = nombre_dj;
		this.nacionalidad = nacionalidad;
		this.descripcion = descripcion;
		this.genero_musical = genero_musical;
		this.img_autor = img_autor;
	}
	public int getCod_dj() {
		return cod_dj;
	}
	public void setCod_dj(int cod_dj) {
		this.cod_dj = cod_dj;
	}
	public String getNombre_dj() {
		return nombre_dj;
	}
	public void setNombre_dj(String nombre_dj) {
		this.nombre_dj = nombre_dj;
	}
	public String getNacionalidad() {
		return nacionalidad;
	}
	public void setNacionalidad(String nacionalidad) {
		this.nacionalidad = nacionalidad;
	}
	public String getDescripcion() {
		return descripcion;
	}
	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}
	public String getGenero_musical() {
		return genero_musical;
	}
	public void setGenero_musical(String genero_musical) {
		this.genero_musical = genero_musical;
	}
	public String getImg_autor() {
		return img_autor;
	}
	public void setImg_autor(String img_autor) {
		this.img_autor = img_autor;
	}
	

}
