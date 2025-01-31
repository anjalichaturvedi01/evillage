<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
         $(document).ready(function()
{
$(".im").click(function()
{
    var d=$(this).attr("data");
    $("#hdn1").val(d);
    for(var i=1;i<=5;i++)
    {
        if(i<=d)
        {
            $("#img"+i).attr("src","img/star.jpg");
        }
        else
        {
           $("#img"+i).attr("src","img/star1.jpg"); 
        }
    }
})
})
        </script>
 
          <form action="feedbackcode.php" method="post" style="color:#2e3f61 ;font-size:18px;font-weight:bold;">
Name:
<input type="text" name="name" placeholder="Enter Your name" class="form-control"/><br>

<img id="img1" src="img/star2.png" class="im" data="1" style="height:80px;width:80px"/>
<img id="img2" src="img/star2.png" class="im" data="2" style="height:80px;width:80px"/>
<img id="img3" src="img/star2.png" class="im" data="3" style="height:80px;width:80px"/>
<img id="img4" src="img/star2.png" class="im" data="4" style="height:80px;width:80px"/>
<img id="img5" src="img/star2.png" class="im" data="5" style="height:80px;width:80px"/>
<br><br>
Mobile Number:
<input type="number" name="mob" placeholder="Enter Your Mobile number" class="form-control"/>
<br><br>
<input type="hidden" id="hdn1" name="hdn1"/>

<input type="submit" value="Send Review" class="btn btn-default" style="height:40px;width:180x; background:#2e3f61; color:#a1a1a1;margin-left:200px;border:solid #2e3f61 red;font-size:18px;font-weight:bold"/>
</form>
            
     
    