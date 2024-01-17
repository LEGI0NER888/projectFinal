{% extends "base.mvc.php" %}

{% block title %}Регистрация{% endblock %}



{% block body %}
<link rel="stylesheet" href="/css/new.css">
<h1>Регистрация</h1>
<form method="post" action="/user/reg">
	{% include "Users/register_form.mvc.php" %}
</form>

<a href="/artists">BACK</a>
{% endblock %}