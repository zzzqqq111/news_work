<?php
class detail extends indexMain{
    function init(){
        $id=$_GET["id"];
        $db=new db("list");
        $result=$db->where("lid={$id}")->select();
        $this->smarty->assign("re",$result);

        $r1=$db->where("pos=2")->select();
        $this->smarty->assign("r1",$r1);

        $r2=$db->where("pos=3")->select();
        $this->smarty->assign("r2",$r2);

        $db=new db("pos");
        $res=$db->where("posid!=1")->select();
        $this->smarty->assign("res",$res);


        $this->smarty->display("detail.html");
    }

    function zhifu(){
        $this->smarty->display("choose.html");
    }
}