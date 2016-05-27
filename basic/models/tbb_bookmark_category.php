<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\tbb_bookmark;
class tbb_bookmark_category extends ActiveRecord{
	//查询属于该书签类的书签（一对多），以数组形式返回
	//hasMany(右表命名空间，关联字段)，对应关系右表在前，左表在右
	public function getBookmark(){
		$bookmark = $this->hasMany(tbb_bookmark::className(),['cate_id'=>'id'])
						 ->asArray()->all();
		return $bookmark;
	}
}