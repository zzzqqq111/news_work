<?php
class role extends main {
    function add(){
        $this->smarty->display("addRole.html");
    }

    function showRole(){
        $db=new db("role");
        $result=$db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("showRole.html");
    }

    function addCon(){
        $rname=$_POST["rname"];
        $db=new db("role");
        if($db->insert("rname='{$rname}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=role&a=add");
        }
    }

    function del(){
        $rid=$_GET["sid"];
        $db=new db("role");
        if($db->del("rid={$rid}")>0){
            $this->jump("删除成功","index.php?m=admin&f=role&a=showRole");
        }
    }

    function edit(){
        $rid=$_POST["id"];
        $attr=$_POST["attr"];
        $val=$_POST["val"];
        $db=new db("role");
        if($db->where("rid={$rid}")->update("$attr='{$val}'")>0){
            echo "ok";
        }
    }

}