package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.Date;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class ValidarFormularioServlet
 */
@WebServlet("/ValidarFormulario")
public class ValidarFormularioServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ValidarFormularioServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		PrintWriter out = response.getWriter();	
		String pass = request.getParameter("passwd");
		 String validacion = "(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\\S+$).{3,}";
		 if (pass.matches(validacion)) {
			out.println("Has creado la password satisfactoriamente");
		}else {
			out.print("La password no cumple lo");
		}
		 out.println("\n");
			SimpleDateFormat formatoEntrada = new SimpleDateFormat("yyyy-MM-dd");
			try{
				Date fecha = formatoEntrada.parse(request.getParameter("fecha"));
				Date fechaActual = new Date();
				long lnMilisegundos = fechaActual.getTime();
				long lnMilisegundos1 = fecha.getTime();
				
				
			if(lnMilisegundos>lnMilisegundos1){
				out.println("La fecha "+fecha.toString()+" valida");
				
			}else {
				out.println("La fecha "+fecha.toString()+" invalida , has caducado");
			}
			
			}catch (Exception e) {
				out.println("\n"+e);
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
