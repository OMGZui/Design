<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/23
 * Time: 16:05
 */
namespace Book\ChainOfResponsibility;

abstract class Report
{
    protected $obj;//递交对象
    protected $level;//等级

    //递给高级领导
    public function setNext(Report $report)
    {
        $this->obj = $report;
    }

    //看是哪个级别的来举报
    public function report($power)
    {
        if($this->hasPower($power)){
            echo "请按流程办事 \n";
        }elseif($this->obj){
            echo "领导好，您不需要向我举报 \n";
            $this->obj->report($power);
        }else{
            echo "您是外星来的吧\n";
        }
    }

    //是否有这个权力
    public function hasPower($power)
    {
        return $this->level > $power;
    }
}