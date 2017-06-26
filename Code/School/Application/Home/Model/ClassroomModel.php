<?php
namespace Home\Model;
use Think\Model;
class ClassroomModel extends Model {
    protected $tableName = 'classroom';
    protected $_auto = array (
        array('classroom_addtime','addTime',3,'callback'), // 对name字段在新增和编辑的时候回调getName方法
    );


    protected function addTime(){
        return  date('Y-m-d H:i:s',time());
    }
}