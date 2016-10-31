<?php
namespace Backend\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display('login');
    }
    public function doLogin(){
        $username = I('post.username');
        $password = I('post.password');
        $user_query = M();
        $sql = "select * from user u where u.username = '$username' and u.password = '$password' limit 1 ";
        $result = $user_query->query($sql);
        if($result){
            session('user',$result[0]);
            $this->ajaxReturn([
                'code' => 'ok'
            ]);
        }else{
            $this->ajaxReturn([
                'code' => 'no'
            ]);
        }
    }
}