import java.io.IOException;
import javax.servlet.*;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;

@WebServlet("/login")
public class LoginServlet extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        String email = request.getParameter("email");
        String password = request.getParameter("password");

        // Simulated login check. Replace with DB logic.
        if ("admin@example.com".equals(email) && "admin123".equals(password)) {
            response.getWriter().println("<h3>Login Successful!</h3>");
        } else {
            response.getWriter().println("<h3>Invalid Credentials</h3>");
        }
    }
}
