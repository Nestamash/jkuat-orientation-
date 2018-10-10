<div id="container">
	<h1>Online Orientation Registration:: Create New Account</h1>
	<div id = "body">
		<?php echo form_open('auth/register'); ?>

			<table>
				<tr>
					<td><label for = "firstname">Firstname</label></td>
				</tr>
				<tr>
					<td>
						<?php echo form_error('firstname'); ?>
						<input class = "reags_textbox" type = "input" name = "firstname"value="<?php echo set_value('firstname'); ?>" />
					</td>
				</tr>
				<tr>
					<td><label for = "lastname">Lastname</label></td>
				</tr>
				<tr>
					<td>
						<?php echo form_error('lastname'); ?>
						<input class = "reags_textbox" type = "input" name = "lastname"value="<?php echo set_value('lastname'); ?>" />
					</td>
				</tr>
				<tr>
					<td><label for = "email">Email</label></td>
				</tr>
				<tr>
					<td>
						<?php echo form_error('email'); ?>
						<input class = "reags_textbox" type = "input" name = "email" value="<?php echo set_value('email'); ?>"/>
					</td>
				</tr>
				<tr>
					<td><label for = "gender">Gender</label></td>
				</tr>
				<tr>
					<td>
						<?php echo form_error('gender'); ?>
						<!--input class = "reags_textbox" type = "input" name = "gender" /-->
						Male: <input class = "" type = "radio" name = "gender" radioset = "gend" value = "Male" />
						Female: <input class = "" type = "radio" name = "gender" radioset = "gend" value = "Female" />
					</td>
				</tr>
				<tr>
					<td><label for = "contact">Phone No.</label></td>
				</tr>
				<tr>
					<td>
						<?php echo form_error('contact'); ?>
						<input class = "reags_textbox" type = "input" name = "contact" value="<?php echo set_value('contact'); ?>"/>
					</td>
				</tr>
				<tr>
					<td><label for = "password">Password</label></td>
				</tr>
				<tr>
					<td>
						<?php echo form_error('password'); ?>
						<input class = "reags_textbox" type = "password" name = "password" />
					</td>
				</tr>
				<tr>
					<td><label for = "password">Confirm Password</label></td>
				</tr>
				<tr>
					<td>
						<?php echo form_error('confirmpassword'); ?>
						<input class = "reags_textbox" type = "password" name = "confirmpassword" />
					</td>
				</tr>
				<tr>
					<td colspan = "3">
						<input class = "reags_buttons" type = "submit" name = "register" value = "Register" /> &nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</table>
		</form>
	</div>

	<p class = "footer">&copy;<strong> Online Orientation 2016. </strong></p>
</div>
