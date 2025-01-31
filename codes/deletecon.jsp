<%@page import="mypack.connectionManager"%>
<%
String mob=request.getParameter("d");
String command="delete from contact where mob='"+mob+"'";
connectionManager cm=new connectionManager();
if(cm.ExecuteInsertUpdateOrDelete(command))
{
out.print("<script>alert('This contact data is deleted form database');window.location.href='../AdminZone/contactmgmt.jsp'</script>");
}
else
{
out.print("<script>alert('This contact data is not deleted form database');window.location.href='../AdminZone/contactmgmt.jsp'</script>");
}
%>