<%@page import="mypack.connectionManager" %> 
<%
String oldpass=request.getParameter("oldpass");
String newpass=request.getParameter("newpass");
String cpass=request.getParameter("cpass");
connectionManager cm=new connectionManager();
if(newpass.equals(cpass))
        {
            String email=session.getAttribute("ad").toString();
        String command="update Login set pass='"+newpass+"' where email='"+email+"' and pass='"+oldpass+"'";
        out.print(command);
        }
else
{
out.print("<script>alert('Plz Enter valid passwrd ');window.location.href='../AdminZone/Changepass.jsp'</script>");
}

%>