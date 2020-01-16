
<div style="min-height: 500px">
	<center><hr><h3>Login</h3><hr></center>
	<form action="<?=base_url()?>controlnya/proses2" method="post">
		<center><table>
			<tr><fieldset class="form-group">
				<td>Username</td>
				<td>:</td>
				<td><input class="form-control mr-sm-2 mb-2 mb-sm-0" type="text" name="username" id="email" placeholder="Username"></td>
			</tr></fieldset>
			
			<tr><fieldset class="form-group">
				<td>Password</td>
				<td>:</td>
				<td><input class="form-control mr-sm-2 mb-2 mb-sm-0" type="password" name="password" id="password" placeholder="Password"></td></fieldset>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input class="btn btn-primary mt-2 mt-sm-0" type="submit" name="submit" value="Login">
				<input class="btn btn-primary mt-2 mt-sm-0" type="Reset" Value="Reset" value="Reset"></td>
			</tr>
		</table></center>
	</form><hr>
	
