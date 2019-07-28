<?php 
/**
 * 入口文件
 *
 * @filename   start.php
 * @author     wuchuheng<wuchuheng@163.com>
 * @date       2019/07/28
 */

require_once __DIR__ . "/vendor/autoload.php";

// 指定render方法来抛出异常
set_exception_handler([(new \app\exception\HandlerException()), 'render']);

//抛一个异常试试
/* throw new \app\exception\HandlerException('hello'); */
throw new \app\exception\ValidateException([
    'code'=> 74110, //气死110
    'errorCode'=> 111,
    'msg'=> '这里是首页，正在抛出一个验证异常，有人吗?',
]);

// 什么也不写就使用默认的定义好的参数抛出
throw new \app\exception\ValidateException();

