{% extends "base.mvc.php" %}

{% block title %}Delete Reservation{% endblock %}

{% block body %}

<link rel="stylesheet" href="/css/new.css">

<h1>Delete Reservation</h1>

<form method="post" action="/reservations/{{ reservation['ID'] }}/destroy">

	<span>Delete this reservation?</span>

	<button>Yes</button>

</form>

<p><a href="/reservations/{{ reservation['ID'] }}/show">Cancel</a></p>

{% endblock %}