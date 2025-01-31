

<%@page import="mypack.connectionManager"%>
<%
    String name,mob,email,msg;
    name=request.getParameter("name");
    mob=request.getParameter("mob");
    email=request.getParameter("email");
    msg=request.getParameter("msg");
    String command="insert into contact values('"+name+"','"+mob+"','"+email+"','"+msg+"')";
    connectionManager cm=new connectionManager();
    if(cm.ExecuteInsertUpdateOrDelete(command))
    {
    out.print("<script>alert('Thanks for contacat! As soon as we contact');window.location.href='../contact.html'</script>");
    }
    else
    {
     out.print("<script>alert('Sorry your contact is not save');window.location.href='../contact.html'</script>");
    }
    %>