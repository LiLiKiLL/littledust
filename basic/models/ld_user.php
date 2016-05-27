<?php
  namespace app\models;
  use yii\db\ActiveRecord;
  class ld_user extends ActiveRecord
  {
    public function rules()
    {
      return [
        ['id','integer'],
        ['user_name','string','length'=>['3,32']]
      ];
    }
  }
?>
