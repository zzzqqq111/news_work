<?php
class message extends indexMain{

    function init(){
        $this->smarty->assign("mid",$this->session->get("mid"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $this->smarty->assign("img",$this->session->get("img"));
        $this->smarty->assign("login", $this->session->get("indexLogin"));
        $name=$this->session->get("mname");
        //获取留言
        $db = new db("message");
        $result = $db->select();

        $this->smarty->assign("result",$result);
        $this->smarty->assign("mid",$this->session->get("mid"));
        $this->smarty->display("message.html");
    }
}