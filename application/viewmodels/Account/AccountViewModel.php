<?php
/**
* 
*/
class AccountViewModel extends ViewModel
{
	public $storyList;// = "Josh";
	public $userList;// = "josh.dvrs@gmail.com";

	function __construct()
	{		
		parent::__construct(array('email' => 
									array('email' => 'Invalid email',
											'required' => 'email is required'),
									'name' =>
										array('required' => 'the name field is required!')
								));
	}
}
?>