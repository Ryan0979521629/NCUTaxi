
var PhoneNumber=document.getElementById("PhoneNumber");
var name1=document.getElementById("name");
var btn=document.getElementById("btn");
btn.addEventListener("click",function(){
    if(PhoneNumber.value.length!=10){
        alert("手機號碼格式錯誤! 請重新輸入")
        PhoneNumber.value="";
        name1.value="";
    }
    else{
        window.location.href="index.html"}
})
