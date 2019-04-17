package com.action;

import com.business.*;
import com.opensymphony.xwork2.ActionSupport;

public class LoginAction extends ActionSupport{
	
	private String rollno;
	private String name;

	public String execute() {
		
		LoginBusiness lb = new LoginBusiness();
		String result = lb.result(getRollno(), getName());
		
		if(result.equals("success")) {
			return "success";
		}else {
			return "fail";
		}
	}


	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}


	public String getRollno() {
		return rollno;
	}


	public void setRollno(String rollno) {
		this.rollno = rollno;
	}

	
	
}
