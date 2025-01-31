<%@page  import="mypack.connectionManager" %>
<% 
    String name=request.getParameter("name");
    String star=request.getParameter("hdn1");
    String mob=request.getParameter("mob");
    
    String command="insert into feedback values" +"('"+name+"','"+star+"','"+mob+"')";
    connectionManager cm=new connectionManager();
     if(cm.ExecuteInsertUpdateOrDelete(command))
     {
         out.print("<script>alert('Thanks for Feebback');window.location.href='../feedback.html'</script>");
     }
     else
     {
         out.print("<script>alert('Soory your feedback not saved');window.location.href='../feedback.html'</script>");
     }


%>