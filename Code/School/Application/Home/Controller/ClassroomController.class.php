<?php
namespace Home\Controller;
use Think\Controller;
class ClassroomController extends Controller
{
    public function addClassroom()
    {
        $Calssroom = D('Calssroom');
        if ($Calssroom->create()) {
            $result = $Calssroom->add(); // 写入数据到数据库
            if ($result) {
                $this->success('数据添加成功');
            }else{
                $this->success('数据添加失败');
            }
        }
    }
}