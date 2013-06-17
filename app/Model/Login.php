<?php class Login extends AppModel
{
var $name='Login';
public $useTable= 'logins';
public $primaryKey='id';
var $validate=array(
	'username'=>array(
			'alphaNumeric'=>array(
				'rule'=>'alphaNumeric',
				'required'=>false,
				'message'=>'Alphabets and numbers'
				)),
	'password'=>array(
		'rule'=>array('minLength','8'),
		'required'=>true,
		'message'=>'Alphabets and numbers'
		),
	'emailid'=>array(
		'emailid'=>array(
			'rule'=>'email',
			'message'=>'this is not a valid email id'
			)
		)
	);
}
?>