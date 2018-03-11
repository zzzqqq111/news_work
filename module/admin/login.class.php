<?php
class login extends main
{
    function init()
    {
        if ($this->session->get("logined")) {
            echo "<script>location.href='index.php?m=admin&f=login&a=main'</script>";
            exit;
        }
        $num = mt_rand(50, 100);
        $this->session->set("position", $num);
        $this->smarty->assign("position", $num);
        $this->smarty->display("login.html");
    }

    function upload()
    {
        $this->smarty->display("shangchuantouxiang.html");
    }

    function code()
    {
        $obj = new code();
        $obj->codeUrl = "demo.ttf";
        $obj->output();
        $this->session->set("code", $obj->current);
    }

    function check()
    {
        if(strtolower($_POST["code"])!=$this->session->get("code")) {
            echo "<script>alert('验证码有误');location.href='index.php?m=admin&f=login'</script>";
            exit;
        }

        $mname = $_POST["mname"];
        $mpass = md5($_POST["mpass"]);
        $dbobj = new db("user");
        $result = $dbobj->where("rid=1")->select();

        foreach ($result as $v) {
            if ($v["uname"] == $mname) {
                if ($v["upwd"] == $mpass) {
                    $this->session->set("login", "yes");
                    $this->session->set("logined", "yes");
                    $this->session->set("name", $mname);
                    $this->session->set("id", $v["uid"]);
//                    $this->session->set("rid", $v["rid"]);
                    echo "<script>alert('登陆成功');location.href='index.php?m=admin&f=login&a=main'</script>";
                    exit;
                }
            }
        }

        echo "<script>alert('登陆失败');location.href='index.php?m=admin&f=login'</script>";

    }

    function register(){
        $mname=$_POST["mname"];

        if(empty($mname)){
            echo "用户名不能为空";
            exit;
        }

        $db=new db("user");
        $result=$db->where("uname='{$mname}'")->select();
        if(count($result)>0){
            echo "用户名存在";
            exit;
        }

        $uphone=$_POST["mphone"];
        if(empty($uphone)){
            echo "电话不能为空";
            exit;
        }

        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }

        $mpass1=$_POST["mpass1"];
        if(empty($mpass1)){
            echo "确认密码不能为空";
            exit;
        }

        if($mpass!=$mpass1){
            echo "两次密码不匹配";
            exit;
        }

        $mpass=md5($mpass);

        if($db->insert("uname='{$mname}',upwd='{$mpass}',uphone='{$uphone}'")){
            echo "ok";
            exit;
        }


    }

    function main()
    {
        if ($this->session->get("login")) {
            $this->smarty->assign("name", $_SESSION["name"]);
//            $this->smarty->assign("rid", $_SESSION["rid"]);

            $this->smarty->display("main.html");
        } else {
            echo "<script>alert('请登陆');location.href='index.php?m=admin&f=login'</script>";
        }
    }

    //图片拖拽
    function checkcode()
    {
        $position = $_POST["position"];
        if ($position == $_SESSION["position"]) {
            $this->session->set("codeok", "ok");
            echo "ok";

        } else {
            echo "no";
        }
    }

    function logout()
    {
        $this->session->clear();
        echo "<script>alert('退出成功');location.href='index.php?m=admin&f=login'</script>";
    }

}
