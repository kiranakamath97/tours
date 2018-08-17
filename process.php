<html>
    <head>
    <title>process</title></head>
   <body>
    <?php
       $NAME=$_POST['name'];
       $MOBILE=$_POST['mobile'];
       $SUBJECT=$_POST['subject'];
       $EMAIL=$_POST['email'];
       $MESSAGE=$POST['message'];
       $C=mysqli_connect('localhost','root','','tours');
       if(!$C)
           exit("error in connecting");
       $db=mysqli_select_db($C,"tours");
       if(!$db)
           exit("error in selecting database");
       $insert_query="INSERT INTO CONTACT VALUES('$NAME','$MOBILE','$SUBJECT','$EMAIL','$MESSAGE')";
       $result = mysqli_query($C,$insert_query);
       if (!$result)
           exit("Error in inserting");
       else
            exit("Inserted successfully");
       mysqli_close($C);
       ?>
    </body> 
</html>
