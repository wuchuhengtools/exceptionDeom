<?php 
/**
 * Rest API 异常基类
 *
 * @filename  RestBaseException.php
 * @author    wuchuheng <wuchuheng@163.com>
 * @date      2019/07/28
 */

namespace app\exception;

class RestBaseException extends\Exception
{
    public $code = 404; // http 状态码
    public $errorCode = 4000; // 接口错误码
    public $msg = ''; // 错误详情


   /**
     * 格式化参数
     *
     */ 
    public function __construct(array $args = []) 
    {
        if (array_key_exists('code', $args)) {
            $this->code = $args['code'];
        } 
        if (array_key_exists('errorCode', $args)) {
            $this->errorCode = $args['errorCode'];
        } 
        if (array_key_exists('msg', $args)) {
            $this->msg = $args['msg'];
        } 
    }


}

