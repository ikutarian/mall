<?php
/**
 * Created by PhpStorm.
 * User: owen
 * Date: 2018/3/24
 * Time: 15:20
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected function prefixImgUrl($value, $data)
    {
        if ($data['from'] == 1) {
            return config('setting.img_prefix') . $value;
        }
        return $value;
    }
}