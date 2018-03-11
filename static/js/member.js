var tuichu=document.querySelector(".tuichu");
tuichu.onclick=function(){
    location.href="index.php?m=index&f=login&a=logout";
}
var pinglun=document.querySelector(".pinglun");
pinglun.onclick=function(){
    location.href="index.php?m=index&f=member&a=update";
}

var img=document.querySelector(".img");
var uploadphoto=document.querySelector(".uploadphoto");
var uploadimg=document.querySelector(".uploadimg");
var liebiao=document.querySelector(".liebiao");
uploadphoto.onclick= function () {
    img.style.display="block";
    liebiao.style.display="none";
}
var obj = new upload();
obj.createView({
    parent: document.querySelector(".uploadbox")
})
obj.up("index.php?m=index&f=upload&a=move", function (data) {
    document.querySelector("input[name='imgUrl']").value = data;
    uploadimg.style.display="block";
});
var imgurl=document.querySelector("input[name='imgUrl']");
console.log(imgurl);
var updatephoto=document.querySelector('.updatephoto');
console.log(updatephoto);
$(".updatephoto").click(function(){
    $.ajax({
        url:'index.php?m=index&f=member&a=updateimg',
        type:'post',
        data:{img:imgurl},
        success:function(e){
            console.log(e);
            if(e==1){
                alert("success");
            }else{
                alert("fail");
            }
        }
    })
})