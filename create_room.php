<?php
    require_once'../database.php';//連接資料庫
    if(isset($_POST["PhoneNumber"])){
    $count=0;
    $firstpoint=$_POST["firstpoint"];
    $endpoint=$_POST["endpoint"];
    $create_randomnumber=rand(1,1000000000);
    $create_peple=$_POST["create_peple"];
    $create_money=$_POST["create_money"];
    $PhoneNumber=$_POST["PhoneNumber"];
    $create_FirstName=$_POST["create_FirstName"];
    $sql2="SELECT `random` FROM `room`;";
    $result2=mysqli_query($link,$sql2);
    $sql="INSERT INTO `room`(`random`)value('{$create_randomnumber}')";
    while($row1=mysqli_fetch_assoc($result2)){
        if($create_randomnumber==$row1["random"]){
            $count+=1;
        }
    };
    if($count==0){
        $result=mysqli_query($link,$sql);
        $myfile = fopen($create_randomnumber.".php", "w");}
        else{echo "<script>alert('序號已被使用，請重新輸入')</script>";
             echo "<script>window.location.href='app.php'</script>";}
        }
    ?>
        <?php
            fwrite($myfile,"<?php require_once'../database.php'; 
            session_start();?>");
            fwrite($myfile,'<?php if(isset($_GET["create_FirstName"])){
            $create_FirstName=$_GET["create_FirstName"];
            $create_randomnumber=$_GET["create_randomnumber"];
            $create_peple=$_GET["create_peple"];
            $create_money=$_GET["create_money"];
            $phone=$_GET["PhoneNumber"];
            $firstpoint=$_GET["firstpoint"];
            $endpoint=$_GET["endpoint"];

            
            $sql="UPDATE `room` SET `firstname`=\'$create_FirstName\' WHERE `random`=$create_randomnumber";
            $sql1="UPDATE `room` SET `people`=$create_peple WHERE `random`=$create_randomnumber";
            $sql2="UPDATE `room` SET `money`=$create_money WHERE `random`=$create_randomnumber";
            $sql3="UPDATE `room` SET `phone`=$phone WHERE `random`=$create_randomnumber";
            $sql4="UPDATE `room` SET `location`=\'$firstpoint-$endpoint\' WHERE `random`=$create_randomnumber";
            $result=mysqli_query($link,$sql);
            $result=mysqli_query($link,$sql1);
            $result=mysqli_query($link,$sql2);
            $result=mysqli_query($link,$sql3);
            $result=mysqli_query($link,$sql4);
            $_SESSION["name"]=$create_FirstName;
            $_SESSION["phone"]=$phone;
            $_SESSION["create_randomnumber"]=$create_randomnumber;
            $_SESSION["firstpoint"]=$firstpoint;
            $_SESSION["endpoint"]=$endpoint;}
            if(isset($_POST["guest_name02"])){
                $count1=0;
                $guest_name=$_POST["guest_name02"];
                $create_randomnumber=$_POST["guest_randomnumber"];
                $guest_PhoneNumber=$_POST["guest_PhoneNumber"];
                $sql7="SELECT * FROM`client`;";
                $result3=mysqli_query($link,$sql7);


                $sql10="SELECT * FROM`room` WHERE `random` =".$_POST["guest_randomnumber"];;
                $result10=mysqli_query($link,$sql10);
                
                
                while($row=mysqli_fetch_assoc($result3)){
                    if($row["phonenumber"]==$guest_PhoneNumber){
                            $count1+=1;}};
                $sql11="SELECT COUNT(randomnumber) FROM `client` WHERE randomnumber = ".$_POST["guest_randomnumber"];
                $result11=mysqli_query($link,$sql11);
                $row11=mysqli_fetch_array($result11);
                while($row10=mysqli_fetch_assoc($result10)){
                    if($count1==0 && empty($row11[0])){$sql5="INSERT INTO `client` (`name`,`phonenumber`,`randomnumber`)VALUES(\'$guest_name\',\'$guest_PhoneNumber\',\'$create_randomnumber\')";
                        $result1=mysqli_query($link,$sql5);}else{
                    if($count1==0 ){if(!empty($row11[0])&&intval($row11[0]+1)<$row10["people"]){
                    $sql5="INSERT INTO `client` (`name`,`phonenumber`,`randomnumber`)VALUES(\'$guest_name\',\'$guest_PhoneNumber\',\'$create_randomnumber\')";
                    $result1=mysqli_query($link,$sql5);}else{echo "<script>alert(\'已經滿人囉，下次請快一點\')</script>";
                        echo "<script>window.location.href=\'app.php\'</script>";
                    }
                    }else{
                                }  }}}
                if(isset($guest_PhoneNumber)){}else{$guest_PhoneNumber=-1;}; 
                if(isset($create_randomnumber)){}else{$create_randomnumber=$_POST["guest_randomnumber"];}    
           ?>');
           fwrite($myfile,'<!DOCTYPE html>
           <html>
               <head>
                
                   <meta charset="UTF-8"></meta>
                   <meta http-equiv="X-UA-Compatible" content="IE=edge">
                   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   <link rel="stylesheet" href="style.css">
                   <title><?php echo $_SESSION["firstpoint"]?>&rArr; <?php echo $_SESSION["endpoint"]?></title>
                   <link rel="stylesheet" href="../style.css"/>
                   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script src="side.js"></script>
                   <script src = "https://code.jquery.com/jquery-3.4.1.min.js"></script>
                   <style>
                            h1{
                            font-family: sans-serif;
                            background-color: cadetblue;
                            color: aliceblue;
                            font-size: larger;
                                }
                            h2{
                            font-family: cursive;
                            font-size: 20px;
                            }
                    </style>
               </head>
               <body>
                   <div class="center">
                   <h1 style="float:left;fontsize:50px"><i class="fas fa-solid fa-bus-school"></i><?php
                   $sql7="SELECT * FROM`room`;";
                   $result4=mysqli_query($link,$sql7);
                   if($result4){while($row=mysqli_fetch_assoc($result4)){
                       if($row["random"]==$create_randomnumber){
                           echo $row["location"];
                         
                           }}}?></h1></div>
                   <?php if(isset($_POST["guest_name02"])){echo "<h1>序號:".$_POST["guest_randomnumber"]."</h1>";}else{echo "<h1>序號:".$_SESSION["create_randomnumber"]."</h1>";}?>
                   <button  type="button" onclick="exit();" style="border-radius:10px ;text-align:center;height:50px;background-color:rgb(125, 225, 125);width:90px"><i class="fas fa-solid fa-chevron-left"></i>離開</button>
                   <script>
                        function exit(){
                            $.ajax({
                                type: "POST",
                                url: "exit.php",
                                data:{guest_PhoneNumber:<?php  echo $guest_PhoneNumber?>
                                      ,randomnumber:<?php echo $create_randomnumber?>},
                                success:function(result) {
                                    window.location.href="app.php"
                                    },
                                error:function(xhr) {
                                alert("Ajax request 發生錯誤");
                                    }
                                });
                            }
   
                    </script>
                <table class="table table-striped table-hover">
                    <thead>
                       
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">編號</td>
                            <td scope="col">Name</td>
                            <td scope="col">PhoneNumber</td>
                        </tr>
                        <?php
                        $sql7="SELECT * FROM`room`;";
                        $result4=mysqli_query($link,$sql7);
                        if($result4){while($row=mysqli_fetch_assoc($result4)){
                            if($row["random"]==$create_randomnumber){
                                echo "<tr>";
                                echo "<th scope=\"row\">1</th>";
                                echo "<th>".$row["firstname"]."</th>";
                                echo "<th>"."0".$row["phone"]."</th>";
                              
                                echo "</tr>";}}}?>
                        
                   <?php  $sql6="SELECT * FROM`client`;";
                    $result2=mysqli_query($link,$sql6);
                    if($result2){
                       if(mysqli_num_rows($result2)>0){
                           $count=2;
                           while($row=mysqli_fetch_assoc($result2)){
                            if($row["randomnumber"]==$create_randomnumber){
                                echo "<tr>";
                                echo "<th scope=\"row\">".$count."</th>";
                                
                                echo "<th>".$row["name"]."</th>";
                                echo "<th>"."0".$row["phonenumber"]."</th>";
                                $count+=1;
                                echo "</tr>";
                    
               }}}}echo "</table>";?>
               
               </body>
           </html>');
           
           echo '<script>window.location.href="http://localhost/HTML/data1/'.$create_randomnumber.'.php?create_peple='."$create_peple".'&create_FirstName='."$create_FirstName".'&create_money='."$create_money".'&PhoneNumber='."$PhoneNumber".'&create_randomnumber='."$create_randomnumber".'&firstpoint='."$firstpoint".'&endpoint='."$endpoint".'"</script>';
        ?>
    </body>
</html>


