

<%@page import="mypack.connectionManager"%>
<%
    String name,mob,email,msg,city;
    name=request.getParameter("name");
    mob=request.getParameter("mob");
    email=request.getParameter("email");
    msg=request.getParameter("msg");
    city=request.getParameter("city");
    String command="insert into enquery values('"+name+"','"+mob+"','"+email+"','"+msg+"','"+city+"')";
    connectionManager cm=new connectionManager();
    if(cm.ExecuteInsertUpdateOrDelete(command))
    {
    out.print("<script>alert('Thanks for enquery!');window.location.href='../contact.html'</script>");
    }
    else
    {
     out.print("<script>alert('Sorry your contact is not save');window.location.href='../Enquery.html'</script>");
    }
    %>