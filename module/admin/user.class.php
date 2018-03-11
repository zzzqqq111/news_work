<?php

class user extends main
{

    function __construct()
    {
        parent::__construct();
//        $this->db = new db("user");
    }

    function add()
    {
        $db = new db("role");
        $result = $db->select();
        $this->smarty->assign("str", $result);
        $this->smarty->display("addUser.html");
    }

    function addCon()
    {
        $uname = $_POST["uname"];
        $upass = md5($_POST["upass"]);
        $uphone = $_POST["uphone"];
        $rid = $_POST["rid"];
        $result = $this->db->where("uname='{$uname}' and rid=2")->select();
        if (count($result) > 0) {
            $this->jump("用户名存在", "index.php?m=admin&f=user&a=add");
            exit;
        }
        if ($this->db->insert("uname='{$uname}',upwd='{$upass}',uphone='{$uphone}',rid={$rid}") > 0) {
            $this->jump("添加成功", "index.php?m=admin&f=user&a=add");
        }
    }

    function showUser()
    {
        $db = new db("");
        $result = $db->setField("user.*,role.*")->where("user.rid=role.rid")->join("user,role");
        $this->smarty->assign("result", $result);
        $this->smarty->display("showUser.html");
    }

    function edit()
    {
        $mid = $_GET["sid"];
        $db = new db("user");
        $result = $db->where("uid={$mid}")->select();
        $this->smarty->assign("result", $result);
        $this->smarty->display("editUser.html");
    }

    function editUser()
    {
        $mid = $_POST["uid"];
        $mname = $_POST["uname"];
        $mpass = md5($_POST["upass"]);
        $mphone = $_POST["uphone"];
        $mimg = $_POST["imgUrl"];
        $db = new db("user");
        if ($db->where("uid={$mid}")->update("uname='{$mname}',upwd='{$mpass}',uphone='{$mphone}',uimg='{$mimg}',rid=2") > 0) {
            echo "<script>alert('修改成功');location.href='index.php?m=admin&f=user&a=showUser';</script>";
        }

    }

    function del()
    {
        $mid = $_GET["sid"];
        $db = new db("user");
        if ($db->del("uid={$mid}") > 0) {
            echo "<script>alert('删除成功');location.href='index.php?m=admin&f=user&a=showUser';</script>";
        }
    }

    function delImg()
    {
        $id=$_POST["uid"];
        $db=new db("user");
        if($db->where("uid={$id}")->update("uimg=''")>0){
            echo "ok";
        }
    }
}