{% extends "base.mvc.php" %}

{% block title %}Edit Artist{% endblock %}

{% block body %}

<link rel="stylesheet" href="/css/new.css">

<h1>Edit Artist</h1>

<form method="post" action="/artists/{{ artist['ID'] }}/update">

	{% include "Artists/form.mvc.php" %}

</form>

<p><a href="/artists/{{ artist['ID'] }}/show">Cancel</a></p>

{% endblock %}