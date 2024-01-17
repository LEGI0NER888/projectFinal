{% extends "base.mvc.php" %}

{% block title %}Artist{% endblock %}

{% block body %}
<link rel="stylesheet" href="/css/new.css">
<h1>{{ artist["Nickname"] }}</h1>



<p><a href="/artists/{{ artist['ID'] }}/edit">Edit</a></p>

<p><a href="/artists/{{ artist['ID'] }}/delete">Delete</a></p>

<p><a href="/artists">BACK</a></p>
{% endblock %}