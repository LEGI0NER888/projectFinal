{% extends "base.mvc.php" %}

{% block title %}Edit Reservation{% endblock %}

{% block body %}

<link rel="stylesheet" href="/css/new.css">

<h1>Edit Reservation</h1>

<form method="post" action="/reservations/{{ reservation['ID'] }}/update">

	{% include "Reservations/form.mvc.php" %}

</form>

<p><a href="/reservations/{{ reservation['ID'] }}/show">Cancel</a></p>

{% endblock %}