<?php
namespace app\models;
use yii\db\ActiveRecord;
class tbb_bookmark extends ActiveRecord{
	//根据书签获取对应书签类别（一对一）
	public function getCate(){
		return $this->hasOne(tbb_bookmark_category::className(),['id'=>'cate_id'])->asArray();
	}
}