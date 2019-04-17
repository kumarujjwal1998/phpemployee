package a5;

import java.sql.*;
import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;

@WebServlet("/login")
public class LoginClass extends HttpServlet {
	
	public void service(HttpServletRequest req, HttpServletResponse res) throws IOException, ServletException {
		
		int rollno = Integer.parseInt(req.getParameter("rollno"));
		String name = req.getParameter("name");
		
		try {
			
			String url = "jdbc:mysql://localhost:3306/param";
			String user = "root";
			String pass = "123";
			
			Class.forName("com.mysql.jdbc.Driver");
			Connection con = DriverManager.getConnection(url,user,pass);
			Statement st = con.createStatement();
			
			ResultSet rs = st.executeQuery("select * from login");
			//st.execute("insert into login values(3,'shivam')");
			int flag=0;
			while(rs.next()) {
				if( ((int)rs.getObject(1))==rollno && ((String)rs.getObject(2)).equals(name) ) {
					flag=1;
				}
			}
			
			if(flag==1) {
				res.sendRedirect("welcome.jsp");
			}else {
				res.sendRedirect("error.jsp");
			}
			
			
		}catch(Exception e) {
			
		}
		
		
		
	}
	
}
