package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import model.Autor;
import model.Usuario;

/**
 * Servlet implementation class MostrarAutorServlet
 */
@WebServlet("/MostrarAutor")
public class MostrarAutorServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public MostrarAutorServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		HttpSession session = request.getSession();
		PrintWriter out = response.getWriter();
		String error ="";
		if (request.getParameter("cod_DJ") == null)
			error="Error Falta identificador DJ";

		response.setContentType("text/html; charset=UTF-8");
		out.println("<html> <head><style>td,th{text-align:center}</style><meta charset='UTF-8'/></head><body>");
		if (!error.isEmpty()) {
			System.out.println(error);
			response.sendRedirect("./MostrarCatalogo");
		}
		Autor autor;
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
			sentencia = conn.createStatement();

			String consulta = "SELECT distinct * FROM autor_dj where cod_DJ="+request.getParameter("cod_DJ")+"" ;
			ResultSet rset = sentencia.executeQuery(consulta);

			if (!rset.isBeforeFirst() ) {    
				out.println("<h3>Error: identificador de obra no válido</h3>");
			}
				out.println("<html> <head> <meta charset='UTF-8'/></head><body>");
				out.println("<table style='border: 0'>"
						+ "<tr style='background-color: lightblue'>");
				out.println("<th>Cod</th>"
						+"<th>Nombre</th>"
						+ "<th>nacionalidad</th>"
						+ "<th>Descripcion</th>"
						+"<th>Genero Musical</th>"
						+ "<th>Img</th>");
				out.println("</tr>");

				while (rset.next()) {
					autor = new Autor(rset.getInt("cod_DJ"),rset.getString("nombre_dj"),rset.getString("nacionalidad"),rset.getString("descripcion"),rset.getString("genero_musical"),rset.getString("img_autor"));
					out.println("<tr bgcolor='lightgreen'>");
					out.println("<td>"+autor.getCod_dj()+"</td>"
							+"<td>"+autor.getNombre_dj()+"</td>"
							+"<td>"+autor.getNacionalidad()+"</td>"
							+"<td>"+autor.getDescripcion()+"</td>"
							+"<td>"+autor.getGenero_musical()+"</td>"
							+"<td><img width=100px src='./img/"+autor.getImg_autor()+"'/>"+"</td>");
					out.println("</tr>");	

				}
				out.println("</table>");
				out.println("<a href='./MostrarCatalogo'><button>Volver</button></a>");

				// Paso 6: Desconexión
				if (sentencia != null)
					sentencia.close();
				if (conn != null)
					conn.close();
		
		} catch (Exception e) {
			e.printStackTrace();
		}
		Usuario usuario = (Usuario) session.getAttribute("usuario");
		out.println("<h4>Sesión iniciada como <a href='"+request.getRequestURI()+"Cuenta'>" 
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
