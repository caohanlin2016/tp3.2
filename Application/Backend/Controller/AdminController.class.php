<?php
namespace Backend\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){
        $this->display("index");
    }
}