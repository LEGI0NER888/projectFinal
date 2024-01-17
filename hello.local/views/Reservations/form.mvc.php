<label for="Price">Price</label>
<input type="number" id="Price" name="Price" value="{{ reservation['Price'] }}">
<label for="Users_ID">Users_ID</label>
<input type="number" id="Users_ID" name="Users_ID" value="{{ reservation['Users_ID'] }}">
<label for="Concerts_ID">Concerts_ID</label>
<input type="number" id="Concerts_ID" name="Concerts_ID" value="{{ reservation['Concerts_ID'] }}">

{% if (isset($errors["Nickname"])): %}
<p>{{ errors["Nickname"] }}</p>
{% endif; %}


<button>Save</button>