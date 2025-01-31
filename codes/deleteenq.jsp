<%@page import="mypack.connectionManager"%>
<%
String mob=request.getParameter("d");
String command="delete from enquery where mob='"+mob+"'";
connectionManager cm=new connectionManager();
if(cm.ExecuteInsertUpdateOrDelete(command))
{
out.print("<script>alert('This enquiry data is deleted form database');window.location.href='../AdminZone/enquirymgmt.jsp'</script>");
}
else
{
out.print("<script>alert('This enquiry data is not deleted form database');window.location.href='../AdminZone/enquirymgmt.jsp'</script>");
}
%>