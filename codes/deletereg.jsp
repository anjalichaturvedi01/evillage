<%@page import="mypack.connectionManager"%>
<%
String mob=request.getParameter("d");
String command="delete from  registration where mob='"+mob+"'";
connectionManager cm=new connectionManager();
if(cm.ExecuteInsertUpdateOrDelete(command))
{
out.print("<script>alert('This Registration data is deleted form database');window.location.href='../AdminZone/regmgmt.jsp'</script>");
}
else
{
out.print("<script>alert('This Registration data is not deleted form database');window.location.href='../AdminZone/regmgmt.jsp'</script>");
}
%>