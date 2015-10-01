  <html>
  <head>
    </head>
  <body>
  <?php

    if (isset($_POST["submit"]))
   {
    $con=mysql_connect("localhost","root","");
     mysql_select_db("assignment3",$con);
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];

    $sid = $_POST['sid'];
    $slot = $_POST['slot'];
    $email = $_POST['email'];
   if(!empty($fname)&&!empty($lname)&&!empty($sid)&&!empty($email)&&!empty($slot))
     {
      $check="SELECT seat from $slot";

      if($output=mysql_query($check))
      {
        while ($row= mysql_fetch_array($output)){
          $prevseat=$row['seat'];
        }
        if($prevseat>0)
        {
       $query = $sql="INSERT INTO student VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[sid]','$_POST[slot]')";
     if(mysql_query($query))
      {

        $seat= $prevseat-1;
       $query1="UPDATE $slot SET seat= '$seat' WHERE seat= '$prevseat'; ";
      if(mysql_query($query1))
      {
                echo"<script>alert('Registration complete');</script>";
      }else{
        echo mysql_error();
      }
     }
     else{
        echo mysql_error();
      
      }
      
        }else{
          echo"<script>alert('No more seat is available')</script>";
        }
      }else{
        echo mysql_error();
      }


     }
   
   }


  ?>
  <form name="one" action="index.php" method="post" >
  <!-- we will create registration.php after registration.html -->
  FNAME:<input type="text" name="fname" value=""></br>
  LNAME:<input type="text" name="lname" value=""></br>
  EMAIL-ID:<input type="text" name="email" value=""></br>
  SID:<input type="text" name="sid" value=""></br>
  Time Slot: <select name="slot" >
         <option value ="one"> Sec 1 Monday 15:00-17:00</option>
         <option value ="two">Sec 2 Tuesday 14:00-16:00</option>
         <option value ="three">Sec 3 Thursday 11:00-13:00</option>
         <option value ="four">Sec 4 Wednesday 10:00-12:00</option>
  </select><br/><br/>

  <input type="submit" name="submit" value="submit">
  </form>

  </body>
  </head>
  </html>