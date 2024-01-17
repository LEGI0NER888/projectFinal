<label for="Nickname">Name</label>
<input type="text" id="Nickname" name="Nickname" value="{{ artist['Nickname'] }}">

{% if (isset($errors["Nickname"])): %}
<p>{{ errors["Nickname"] }}</p>
{% endif; %}


<button>Save</button>