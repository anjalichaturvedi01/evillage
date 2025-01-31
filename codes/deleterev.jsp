<%@page import="mypack.connectionManager"%>
<%
String mob=request.getParameter("d");
String command="delete from feedback where mob='"+mob+"'";
connectionManager cm=new connectionManager();
if(cm.ExecuteInsertUpdateOrDelete(command))
{
out.print("<script>alert('This Review data is deleted form database');window.location.href='../AdminZone/reviewmgmt.jsp'</script>");
}
else
{
out.print("<script>alert('This Review data is not deleted form database');window.location.href='../AdminZone/reviewmgmt.jsp'</script>");
}
%>