import java.io.IOException;
import javax.servlet.*;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;

@WebServlet("/register")
public class RegisterServlet extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        String fName = request.getParameter("fName");
        String lName = request.getParameter("lName");
        String email = request.getParameter("email");
        String password = request.getParameter("password");

        // For now, just print to console. In real use, save to DB.
        System.out.println("Registered: " + fName + " " + lName + " | " + email);

        response.setContentType("text/html");
        response.getWriter().println("<h3>Registration Successful!</h3>");
    }
}
