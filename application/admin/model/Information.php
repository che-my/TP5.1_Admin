<?php

namespace app\admin\model;

use think\Model;

class Information extends Model
{
    // 表名
    protected $name = 'information';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [
        'room_text',
        'hall_text',
        'guard_text'
    ];
    

    protected static function init()
    {
        self::afterInsert(function ($row) {
            $pk = $row->getPk();
            $row->getQuery()->where($pk, $row[$pk])->update(['weigh' => $row[$pk]]);
        });
    }

    
    public function getRoomList()
    {
        return ['1' => __('Room 1'),'2' => __('Room 2'),'3' => __('Room 3'),'4' => __('Room 4')];
    }     

    public function getHallList()
    {
        return ['1' => __('Hall 1'),'2' => __('Hall 2')];
    }     

    public function getGuardList()
    {
        return ['1' => __('Guard 1'),'2' => __('Guard 2')];
    }     


    public function getRoomTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['room']) ? $data['room'] : '');
        $list = $this->getRoomList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getHallTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['hall']) ? $data['hall'] : '');
        $list = $this->getHallList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getGuardTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['guard']) ? $data['guard'] : '');
        $list = $this->getGuardList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
