<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/5/21
 * Time: 9:44
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'flights';

    //关闭时间戳
//    public $timestamps = false;

}