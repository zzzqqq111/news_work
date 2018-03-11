<?php
class yinhangka extends indexMain{
    function init(){
        $this->smarty->display("xzk.html");
    }
    function zhifu(){
        $this->smarty->display("mmzf.html");
    }
}