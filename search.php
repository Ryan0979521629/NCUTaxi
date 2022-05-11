<?php
    require_once'../database.php';//連接資料庫
?>
<!doctype html>
<html lang="zh-Hunt-TW">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="side.js"></script>
   
    <title>NCU揪團搭車去</title>
    <style>
      h1{
        margin: 0%;
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
    <link rel="stylesheet" href="../style.css"/>
  </head>

  
  <body>
    <div class="fa-3x">
      <h1 class="text-center"><i class="fas fa-duotone fa-bus-alt"></i>NCU揪團搭車去</h1>
    </div>
      <script>
        
        function show3(item){
          document.getElementById("dropdownMenuButton3").innerHTML = item.innerHTML;
          document.getElementById( 'firstpoint' ).value = item.innerHTML;
        }
        function show4(item){
          document.getElementById("dropdownMenuButton4").innerHTML = item.innerHTML;
          document.getElementById( 'endpoint' ).value = item.innerHTML;
        }
      
      </script>
      <script> 
    function check() {
    if(PhoneNumber.value.length!=10){alert("手機號碼格式錯誤! 請重新輸入"); 
                                         create_FirstName.value="";
                                        create_peple.value="";
                                        create_money.value="";
                                        PhoneNumber.value="";
                                    return false;
                                }else{
                                    if( create_FirstName.value!="" && create_peple.value!="" &&  create_money.value!="" && String(PhoneNumber.value).charAt(0)=="0" ){
                                            alert("資料輸入成功");
                                    }else{
                                        alert("資料輸入錯誤，請重試");
                                        create_FirstName.value="";
                                        create_peple.value="";
                                        create_money.value="";
                                        PhoneNumber.value="";
                                        return false;
                                        }
                                        }
        }
        function check1(){
          if(document.getElementById("PhoneNumber1").value.length!=10 | String(document.getElementById("PhoneNumber1").value).charAt(0)!="0"){
        alert("手機號碼格式錯誤! 請重新輸入");
        document.getElementById("PhoneNumber1").value="";
        document.getElementById("name1").value="";
        return false;
    }else{
        alert("輸入成功!!!");
    }
} 
  function check2(){
    if(search.value.length>0){
    }else{
        return false;
         }
                            }
  
  </script>
      <div class="container-all">
        <div class="container-left">
          <nav id="sidebar">
            <button class="collapse-btn" type="button" id="room"><i class="fas fa-thin fa-align-justify"></i></button>
            <ul class="list-unstyled">
              <h2 class="nRoom"><i class="fas fa-solid fa-house"></i>創建新房間</h2>
              <li>
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                  出發點
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <script>var a=0 ;var b=0</script>
                  <li><a class="dropdown-item" onclick="show3(this)">中央大學</a></li>
                  <li><a class="dropdown-item" onclick="show3(this)">中壢車站</a></li> 
                  <li><a class="dropdown-item" onclick="show3(this)">桃園高鐵站</a></li>
                  <li><a class="dropdown-item" onclick="show3(this)">中原夜市</a></li>
                  <li><a class="dropdown-item" onclick="show3(this)">中壢夜市</a></li>
                </ul>
              </li>
              <li>
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                  抵達點
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" onclick="show4(this)">中央大學</a></li>
                  <li><a class="dropdown-item" onclick="show4(this)">中壢車站</a></li> 
                  <li><a class="dropdown-item" onclick="show4(this)">桃園高鐵站</a></li>
                  <li><a class="dropdown-item" onclick="show4(this)">中原夜市</a></li>
                  <li><a class="dropdown-item" onclick="show4(this)">中壢夜市</a></li>
                  </ul>
              </li>
              <form method="POST" action="create_room.php" onsubmit="return check()">
              <li>
                <input type="text" id="create_peple" name="create_peple" placeholder="人數" ><i class="fas fa-light fa-people-group col"></i>
              </li>
              <li>
                <input type="text" id="create_money" name="create_money" placeholder="錢"><i class="fas fa-thin fa-money-bill-1-wave col"></i>
              </li>
              <li>
                <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="電話號碼"><i class="fas fa-thin fa-phone col"></i>
              </li>
              <li>
                <input type="text" id="create_FirstName" name="create_FirstName" placeholder="姓名"><i class="fas fa-thin fa-file-signature col"></i>
              </li>
              <li>
                <input type="hidden"  name="firstpoint" id = "firstpoint" value = "NULL" >
                <input type="hidden"  name="endpoint"   id = "endpoint" value = "NULL" >
              </li>
              <button class="btn btn-primary" type="submit">創建</button>
            </form>
            
          </nav>
        </div>
        <div class="container-right">
          <h2>找找看你要去哪</h2>
          <div class="dropdown">
            <form  action="http://localhost/HTML/data1/search.php" method="POST" onsubmit="return check2()">
                <div ><input type="text" id='search' name="search" placeholder="搜尋代碼" style="float:left;border-radius:10px ;text-align:center;height:50px;flex:2;"  /></div>
                <div ><input type="submit"  class="btn btn-primary"></div>
            </form>
            <br/>
            <div ><button  id="exit" class="btn btn-primary">回到大廳</button></div>
                
        
    </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" onclick="showGenre(this)">中央大學</a></li>
              <li><a class="dropdown-item" onclick="showGenre(this)">中壢車站</a></li> 
              <li><a class="dropdown-item" onclick="showGenre(this)">桃園高鐵站</a></li>
              <li><a class="dropdown-item" onclick="showGenre(this)">中原夜市</a></li>
              <li><a class="dropdown-item" onclick="showGenre(this)">中壢夜市</a></li>
            </ul>
            <div class="table">
        <table>
            <tr>
                <th>序號</th>
                <th>姓氏</th>
                <th>起點-終點</th>
                <th>人數:</th>
                <th>金額:</th>
                <th>是否加入</th>
            </tr>
    <?php
    $search=$_POST["search"];
    $sql1="SELECT * FROM`room` WHERE random=$search;";
    $result1=mysqli_query($link,$sql1);
    if($result1){
        if(mysqli_num_rows($result1)>0){
            while($row=mysqli_fetch_assoc($result1)){
                $sql2='SELECT COUNT(randomnumber) FROM `client` WHERE randomnumber = '.$row["random"];
                    $result2=mysqli_query($link,$sql2);
                    $row1=mysqli_fetch_array($result2);
                if($row["firstname"]!=NULL){
                    echo "<tr>";
                    echo "<td>".$row["random"]."</td>";
                    echo "<td>".$row["firstname"]."先生/小姐</td>";
                    echo "<td>中央到桃園</td>";
                    echo "<td>".strval(intval($row1[0])+1)."/".$row["people"]."</td>";
                    echo "<td>".$row["money"]."</td>";
                    if (intval($row1[0])+1<intval($row["people"])){
                    echo '<td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#x'.$row["random"].'">
                      加入
                    </button>
                    <div class="modal fade" id="x'.$row["random"].'" tabindex="-1" aria-labelledby="enter_modal_label" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="enter_modal_label">個人訊息</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                        <form method="POST" action="http://localhost/HTML/data1/'.$row["random"].'.php" onsubmit="return check1()">
                        <div class="modal-body">
                          <input type="tel" placeholder="請輸入手機號碼" id="PhoneNumber1" name="guest_PhoneNumber pattern="[0]{1}[0-9]{9}""/>
                          <br>
                          <input type="text" placeholder="請輸入姓名" id="name1" name="guest_name02"/>
                          <input type="hidden" name="guest_randomnumber" value = "'.$row["random"].'"
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                          <button type="submit" class="btn btn-primary">加入</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </td>
                  
                  '
                ;}else{
                        echo "<td><p>已滿人!!</p></td>";
                    }
                    
                   
            }
        }echo "</tr>";
    }else{echo "<script>alert('目前無此序號，請重新查找')</script>";
        echo "<script>window.location.href='http://localhost/HTML/data1/app.php'</script>";
    }} 

?>
    


    
        </table>
          </div>
        </div>
      </div>
  </body>
</html>
<script>  var exit=document.getElementById("exit");
    exit.addEventListener("click",function(){
        window.location.href="app.php"})  
</script> 
