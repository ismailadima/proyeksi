<!DOCTYPE html>
<body>
	<h3>Login</h3>
	<?php
	$attributes = array('name'=>'login_form','id'=>'login_form');
	echo form_open('login',$attributes);
	?>
	<?php
		if(!empty($pesan)) :
	?>
		<p id="message">
			<?php echp $pesan; ?>
		</p>
		<?php endif ?>
		<p>
			<label for="username">Username</label>
			<input type="text" name="username" size="20" value="<?php echo set_value('username');?>">
		</p>
		<p>
			<label for="password">Password</label>
			<input type="password" name="password" size="20" value="<?php echo set_value('password');?>">
		</p>
		<p>
			<input type="submit" name="submit" id="submit" value="OK">
		</p>
	</form>
</body>