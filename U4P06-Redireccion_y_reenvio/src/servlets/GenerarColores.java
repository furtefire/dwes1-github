package servlets;

import java.io.IOException;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class GenerarColores
 */
@WebServlet("/GenerarColores")
public class GenerarColores extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public GenerarColores() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		if (request.getAttribute("numero")==null) {
			response.sendRedirect("./Sorpresa");
			//out.println("<h2>Error</h2>");
		}else {
			int x =(int) (Math.random()*255);
		request.setAttribute("rojo",x);
		 x =(int) (Math.random()*255);
		 request.setAttribute("verde",x);
		 x =(int) (Math.random()*255);
		 request.setAttribute("azul",x);
		 RequestDispatcher rd =request.getRequestDispatcher("/MostrarNumero");
	    	rd.forward(request, response);
		}
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
