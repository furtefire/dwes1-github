package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import model.Obra;
import model.Usuario;

/**
 * Servlet implementation class MostrarCatalogoServlet
 */
//@WebServlet("/MostrarCatalogo")
public class MostrarCatalogoServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public MostrarCatalogoServlet() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		HttpSession session = request.getSession();
		Obra obra; 
		PrintWriter out =response.getWriter();
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html; charset=UTF-8");
		Connection conn = null;
		Statement sentencia = null;
		try {
			// Paso 1: Cargar el driver JDBC.
			Class.forName("org.mariadb.jdbc.Driver").newInstance();
			// Paso 2: Conectarse a la Base de Datos utilizando la clase Connection
			String userName = "alumno";
			String password = "alumno";
			String url = "jdbc:mariadb://localhost/catalogo16";
			conn = DriverManager.getConnection(url, userName, password);
			// Paso 3: Crear sentencias SQL, utilizando objetos de tipo Statement
			sentencia = conn.createStatement();
			String consulta="SELECT distinct disco.*,autor_dj.nombre_dj ,autor_dj.cod_DJ,autor_dj.img_autor FROM disco,autor_dj where disco.autor = autor_dj.cod_DJ GROUP BY cod_disco";
			
				if(request.getParameter("orden")!=null) {
				
				if(request.getParameter("orden").equalsIgnoreCase("asc")) {
					consulta="SELECT distinct disco.*,autor_dj.nombre_dj,autor_dj.cod_DJ,autor_dj.img_autor  FROM disco,autor_dj where disco.autor = autor_dj.cod_DJ GROUP BY cod_disco ORDER by disco.nombre_disco ASC";
				}else if(request.getParameter("orden").equalsIgnoreCase("desc")){
					consulta="SELECT distinct disco.*,autor_dj.nombre_dj,autor_dj.cod_DJ,autor_dj.img_autor  FROM disco,autor_dj where disco.autor = autor_dj.cod_DJ GROUP BY cod_disco ORDER by disco.nombre_disco DESC";
				}
				}else {
					consulta = "SELECT distinct disco.*,autor_dj.nombre_dj ,autor_dj.cod_DJ,autor_dj.img_autor FROM disco,autor_dj where disco.autor = autor_dj.cod_DJ GROUP BY cod_disco";
				}
				if(request.getParameter("busqueda")!=null) {
					consulta = "SELECT * FROM disco,autor_dj where disco.autor = autor_dj.cod_DJ  and autor_dj.nombre_dj like '%"+request.getParameter("busqueda")+"%'";
				}
			// Paso 4: Ejecutar la sentencia SQL a través de los objetos Statement		
			ResultSet rset = sentencia.executeQuery(consulta);
			// Paso 5: Mostrar resultados
			if (!rset.isBeforeFirst()) {    
				out.println("<h3>No hay resultados</p>");
			}
			out.println("<html> <head> <meta charset='UTF-8'/></head><body>");
			out.println("<form action='./MostrarCatalogo' method='post'>");
			out.println("<input type='text' name='busqueda'/>");
			out.println("<input type='submit' name='enviar' value='Enviar'/>");
			out.println("<table style='border: 0'>"
					+ "<tr style='background-color: lightblue'>");
			out.println("<th>Cod</th>"
					+"<th>Nombre<a href='./MostrarCatalogo?orden=asc'>&#9650</a><a href='./MostrarCatalogo?orden=desc'>&#9660</a></th>"
					+ "<th>Fch_salida</th>"
					+ "<th>Descripcion</th>"
					+ "<th>Img</th>"
					+ "<th>Nombre_dj</th>"
					+ "<th>Datos</th>");
			out.println("</tr>");

			while (rset.next()) {
				obra=new Obra(rset.getInt("cod_disco"), rset.getString("nombre_disco"), rset.getDate("fecha_salida"),rset.getString("descripcion"),rset.getString("nombre_dj"),rset.getString("img_disco"),rset.getInt("cod_dj"),rset.getString("img_autor"));
				out.println("<tr bgcolor='lightgreen'>");
				out.println("<td>"+obra.getCod_disco()+"</td>"
						+"<td>"+obra.getNombre_disco()+"</td>"
						+"<td>"+obra.getFecha_salida()+"</td>"
						+"<td>"+obra.getDescripcion()+"</td>"
						+"<td><img width=100px src='./img/"+obra.getImg_disco()+"'/>"+"</td>"
						+"<td><a href='./MostrarObra?cod_disco="+obra.getCod_disco()+"'>"+obra.getAutor()+"</a></td>"
						+"<td><a href='./MostrarAutor?cod_DJ="+obra.getCod_DJ()+"'>ver</a></td>");
				out.println("</tr>");	

			}
			out.println("</table>");
			out.println("<a href='"+request.getRequestURI()+"MostrarCatalogo'><button>Limpiar filtros</button></a>");

		
			
			// Paso 6: Desconexión
			if (rset != null)
				rset.close();
			if (sentencia != null)
				sentencia.close();
			if (conn != null)
				conn.close();
		} catch (Exception e) {
			e.printStackTrace();
			out.println("<p>No existe</p>");
		}  
	
		Usuario usuario = (Usuario) session.getAttribute("usuario");
		out.println("<h4>Sesión iniciada como <a href='http://localhost:8080/U5P03-AutenticacionJavaEE/Cuenta'>" 
			+ usuario.getNombre() + "</a></h4>");
		out.println("</body></html>");
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
