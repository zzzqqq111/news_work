<?php
class position extends main{
    function add(){
        $this->smarty->display("addPos.html");
    }

    function addCon(){
        $posname=$_POST["posname"];

        $db=new db("pos");
        if($db->insert("posname='{$posname}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=position&a=add");
        }
    }

    function showpos(){
        $db=new db("pos");
        $result=$db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("showPos.html");
    }
}