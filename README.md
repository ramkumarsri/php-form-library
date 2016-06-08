PHP FORM BUILDER
================

form generator which generates the input fields dynamically.

## Usage

```
Easy to generate form fields using php
validations for all fields like required, email, confirm email, minlength, maxlength etc..
```

## Installation

Just include form_builder.php in mainfile.php, where you want to use this php_form_builder code.


## Utilization of Created Form Builder

when you are initializing a sample test_file.php to check. you must use $form = new Php_Form_Builder(); in test_file.php code.

````
$form->rule('required', 'first_name')->message('{field} is required');
$form->rule('email', 'email'); 
$form->rule('equals','confirm_email','email');
echo $form->_form_open();
echo $form->build_form_field_input($form_options);
echo $form->_form_close();
````

## Debugging and Testing

so far, i didn't do any test cases for this php form builder. but you can check this by compiling and revewing the code.

```
push the codes in wamp or xampp to do and run the test

```


## Notes and Files

```
For all the functions created in form_builder.php, i have mentioned their purpose using php multi-line comments.
```







