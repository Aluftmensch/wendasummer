<?php
namespace API\Model;
use Think\Model\RelationModel;
/**
* 
*/
class CollectionquestionModel extends RelationModel
{
	protected $_link=array(
			//同一个字段不能做做两个外键
			'question'=> array(  
     			'mapping_type'=>self::HAS_ONE ,
          		'class_name'=>'question',
          		'foreign_key'=>'qid',
				'as_fields' => 'description,hittime,stid,textcontent,state'
			)
		);
}
?>
