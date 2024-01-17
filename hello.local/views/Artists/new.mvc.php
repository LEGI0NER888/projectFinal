{% extends "base.mvc.php" %}

{% block title %}New Artist{% endblock %}

{% block body %}

<h1>New Artist</h1>
<link rel="stylesheet" href="/css/new.css">
<form method="post" action="/artists/create">

	{% include "Artists/form.mvc.php" %}

</form>

<p><a href="/artists">BACK</a></p>

{% endblock %}