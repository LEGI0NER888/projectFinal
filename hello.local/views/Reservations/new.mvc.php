{% extends "base.mvc.php" %}

{% block title %}New Reservation{% endblock %}

{% block body %}

<h1>New Reservation</h1>
<link rel="stylesheet" href="/css/new.css">
<form method="post" action="/reservations/create">

	{% include "Reservations/form.mvc.php" %}

</form>

<p><a href="/reservations">BACK</a></p>

{% endblock %}