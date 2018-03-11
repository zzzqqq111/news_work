<?php
class search extends indexMain{
    function init(){
        $this->selectByCat();
        $this->selectByCon();
        $this->smarty->display("sousuo.html");
}

    function selectByCat(){
        $db=new db("category");
        $result=$db->where("pid=0")->select();
        $this->smarty->assign("res",$result);
    }

    function selectByCon(){
        $db=new db("list");
        $result=$db->setField("list.*,user.*")->where("list.pos=3 and list.uid=user.uid")->join("list,user");
        $this->smarty->assign("r",$result);
    }

    function selectById(){
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


    function selectByKey(){
        $keywords=$_POST["keywords"];
        $db=new db("list");
        $result=$db->where("keywords='{$keywords}'")->select();
        $result1=$db->select();
        $this->smarty->assign("rrrr",$result1);
        if($result){
//            $this->session->set("lid",$result["lid"]);
            $this->smarty->assign("resu",$result);
            $this->smarty->display("sousuo-success.html");
        }else{
            $this->smarty->assign("rrrr",$result1);
            $this->smarty->display("sousuo-fail.html");
        }
   }
}