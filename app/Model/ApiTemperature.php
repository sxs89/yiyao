<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/5/21
 * Time: 13:17
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class ApiTemperature extends Model
{
    protected $table = 'temperature_value';   //表名
    public $timestamps = false;         //关闭默认的两个时间

}