<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/9/6
 * Time: 16:38
 */
namespace Book\Iterator;

include "../../index.php";

echo "-------------------------  迭代器模式  -------------------------\n";
//迭代器模式提供一种方法，使得可以顺序访问一个聚合对象中的各个元素，而又不暴露其内部的表示。
//比如我们以前的MP3,我们听歌一般是下一首下一首的去听
$musics = new Mp3();
//直接迭代对象
foreach ($musics as $key => $music){
    echo $key.'--'.$music.PHP_EOL;
}

$mp4 = new Mp4();
//这里是不行的，因为没有实现迭代方法
foreach ($mp4 as $key => $music){
    echo $key.'--'.$music.PHP_EOL;
}