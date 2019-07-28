<?php 

/**
 * 验证异常类
 *
 * @filename  ValidateException.php
 * @author    wuchuheng <wuchuheng@163.com>
 * @date      2019/07/28
 */

namespace app\exception;

use \app\exception\RestBaseException;

class  ValidateException extends RestBaseException
{
    public $code = 404;
    public $errorCode = 4000;
    public $msg = '验证异常';
}

