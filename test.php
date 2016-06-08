<?php
require 'form_builder.php';
echo '<h1>Test Form</h1>';

//creating a object for form builder
$form = new Php_Form_Builder();

$form_options = array(  
	array(
        'id' => 'first_name', // if 'name' param is not given. Then by default 'id' will be considered as 'name'.
        'placeholder' => 'First Name',
        'label' => 'First Name',	
    ),
    array(
        'id' => 'last_name', // if 'label' param is not given.Then by default 'id' will be splited and considered as 'label'
        'placeholder' => 'Last Name',
		'class'	=>	'last_name'
    ),
    array(
        'id' => 'address',
        'type' => 'textarea',
        'placeholder' => 'Address',
        'label' => 'Address'
    ),
    array(
        'id' => 'email',
        'type' => 'email',
        'placeholder' => 'Email Address',
        'label' => 'Email Address'
    ),
	array(
        'id' => 'confirm_email',
        'type' => 'email',
        'placeholder' => 'Confirm Email Address',
        'label' => 'Confirm Email Address'
    ),
    array(
        'id' => 'phone_number',
        'label' => 'Phone Number',
        'placeholder' => 'Phone Number',
        'type' => 'tel'
    ),
    array(
        'id' => 'zip',
        'label' => 'Zip Code',
        'placeholder' => 'Zip Code',
        'type' => 'number'
    ),
	array(
	'id' => 'marital_status',
	'type' => 'dropdown',
	'options' => array(
			'' =>	'-- Select --',
			'married' => 'Married',
			'unmarried' => 'Unmarried'
		),
	'value'	=>	'0' // Default Option
	),
	array(
     'id' => 'technology',
     'label' => 'Technology',
     'type' => 'checkbox',
     'options' => array(
			array(
				'id' => 'choice_1',
				'value' => 1,
				'label' => 'PHP'
			),
			array(
				'id' => 'choice_2',
				'value' => 2,
				'label' => 'Javascript'
			),
			array(
				'id' => 'choice_3',
				'value' => 3,
				'label' => 'Jquery'
			)
		)
    ),
	array(
        'id' => 'gender',
        'type' => 'radio',
        'options' => array(
			array(
				'id' => 'radio_button_yes',
				'value' => 'male',
				'label' => 'Male'
			),
			array(
				'id' => 'radio_button_no',
				'value' => 'female',
				'label' => 'Female'
			)
        )
    ),

	 array(
       'id' => 'submit',
       'type' => 'submit',
       'name' => 'submit'
    ),
        
	);
	
$form->rule('required', 'first_name')->message('{field} is required');
//$form->rule('required', ['last_name', 'address', 'confirm_email', 'email', 'phone_number', 'zip', 'marital_status','technology','gender'])->message('Required: {field} cannot be empty');
$form->rule('email', 'email');
$form->rule('equals','confirm_email','email');
echo $form->_form_open();
echo $form->build_form_field_input($form_options);
echo $form->_form_close();

?>