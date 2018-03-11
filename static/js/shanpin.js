var mx;    //当前退拽距离
var sx;   // 开始触摸位置
var i=0;   //当前在第几张
var dir="";   //方向
var moveX=0;    //已经移动的距离
var lis=document.querySelectorAll(".box ul li");
var box=document.querySelector(".box");
var tu=document.querySelector(".box ul ");
var l=document.documentElement.offsetWidth;
var startTime;
tu.addEventListener("touchstart",function(e){
    startTime=e.timeStamp;
    sx=e.changedTouches[0].clientX;
    tu.style.transition="none";
});
tu.addEventListener("touchmove",function(e){
    var cx=e.changedTouches[0].clientX;
    mx=cx-sx;
    dir=mx<0?"left":"right";
    tu.style.transform='translateX(${moveX+mx}px)';
    tu.style.left=moveX+mx+"px"
});
tu.addEventListener("touchend",function (e) {
    var now=e.timeStamp;
    var cha=now-startTime;
    if(Math.abs(mx)>l/3||cha<300){
        if(dir=="left"){
            i++;
            if(i>lis.length-1){
                i--;
            }
        }else{
            i--;
            if(i<0){
                i++;
            }
        }
    }
    moveX=-i*l;
    tu.style.transition="all 1s";
//        tu.style.transform='translateX(${moveX}px)';
    tu.style.left=moveX+"px";
})

var shan=document.querySelector("button");
shan.onclick=function(){
    location.href="index.php?m=index&f=login";
}

var timer=setInterval(donghua,1000);
function donghua(){
    $(".f2").animate({"marginLeft":"1.9rem"},800,function(){
        $(".f2").css({
            "marginLeft":"2.2rem"
        })
    });
}


