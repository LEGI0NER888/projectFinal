{% extends "base.mvc.php" %}

{% block title %}Reservation{% endblock %}

{% block body %}
<link rel="stylesheet" href="/css/new.css">
<h1>Бронирование №{{ reservation["ID"] }}</h1>
<p>Цена - {{ reservation["Price"] }}</p>
<p>ID пользователя - {{ reservation["Users_ID"] }}</p>
<p>ID концерта - {{ reservation["Concerts_ID"] }}</p>



<p><a href="/reservations/{{ reservation['ID'] }}/edit">Edit</a></p>

<p><a href="/reservations/{{ reservation['ID'] }}/delete">Delete</a></p>

<p><a href="/reservations">BACK</a></p>
{% endblock %}