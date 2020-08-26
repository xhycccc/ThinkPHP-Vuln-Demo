<?php
namespace app\index\controller;
use app\index\model\User;

class Index
{
    public function index()
    {
        $ids = input('ids/a'); //将请求参数ids转换为数组类型
        $t = new User();
        $result = $t->where('id', 'in', $ids)->select();
        dump($result);
        foreach($result as $row) {
            echo "<p>Hello, {$row['username']}</p>";
        }
    }
}
