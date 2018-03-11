<?php
class lists extends main{
    function select(){
        $db=new db("");
        $result=$db->setField("list.* ,category.cname")->where("list.cid=category.cid")->join("list,category");
        $this->smarty->assign("result",$result);
        $this->smarty->display("showContent.html");
    }

    function list1(){
        $db=new db("pos");
        $result=$db->select();

        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);

        $this->smarty->assign("result",$result);
        $this->smarty->display("addCon.html");
    }

    function addCon(){
        $cid1=$_POST["pid"];
        $title1=$_POST["title"];
        $info1=$_POST["txt"];
        $img1=$_POST["imgUrl"];
        $price1=$_POST["price"];
        $keywords1=$_POST["keywords"];
        $uid=$_SESSION["id"];
        $pos=$_POST["posid"][0];
        $address=$_POST["address"];
        $add=$_POST["add"];
        $db=new db("list");
        if($db->insert("title='{$title1}',info='{$info1}',img='{$img1}',price={$price1},keywords='{$keywords1}',cid={$cid1},uid={$uid},pos={$pos},address='{$address}',addE='{$add}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=lists&a=list1");
        }
    }

    function edit(){
        $lid=$_POST["id"];
        $attr=$_POST["attr"];
        $val=$_POST["val"];
        $db=new db("list");
        if($db->where("lid={$lid}")->update("$attr='{$val}'")>0){
            echo "ok";
        }
    }

    function del(){
        $rid=$_GET["sid"];
        $db=new db("list");
        if($db->del("lid={$rid}")>0){
            $this->jump("删除成功","index.php?m=admin&f=lists&a=showContent");
        }
    }

}