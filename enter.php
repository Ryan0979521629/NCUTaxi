<html>
    <head>
        <meta charset="UTF-8"></meta>
        <title>NCU搭車揪團去</title>
        
    </head>    
    <body>
        <?php $random=$_GET['random'];
              ?>
        <form action=<?php echo "http://localhost/HTML/data1/".$random.".php"?> method=post onsubmit="return check()">
            <input type="text" placeholder="請輸入手機號碼" id="PhoneNumber" name="guest_PhoneNumber"/><br/><br/>
            <input type="text" placeholder="請輸入姓名" id="name1" name="guest_name02"/><br/><br/>
            <input type="hidden" name="guest_randomnumber" value=<?php echo $random?>>
            <input type="submit" id="btn" style="background-color:rgba(0, 0, 255, 0.755);color:white;"><br/><br/>
        </form>
    </body>
</html>
<script>function check(){
    if(PhoneNumber.value.length!=10 | String(PhoneNumber.value).charAt(0)!="0"){
        alert("手機號碼格式錯誤! 請重新輸入")
        PhoneNumber.value="";
        name1.value="";
        return false;
    }else{
        alert("輸入成功!!!");
    }
} </script>