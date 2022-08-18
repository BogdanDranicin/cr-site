<section class="related section related__section">
	<div class="container ">
		<h2 class="related__title">Похожие видео</h2>
		<div class="container related__container">
			<div class="swiper related-swiper">
				<div class="swiper-wrapper">  
				{% from './data.php' import data %}
				{% for item in data %}
					<div class="swiper-slide">
						<img src="img/related/{{ item.img | safe }}.png" alt="related"/>
					</div>
				{% endfor %}
				</div>
			</div>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</section>