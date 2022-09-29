<section class="books section books__section">
	<div class="container books__container">
		<h2 class="books__title">Книги</h2>
		<div class="books__block">
			{% from './data.php' import data %}
			{% for item in data %}
				<a href="" class="books__block-item">
					<img src="img/books/{{ item.img | safe }}.png" class="books__block-item_img" alt="books"/>
					<div class="books__block-item_card">
						<div class="books__block-item_card-title">{{ item.title | safe }}</div>
						<div class="books__block-item_card-author">{{ item.author | safe }}</div>
					</div>

				</a>
			{% endfor %}
		</div>
	</div>
</section>