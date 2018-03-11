$(function(){
    $(".return").click(function () {
        history.go(-1);
    })
    $(".zhong").click(function(){
        var uname=$(".dl").val();
        var upass=$(".pass").val();
        if(uname==""&&upass==""){
            $(".error.error1").css("style","block");
            $().validate({
                rules: {
                    uname: {
                        required: true,
                        minlength: 3
                    },
                    upass: {
                        required: true,
                        minlength: 6
                    },
                },
                messages: {
                    uname: {
                        required: "请输入用户名",
                        minlength: "用户名必需由三个字母组成"
                    },
                    upass: {
                        required: "请输入密码",
                        minlength: "密码长度不能小于 6 个字母"
                    },
                }
            });
        }else{
            $.ajax({
                url:"index.php?m=index&f=login&a=willLogin",
                type:"post",
                data:{mname:uname,mpass:upass},
                success:function(e){
                    console.log(e);
                    if(e=="ok"){
                        location.href="index.php?m=index&f=login&a=main";
                    }
                }
            })
        }
    })
})
