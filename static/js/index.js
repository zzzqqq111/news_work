var ss=document.querySelector(".fenlei");
ss.onclick=function(){
    location.href="index.php?m=index&f=search";
}

var manage=document.querySelector(".mymanage");
manage.onclick=function(){
    location.href="index.php?m=index&f=member";
}

var xiaoxi=document.querySelector(".xiaoxi");
xiaoxi.onclick=function(){
    location.href='index.php?m=index&f=message';
}

$(".lunbodian ul li a").each(function (index,obj) {
    $(obj).click(function () {
        var index=$(this).parent().index()
        $(this).addClass("current").parent().siblings().children("a").removeClass("current");
        console.log($(".lunbo>ul>li"))
        $(".lunbo>ul>li").eq(index).addClass("current").siblings().removeClass("current");
    })
})
var timer=setInterval(move,3000);
var lunbo=$(".lunbodian ul li a");
var img=$(".lunbo>ul>li");
var num=0;
function move() {
    num++;
    if(num==lunbo.length){
        num=0
    }
    if(num<0){
        num=num.length-1;
    }
    lunbo.eq(num).addClass("current").parent().siblings().children("a").removeClass("current");
    $(".lunbo>ul>li").eq(num).addClass("current").siblings().removeClass("current");

}
