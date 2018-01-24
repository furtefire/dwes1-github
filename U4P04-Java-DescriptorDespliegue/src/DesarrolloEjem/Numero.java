package DesarrolloEjem;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Numero
 */
//@WebServlet("/Numero")
public class Numero extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Numero() {
        super();
        // TODO Auto-generated constructor stub
    }
    public static int generaNumero() {
 
    	return (int)(Math.random()*1000)+1;
    	
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/><title>Primer Servlet</title></head>");
		out.print("<h1>El numero afortunado es el ...</h1>");
		out.println(generaNumero());
		out.println("<h1>ENHORABUENA!!!!!</h1>");
		out.print("<p>Has ganado un viaje gratuito a cualquier destino para adquirirlo pulse </p>");
		out.println("<a href='https://www.google.es/maps?source=tldsi&hl=es'>Aqui!</a>");
		out.println("</body></html>");
		out.close();
		}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
