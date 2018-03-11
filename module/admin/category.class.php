<?php

class category extends main
{
    function add()
    {
        $db = new db("");
        $tree = new tree();
        $tree->getTree(0, 0, "-", $db->db, "category");
        $this->smarty->assign("str", $tree->str);

        $this->smarty->display("addCategory.html");
    }

    function addCon()
    {
        $pid = $_POST["pid"];
        $cname = $_POST["cname"];
        $db = new db("category");
        if ($db->insert("pid={$pid},cname='{$cname}'")) {
            $this->jump("添加成功", "index.php?m=admin&f=category&a=add");
        }
    }

    function select()
    {
        $db = new db("");
        $tree = new tree();
        $tree->getTree2(0, 0, "-", $db->db, "category");
        $this->smarty->assign("str", $tree->str);
        $this->smarty->display("showCategory.html");
    }

    function del(){
        $id=$_GET["id"];
        $db = new db("");
        $tree = new tree();
        $tree->del($id,$db->db, "category");
        $this->smarty->assign("str", $tree->str);
    }
}