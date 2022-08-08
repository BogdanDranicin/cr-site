<section class="section quiz__section quiz">
    <div class="container quiz__container">
        <form class="quiz__card">
            {% from './data.php' import close_questions %}
                {% for item in close_questions %}
                    {% if item.active %}
                    <div class="quiz__question {{ item.active | safe }}">
                    {% else %}
                    <div class="quiz__question">
                    {% endif %}
                        <div class="quiz__question-counter">Вопрос {{ item.question_num | safe }} из {{ item.questions_lengh | safe }}</div>
                        <div class="quiz__question-title">{{ item.question | safe }}</div>
                        <ul class="quiz__question-answers answers">
                            {% for info in item.answers %}
                                <li class="answers__item">
                                    <input type="radio" class="answers__item-point" name="question-{{ item.question_num | safe }}" value="{{ info.answer_num | safe }}" id="answer-{{ item.question_num | safe }}-{{ info.answer_num | safe }}">
                                    <label for="answer-{{ item.question_num | safe }}-{{ info.answer_num | safe }}" class="answers__item-answer">{{ info.answer | safe }}</label>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endfor %}
            {% from './data.php' import open_questions %}
            {% for item in open_questions %}
                <div class="quiz__question open-question">
                    <div class="quiz__question-counter">Вопрос {{ item.question_num | safe }} из {{ item.questions_lengh | safe }}</div>
                    <div class="quiz__question-title">{{ item.question | safe }}</div>
                    <ul class="quiz__question-answers answers">
                        <li class="answers__item">
                            <textarea placeholder="Введите Ваш ответ..." class="answers__textarea" id="question-{{ item.question_num | safe }}" name="question-{{ item.question_num | safe }}" rows="5"></textarea>
                        </li>
                    </ul>
                </div>
            {% endfor %}
            <a href="#" class="button quiz__btn-next">Ответить</a>
        </form>
    </div>
</section>
<script>
    
</script>