package com.business;

import java.sql.*;

public class LoginBusiness {
	
	public String result(String rollno, String name) {
		
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
				if( ((int)rs.getObject(1))==Integer.parseInt(rollno) && ((String)rs.getObject(2)).equals(name) ) {
					flag=1;
				}
			}
			
			if(flag==1) {
				return "success";
			}
			
			
		}catch(Exception e) {
			
		}

		return "fail";
	}
	
}
