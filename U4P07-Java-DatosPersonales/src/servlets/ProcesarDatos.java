package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Enumeration;
import java.util.Map;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


/**
 * Servlet implementation class ProcesarDatos
 */
@WebServlet("/ProcesarDatos")
public class ProcesarDatos extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ProcesarDatos() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		if(request.getParameter("enviar")==null) {
			response.sendRedirect("./index.html");
		}else {
		PrintWriter out =response.getWriter();
		out.println("<html><head><title>Datos Formulario</title></head><body>");
		out.println("<h3>Nombres de todos los campos</h3>");
		out.println("<ul>");
		Enumeration<String>parametros=request.getParameterNames();
		while (parametros.hasMoreElements()) {
			out.println("<li>"+parametros.nextElement()+"</li>");
			
		}
		out.println("</ul>");	
		out.println("<h3>Parejas campo-valores de todos los campos</h3>");
		Map<String,String[]>pares=request.getParameterMap();
		pares.forEach((parametro,valor)->{
			out.println("<p>"+parametro+": ");
			for (String v:valor) {
				out.println("- "+v);
			}
		});
		
		out.println("<h3>Fecha con el formato local</h3>");
		SimpleDateFormat formatoFechaFormulario=new SimpleDateFormat("yyyy-MM-dd");
		try {
			Date fecha = formatoFechaFormulario.parse(request.getParameter("fecha"));
			SimpleDateFormat formatoFechaSalida=new SimpleDateFormat("dd/MM/yyyy");
			out.println("Fecha "+formatoFechaSalida.format(fecha));
		}catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		out.print("</body></html>");
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
