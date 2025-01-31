 <%@page import="java.sql.ResultSet"%>

<%@page import="mypack.connectionManager"%>
<%
String email,pass;
email=request.getParameter("email");
pass=request.getParameter("pass");
String command="select*from login where email='"+email+"'and pass='"+pass+"'";
connectionManager cm=new connectionManager();
ResultSet rs=cm.getData(command);
if(rs.next())
{
session.setAttribute("ad", email);
out.print("<script>alert('Welcome my ADMIN ZONE');window.location.href='../AdminZone/Index.jsp'</script>");

}
else
{
out.print("<script>alert('Invalid User Id or Password');window.location.href='../Login.html'</script>");
}

%>