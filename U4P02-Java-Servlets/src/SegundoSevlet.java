import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

/**
 * Servlet implementation class SegundoSevlet
 */
@WebServlet("/SegundoSevlet")
public class SegundoSevlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public SegundoSevlet() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;UTF-8");
		Date date = new Date();
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/><title>Primer Servlet</title></head>");
		out.println("<body><h1>Segundo servlet</h1>");
		out.println("<h3>Me llamo Sergio !!</h3>");
		out.println("<p>Ejecución de " + request.getContextPath() + "</p>");
		//Caso 1: obtener la hora y salida por pantalla con formato:
		DateFormat hourFormat = new SimpleDateFormat("HH:mm:ss");
		out.println("Hora: "+hourFormat.format(date));
		//Caso 2: obtener la fecha y salida por pantalla con formato:
		DateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy");
		out.println("Fecha: "+dateFormat.format(date));
		//Caso 3: obtenerhora y fecha y salida por pantalla con formato:
		DateFormat hourdateFormat = new SimpleDateFormat("HH:mm:ss dd/MM/yyyy");
		out.println("Hora y fecha: "+hourdateFormat.format(date));
		out.println("<a href='./index.html'>Volver</a>");
		out.println("</body></html>");
		out.close();}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
