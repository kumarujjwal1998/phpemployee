package com.shivam;

import java.sql.*;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
 
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;
 
@Controller
public class LoginController {
   @RequestMapping("/login")  
   public ModelAndView login(HttpServletRequest request,HttpServletResponse response) {
	  String username=request.getParameter("username");  
      String password=request.getParameter("password");
      String message;
      
      String url = "jdbc:mysql://localhost:3306/shivam";
	String user = "root";
	String pass = "123";
	
	try {
		
		Class.forName("com.mysql.jdbc.Driver");
		Connection con = DriverManager.getConnection(url,user,pass);
		Statement st = con.createStatement();
		//st.execute("");
		
		ResultSet rs = st.executeQuery("select * from login");
		
		int flag=0;
		while(rs.next()) {
			if( ((String)rs.getObject(1)).equals(username) && ((String)rs.getObject(2)).equals(password) ) {
				flag=1;
			}
				
		}
		
		if(flag==1) {
			message = "Welcome " +username + ".";
		    return new ModelAndView("welcome", "message", message);  
		}
		
		}catch(Exception e) {
			
		}
	
	message = "Wrong username or password.";
	return new ModelAndView("errorPage", "message", message);
      
//      if(userName.equals("shivam")  && password.equals("123")){
//    	  message = "Welcome " +userName + ".";
//	      return new ModelAndView("welcome", "message", message);  
// 
//      }else{
//    	  message = "Wrong username or password.";
//    	  return new ModelAndView("errorPage", "message", message);
//      }
   }
}