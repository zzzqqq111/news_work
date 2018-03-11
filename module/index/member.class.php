<?php
class member extends indexMain{
   function init(){
       $this->smarty->assign("login",$this->session->get("indexLogin"));
       $this->smarty->assign("mname",$this->session->get("mname"));
       $this->smarty->assign("mid",$this->session->get("mid"));
       $this->smarty->assign("img",$this->session->get("img"));
      $this->smarty->display("myworld.html");
   }
    function update(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $this->smarty->assign("mphone",$this->session->get("mphone"));
        $this->smarty->assign("img",$this->session->get("img"));
        $this->smarty->assign("mid",$this->session->get("mid"));
        $this->smarty->display("updateMessage.html");
    }

   function edit(){
       $mid=$_POST["mid"];
       $nicheng=$_POST["nicheng"];
       $name=$_POST["name"];
       $pwd=md5($_POST["pwd"]);
       $imgurl=$_POST["img"];
       $tel=$_POST["tel"];
       $db=new db("user");
       if($db->where("uid={$mid}")->update("img='{$imgurl}' uname='{$name}',upwd='{$pwd}',uphone='{$tel}'")>0){
           echo "更新成功";
           echo "<script>location.href='index.php?m=member';</script>";
           $this->session->set("mname",$name);
           $this->session->set("img",$imgurl);
           $this->session->set("mphone",$tel);
       }else{
           echo "更新失败";
       }
   }

}