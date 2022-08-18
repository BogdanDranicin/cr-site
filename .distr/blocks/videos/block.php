<section class="videos section videos__section">
	<div class="container videos__container">
		<h2 class="videos__title">Видеоролики</h2>
		<div class="videos__block">
			{% from './data.php' import data %}
			{% for item in data %}
				<a href="" class="videos__block-item">
					<img src="img/videos/{{ item.img | safe }}.png" class="videos__block-item_img" alt="videos"/>
				</a>
			{% endfor %}
		</div>
	</div>
</section>