package filters;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.Filter;
import javax.servlet.FilterChain;
import javax.servlet.FilterConfig;
import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;

/**
 * Servlet Filter implementation class WrapFilter
 */
//@WebFilter("/WrapFilter")
public class WrapFilter implements Filter {

    /**
     * Default constructor. 
     */
    public WrapFilter() {
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see Filter#destroy()
	 */
	public void destroy() {
		// TODO Auto-generated method stub
	}

	/**
	 * @see Filter#doFilter(ServletRequest, ServletResponse, FilterChain)
	 */
	public void doFilter(ServletRequest request, ServletResponse response, FilterChain chain) throws IOException, ServletException {
		PrintWriter out=response.getWriter();
		response.setContentType("text/html;UTF-8");
		System.out.println("Inplementando envoltorio");
		ServletContext contexto=request.getServletContext();
		out.println("<html><head><meta charset='UTF-8'/><title>"+contexto.getAttribute("contador")+"</title></head><body>");
		chain.doFilter(request, response);
		out.println("</body></html>");
	}

	/**
	 * @see Filter#init(FilterConfig)
	 */
	public void init(FilterConfig fConfig) throws ServletException {
		// TODO Auto-generated method stub
	}

}
