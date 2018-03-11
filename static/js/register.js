$(function () {
    /*var text = document.querySelector(".y1");
    var span = document.querySelector(".jing1");
    text.onblur = function () {
        var val = text.value;
        alert(val);
        var reg = /^1\d{10}$/;
        alert(reg.test(val));
        if (reg.test(val)) {
            span.style.opacity = 0;
        } else {
            span.style.opacity = 1;
        }
    };
    var tt = document.querySelector(".y2");
    var ss = document.querySelector(".jing2");
    tt.onblur = function () {
        var value = tt.value;
        var reg = /^[0-9]{6}$/;
        if (reg.test(value)) {
            ss.style.opacity = 0;
            return value;
        } else {
            ss.style.opacity = 1;
        }
    };
    var tt1 = document.querySelector(".y3");
    var ss1 = document.querySelector(".jing3");
    tt1.onblur = function () {
        var value = tt.value;
        var reg = /^[0-9]{6}$/;
        if (reg.test(value)) {
            ss1.style.opacity = 0;
            return value;
        } else {
            ss1.style.opacity = 1;
        }
    };*/

    $(".xiayibu").click(function(){
        var name=$(".uname").val();
        var pass=$(".upass").val();
        var phone=$(".uphone").val();
        var pass1=$(".upass1").val();
        console.log(name);
        console.log(pass);
        console.log(phone);
        console.log(pass1);
        $.ajax({
            url:"index.php?m=admin&f=login&a=register",
            type:"post",
            data:{mname:name,mpass:pass,mphone:phone,mpass1:pass1},
            success:function(e){
                switch(e){
                    case "用户名不能为空":console.log(e);break;
                    case "电话不能为空":console.log(e);break;
                    case "密码不能为空":console.log(e);break;
                    case "确认密码不能为空":console.log(e);break;
                    case "用户名存在":console.log(e);break;
                    case "ok":location.href="index.php?m=admin&f=login&a=second";break;
                    default:console.log(e);
                }

            }
        })
    })

})