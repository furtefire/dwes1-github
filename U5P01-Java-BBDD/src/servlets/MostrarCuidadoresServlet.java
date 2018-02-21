package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class MostrarCuidadoresServlet
 */
@WebServlet("/MostrarCuidadores")
public class MostrarCuidadoresServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public MostrarCuidadoresServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {		
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/></head><body>");
		out.println("<a href='/U5P01-Java-BBDD/MostrarCuidador?idCuidador=12345'>Alberto</a> </br>");
		out.println("<a href='/U5P01-Java-BBDD/MostrarCuidador?idCuidador=23243'>Luis</a></br>");
		out.println("<a href='/U5P01-Java-BBDD/MostrarCuidador?idCuidador=54321'>Áurea</a></br>");
		out.println("<a href='http://localhost:8080/U5P01-Java-BBDD/ModificarAnimal'>ModificarAnimal</a></br>");
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
