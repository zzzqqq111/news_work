<?php
class zhifu extends indexMain{
    function init(){
        $this->smarty->display("choose.html");
    }

    function yinhangka(){
        $this->smarty->display("xzk.html");
    }
    function addyinhangka(){
        $this->smarty->display("addka.html");
    }

    function success(){
    $this->smarty->display("success.html");
}
}