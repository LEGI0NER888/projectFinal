<div>
	<label for="Nickname">Name</label>
	<input type="text" id="Nickname" name="Nickname" value="{{ user['Nickname'] }}">
</div>
<div>
	<label for="Email">Email</label>
	<input type="email" id="Email" name="Email" value="{{ user['Email'] }}">
</div>
<div>
	<label for="Password">Password</label>
	<input type="password" id="Password" name="Password" value="{{ user['Password'] }}">
</div>
<div>
	<label for="Status">Status</label>
	<input type="text" id="Status" name="Status" value="{{ user['Status'] }}">
</div>

<div><button>Save</button></div>