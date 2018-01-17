<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $m = M('pl');     
        $where = "id>1";
        $count = $m->where($where)->count();
        $p = getpage($count,1);
        $list = $m->field(true)->where($where)->order('id')->limit($p->firstRow, $p->listRows)->select();
        // echo "<pre>";print_r($list);exit;
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }	
    
    
}