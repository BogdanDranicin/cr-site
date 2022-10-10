{% extends "default.php" %}

{% block head %}
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
{% endblock %}

{% block blocks %}
    {% include 'header/block.php' %}
    {% include 'profile/account/block.php' %}
    {% include 'profile/results/block.php' %}
    {% include 'profile/attempts/block.php' %}
    {% include 'footer/block.php' %}
{% endblock %}

{% block js %}
    <script src="../js/script.js"></script>
{% endblock %}