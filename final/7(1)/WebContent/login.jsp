<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
    <%@ taglib prefix="h" uri="/struts-tags" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<h:form action="login" method="post">
		<h:textfield name="rollno" />
		<h:textfield name="name" />
		<h:submit />
	</h:form>
</body>
</html>