<?php
/**
 * 异常处理器Handler
 *
 * @filename  HandlerException.php
 * @author    wuchuheng <wuchuheng@163.com>
 * @date      2019/07/28
 */
namespace app\exception;

use \app\exception\RestBaseException;

class HandlerException extends \Exception
{
    /**
    * 异常抛出
    *
    */ 
    public function render($e) 
    {
        // RestApi 异常处理
        if ($e instanceof RestBaseException) {
            echo  '抛出的是Rest API扔异常';
            echo '错误码是:' . $e->errorCode . PHP_EOL;
            echo '错误信息是:' . $e->msg. PHP_EOL;
            echo 'http状态码是:' . $e->code. PHP_EOL;
            //....
            // log  做下日志处理啥的
            // return json 返回数据 json
        }
        // http  异常正理
        //if ($e  instanceof HttpBaseException)  
        // 系统异常正理
        //if ($e  instanceof SystemBaseException)  
        
    }

}
