{% extends "base.mvc.php" %}

{% block title %}Delete Artist{% endblock %}

{% block body %}

<link rel="stylesheet" href="/css/new.css">

<h1>Delete Artist</h1>

<form method="post" action="/artists/{{ artist['ID'] }}/destroy">

	<span>Delete this artist?</span>

	<button>Yes</button>

</form>

<p><a href="/artists/{{ artist['ID'] }}/show">Cancel</a></p>

{% endblock %}