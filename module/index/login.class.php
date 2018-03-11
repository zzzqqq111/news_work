<?php
class login extends indexMain{
    function init(){
        $this->smarty->display("login.html");
    }

    function second(){
        $this->smarty->display("login1.html");
    }

    function regs(){
        $this->smarty->display("sign-up.html");
    }

    function reg(){
        if($_POST["code"]!==$this->session->get("code")){
            echo "验证码错误";
            exit;
        }

        $mname=$_POST["mname"];

        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->where("mname='{$mname}'")->select();
        if(count($result)>0){
            echo "用户名存在";
            exit;
        }

        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $mpass1=$_POST["mpass1"];
        if(empty($mpass)){
            echo "确认密码不能为空";
            exit;
        }

        if($mpass!=$mpass1){
            echo "两次密码不一致";
            exit;
        }

        $mpass=md5($mpass);

        if($db->insert("mname='{$mname}',mpass='{$mpass}'")){
            echo "ok";
            exit;
        }


    }

    function willLogin(){
        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $db=new db("user");
        $result=$db->where("rid=2")->select();
        foreach ($result as $v){
            if($v["uname"]==$mname){
                if($v["upwd"]==md5($mpass)){
                    $this->session->set("indexLogin","yes");
                    $this->session->set("mname",$v["uname"]);
                    $this->session->set("mphone",$v["uphone"]);
                    $this->session->set("img",$v["uimg"]);
                    $this->session->set("mid",$v["uid"]);
                    echo "ok";
                    exit();
                }
            }
        }
        echo "用户名或密码有误";

    }

    function logout(){
        $this->session->clear();
        echo "<script>alert('退出成功');</script>";
        $this->smarty->display("login1.html");
    }

    function main(){
        if ($this->session->get("indexLogin")) {
            $this->smarty->assign("name", $_SESSION["mname"]);
            $this->smarty->assign("uid", $_SESSION["mid"]);
            $db=new db("list");
            $result=$db->limit(3)->where("pos=3")->select();
            $this->smarty->assign("result",$result);
            $price=$db->limit(1)->select();
            $this->smarty->assign("price",$price);
            $this->smarty->display("index.html");
        } else {
            echo "<script>alert('请登陆');location.href='index.php?m=index&f=login'</script>";
        }
    }
}