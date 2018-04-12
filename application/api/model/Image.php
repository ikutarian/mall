<?php
/**
 * Created by PhpStorm.
 * User: owen
 * Date: 2018/3/24
 * Time: 13:43
 */

namespace app\api\model;



class Image extends BaseModel
{
    protected $hidden = [
        'id',
        'from',
        'update_time',
        'delete_time'
    ];

    public function getUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }
}