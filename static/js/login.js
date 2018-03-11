$(function(){
    $(".zhong").click(function(){
        var uname=$(".dl").val();
        var upass=$(".pass").val();
        $.ajax({
            url:"index.php?m=admin&f=login&a=check",
            type:"post",
            data:{mname:uname,mpass:upass},
            success:function(e){
                if(e=="ok"){
                    location.href="index.php?m=admin&f=login&a=main";
                }else{
                    alert(1);
                }
            }
        })
    })
})
