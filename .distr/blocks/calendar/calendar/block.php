<section class="calendar section calendar__section">
    <div class="container calendar__container">

        <div class="calendar__title title">Календарь событий</div>
        <div class="swiper__container">
            <div class="slick calendar__slick">
                <div class="slick-wrapper">
                {% from './data.php' import links %}
                    {% for item in links %}
                    <div slicks="slick-slide">
                        <div class="calendar__year">
                            {{ item.year | safe }}
                        </div>
                        <div class="tabs" id="tabs">
                            <ul class="tabs-nav">
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-1">Январь</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-2">Февраль</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-3">Март</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-4">Апрель</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-5">Май</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-6">Июнь</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-7">Июль</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-8">Август</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-9">Сентябрь</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-10">Октябрь</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-11">Ноябрь</a></li>
                                <li class="tabs-nav-item"><a href="#tab__{{ item.year | safe }}-12">Декабрь</a></li>
                            </ul>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        
    </div>
    <div id="tabs">
        <div class="tabs-items">
            {% for item in links %}
            {% for info in item.event %}
            <div class="tabs-item" id="tab__{{ item.year | safe }}-{{ info.event__num | safe }}">
                <div class="section event">
                    <div class="container event__container">
                        <h2 class="event__title title">Событие месяца {{ info.event__name | safe }}</h2>
                        <div class="event__content">
                            <div class="event__pictures">
                                <img src="img/calendar/calendar/{{ info.event__img | safe }}.png" alt="" class="event__pictures-img">
                            </div>
                            <div class="event__description">
                                <div class="event__description-title title">{{ info.event__desctiption | safe }}</div>
                                <div class="event__description-text text">
                                    {{ info.event__text | safe }}
                                </div>
                            </div>
                        </div>
                        <a href="" class="event__button button">Посмотреть события</a>
                    </div>
                </div>
            </div>
            {% endfor %}
            {% endfor %}

        </div>
    </div>
    
</section>