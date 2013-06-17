<?php class User extends AppModel
{
	var $name='User'; 
    public $useTable = 'users';
    public $primaryKey = 'id';
    var $validate = array(
        'user_name'=>array(
            'alphaNumeric'=>array(
                'rule'=>'alphaNumeric',
                'required' => true,
                'message' => 'Alphabets and numbers only'
                )),
        'passwrd'=>array(
            'rule'=>array('minLength','8'),
            'message' => 'Mimimum 8 characters long'
            ),
        'email_address' => 'email',
        'first_name'=>array(
            'rule'=>'alphaNumeric',
                'required' => true,
                'message' => 'Alphabets and numbers only'
            ),
        'last_name'=>array(
            'last_name'=>array(
            'rule'=>'alphaNumeric',
                'required' => true,
                'message' => 'Alphabets and numbers only'
            )
        )	
    );
} 