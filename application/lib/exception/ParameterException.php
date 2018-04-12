<?php

namespace app\lib\exception;

/**
 * 参数出错的异常
 */
class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;


}