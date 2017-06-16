<?php
namespace Home\Model;
use Think\Model\RelationModel;
		class FriendlistModel extends RelationModel {
		protected $_link=array(
			'User'=> array(  
     			'mapping_type'=>self::BELONGS_TO,
          		'class_name'=>'Users',
          		'foreign_key'=>'fuid',
				 'as_fields' => 'username,email',
			),
		);

		
	}

?>
