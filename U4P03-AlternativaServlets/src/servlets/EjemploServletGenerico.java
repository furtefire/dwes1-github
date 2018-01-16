package servlets;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.GenericServlet;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.annotation.WebServlet;

@WebServlet("/EjemploServletGenerico")
public class EjemploServletGenerico extends GenericServlet {
	private static final long serialVersionUID = 1L;

	public void service(ServletRequest req, ServletResponse res) throws IOException {
		log("Petición recibida desde " + req.getRemoteAddr());
		res.setContentType("text/plain");
		res.getWriter().println("Mensaje desde el servlet genérico de ejemplo");
		PrintWriter out = res.getWriter();
		out.println("<html><head><meta charset='UTF-8'/></head>");
		out.println("<body><h1>Implementando la interfaz Servlet Generico </h1>");
		out.println("<a href='./index.html'>Volver<a>");
		out.println("</body></html>");
		res.getWriter().close();
	}
}


