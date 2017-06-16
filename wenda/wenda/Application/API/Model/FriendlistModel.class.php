<?php
namespace API\Model;
use Think\Model\RelationModel;
class FriendlistModel extends RelationModel{
	protected $_link=array(
			'Users'=> array(  
     			'mapping_type'=>self::HAS_ONE ,
          		'class_name'=>'Users',
          		'foreign_key'=>'uid',
				'as_fields' => 'username'
			)
		);
}
