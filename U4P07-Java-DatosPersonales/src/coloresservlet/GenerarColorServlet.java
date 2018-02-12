package coloresservlet;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
/**
 * Servlet implementation class GenerarColorServlet
 */

  /**
   * Servlet implementation class MostrarColorServlet
   */
  @WebServlet("/GenerarColor")
  public class GenerarColorServlet extends HttpServlet {
  	private static final long serialVersionUID = 1L;
         
      /**
       * @see HttpServlet#HttpServlet()
       */
      public GenerarColorServlet() {
          super();
          // TODO Auto-generated constructor stub
      }

  	/**
  	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
  	 */
  	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
  		if (request.getParameter("enviar")==null) {
  			response.sendRedirect("./color.html");
  		}else {
  			PrintWriter out = response.getWriter();
  			ServletContext contexto = getServletContext();
  			if(request.getParameter("color")==null) {
  				response.sendRedirect(contexto.getContextPath()+"/sorpresa.html");}
  			
  			String color=request.getParameter("color");
  			
  			int numero = Integer.parseInt(request.getParameter("limite")) ;
  			String nombre= request.getParameter("nombre");
  				out.println("<h3>"+nombre+"</h3>");
  				out.println("<h2 style='color:"+color+";'>"+numero+"</h2>");
  				out.close();
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