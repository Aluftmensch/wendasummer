<?php
namespace API\Model;
use Think\Model\RelationModel;
/**
* 
*/
class QuestionModel extends RelationModel
{
	
		protected $_link=array(
			'Users'=> array(  
     			'mapping_type'=>self::BELONGS_TO,
          		'class_name'=>'Users',
          		'foreign_key'=>'uid',
				'as_fields' => 'username'
			),
			'photos'=> array(  
     			'mapping_type'=>self::HAS_MANY,
          		'class_name'=>'Qadditional',
          		'foreign_key'=>'qid',
				'mapping_fields' => 'fileid,filename'
			)
			);
}