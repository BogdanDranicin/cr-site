const SimpleQuiz = {
    init() {
        const questions = $('form.quiz__card .quiz__question');
        let amount = questions.length;
        let counter = 1;
        questions.first().addClass('active');

        $('form.quiz__card .quiz__btn-next').on('click', (e) => {
            e.preventDefault();
            if (counter < amount && this.checkAnswer()) {
                questions.removeClass('active');
                $(questions[counter]).addClass('active');
                counter += 1;
            }
            if (counter === amount && this.checkAnswer()) {
                this.getResult();
            }
        });
    },

    checkAnswer() {
        const question = $('form.quiz__card .quiz__question.active');
        let input = $(question).find('input[type=radio]:checked');
        if (input.length === 0) {
            input = $(question).find('textarea');
        }
        const value = $(input).val();
        return value !== undefined && value.length > 0;
    },

    getResult() {
        const data = $('form.quiz__card').serializeArray().concat(
            [
                { name: 'res_id', value: this.config['res_id'] },
                // {name: 'resultTpl', value: this.config['resultTpl']}
            ]
        );
        $('form.quiz__card .quiz__btn-next').remove();
        $.post(
            this.config.connectorUrl, { data: JSON.stringify(data) },
            (data) => {
                data = JSON.parse(data);
                console.log(data);
                $('form.quiz__card .card-quiz__question').remove();
                $(data.message).appendTo('form.quiz__card');
            }
        );
    }
};

SimpleQuiz.message = {
    success() {

    },
    info() {

    },
    error() {

    }
};

$(document).ready(() => {
    SimpleQuiz.init();
    console.log('Initialize complete', SimpleQuiz.config);
    // SimpleQuiz.getResult();
})
SimpleQuiz.config = JSON.parse('{"res_id":2,"connectorUrl":"\/assets\/components\/simplequiz\/connector.php"}');