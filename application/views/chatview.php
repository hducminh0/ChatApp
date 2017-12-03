<html>
<body>
	hello
	<!-- <?php echo $channel ?>
<?php
	// Open form and set URL for submit form
	echo form_open('chat/send/hello/hello/hello');

	// Show Name Field in View Page
	echo form_label('Sender:');
	$data = array(
			'name' => 'sender',			//put form data into this shit 
			// 'placeholder' => 'Please Enter User Name',
			'class' => 'input_box'
		);
	echo form_input($data);
	echo '<br>';
	// Show Email Field in View Page
	echo form_label('channel:');
	$data= array(
		// 'type' => 'email',
		'name' => 'channel',				//put form data into this shit 
		// 'placeholder' => 'Please Enter Email Address',
		'class' => 'input_box'
	);
	echo form_input($data);
	echo '<br>';

	echo form_label('Message:');
	$data= array(
		// 'type' => 'email',
		'name' => 'message',				//put form data into this shit 
		// 'placeholder' => 'Please Enter Email Address',
		'class' => 'input_box'
	);
	echo form_input($data);
	echo '<br>';
?>


<?php
	$data = array(
		'type' => 'submit',
		'value'=> 'Send',
		'class'=> 'submit'
	);
	echo form_submit($data); 
?>

<?php echo form_close();?>
 -->
			
</body>
</html>

