<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/9/6
 * Time: 16:25
 */
namespace Book\Iterator;

use Iterator;
use Countable;

class Mp3 implements Iterator,Countable
{
    //全部音乐
    protected $music = [
        '追光者--岑宁儿',
        '寻水的鱼--许飞',
        '风去云不回--吴京',
        '想把我唱给你听--老狼/王婧'
    ];
    //计数器
    protected $counter;
    //总数
    public function count()
    {
        return count($this->music);
    }
    //第几首了
    public function key()
    {
        return $this->counter;
    }
    //下一首
    public function next()
    {
        $this->counter++;
    }
    //重置
    public function rewind()
    {
        $this->counter = 0;
    }
    //当前歌曲
    public function current()
    {
        return $this->music[$this->counter];
    }
    //是否存在这首歌
    public function valid()
    {
        return isset($this->music[$this->counter]);
    }
}