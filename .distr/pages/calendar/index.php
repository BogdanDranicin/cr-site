{% extends "default.php" %}

{% block head %}
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
{% endblock %}

{% block blocks %}
    {% include 'header/block.php' %}
    {% include 'calendar/main/block.php' %}
    {% include 'calendar/calendar/block.php' %}
    {% include 'footer/block.php' %}
{% endblock %}

{% block js %}
    <script src="../js/script.js"></script>
{% endblock %}