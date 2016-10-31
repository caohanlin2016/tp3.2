<?php
namespace Backend\Controller;
use Think\Controller;
class BreakfastController extends Controller {
    //早餐列表
    public function breakfastList(){
        $breakfast_query = M();
        $sql = "select g.id , g.goods_id , g.goods_name , g.goods_price , g.goods_img_url , g.goods_old_price , g.goods_description , g.goods_status , g.show_old_price
 , t.type_content from goods as g left join type as t on t.id = g.goods_type and g.goods_id is not NULL and t.type_parent = 1 ";
        $result = $breakfast_query->query($sql);
        $this->assign('list',json_encode($result));
        $this->display('breakfastList');
    }
    //更新删除
    public function edit(){
        $oper = $_POST['oper'];
        switch($oper){
            case 'edit':
                $data = [
                    'id' => $_POST['id'],
                    'goods_id' => $_POST['goods_id'],
                    'goods_name' => $_POST['goods_name'],
                    'goods_price' => $_POST['goods_price'],
                    'goods_img_url' => $_POST['goods_img_url'],
                    'goods_old_price' => $_POST['goods_old_price'],
                    'goods_description' => $_POST['goods_description'],
                    'goods_status' => $_POST['goods_status'],
                    'show_old_price' => $_POST['show_old_price'],
                ];
                $result = M('goods')->save($data);
            case 'del':
                $ids = explode(',',$_POST['id']);
                $where['id'] = ['in',$ids];
                $result = M('goods')->where($where)->delete();
                $this->ajaxReturn([
                    'code' => $where
                ]);
            case 'add':
                $data = [
                    'goods_id' => $_POST['goods_id'],
                    'goods_name' => $_POST['goods_name'],
                    'goods_price' => $_POST['goods_price'],
                    'goods_img_url' => $_POST['goods_img_url'],
                    'goods_old_price' => $_POST['goods_old_price'],
                    'goods_description' => $_POST['goods_description'],
                    'goods_status' => $_POST['goods_status'],
                    'show_old_price' => $_POST['show_old_price'],
                ];
                $result = M('goods')->add($data);
            default :

        }
    }
    //更新数据
    public function update(){
        $goods_id = $_POST['goods_id'];
        $goods_name = $_POST['goods_name'];
        $goods_price = $_POST['goods_price'];
        $goods_img_url = $_POST['goods_img_url'];
        $goods_old_price = $_POST['goods_old_price'];
        $goods_description = $_POST['goods_description'];
        $goods_status = $_POST['goods_status'];
        $show_old_price = $_POST['show_old_price'];
        $show_old_price = $_POST['show_old_price'];

    }

    //创建
    public function create(){

    }

    //删除
    public function delete(){

    }
}