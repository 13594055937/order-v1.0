<?php 
namespace app\home\model;
use think\Model;
class Replancement extends Model{
	 // 关闭自动写入update_time字段
    protected $updateTime = false;
     protected $createTime = false;

}
 ?>