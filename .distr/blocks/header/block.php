<header class="header">
    <div class="container header__container">
        <a href="" class="header__logo">Кадровый<br>резерв</a>
        <div class="header__centernav">
            <nav class="header__nav nav">
                <ul class="nav__list">
                    <li class="nav__list-item droplist">
                        <a class="nav__list-item_link">Тесты</a>
                        <ul class="nav__list">
                            <li class="nav__list-item"><a href="<?= $BASE_HREF ?>/tests" class="nav__list-item_link">Блок 1</a></li>
                            <li class="nav__list-item"><a href="" class="nav__list-item_link">Блок 2</a></li>
                            <li class="nav__list-item"><a href="" class="nav__list-item_link">Блок 3</a></li>
                            <li class="nav__list-item"><a href="" class="nav__list-item_link">Блок 4</a></li>
                        </ul>
                    </li>
                    <li class="nav__list-item">
                        <a href="" class="nav__list-item_link">Календарь</a>
                    </li>
                    <li class="nav__list-item droplist">
                        <a class="nav__list-item_link">Дополнительные материалы</a>
                        <ul class="nav__list">
                            <li class="nav__list-item"><a href="<?= $BASE_HREF ?>/books" class="nav__list-item_link">Список литературы</a></li>
                            <li class="nav__list-item"><a href="<?= $BASE_HREF ?>/videos" class="nav__list-item_link">Видеоролики</a></li>
                            <li class="nav__list-item"><a href="" class="nav__list-item_link">Полезные статьи</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="header__search">
                <form action="" class="header__search-form">
                    <input class="header__search-input" type="search" name="search" required>
                    <button class="header__search-button" type="submit">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.88669 2.03086C4.29769 2.03086 2.19889 4.12966 2.19889 6.71866C2.19889 9.30767 4.29769 11.4065 6.88669 11.4065C9.4757 11.4065 11.5745 9.30767 11.5745 6.71866C11.5745 4.12966 9.4757 2.03086 6.88669 2.03086ZM0.636292 6.71866C0.636292 3.26666 3.43469 0.468262 6.88669 0.468262C10.3387 0.468262 13.1371 3.26666 13.1371 6.71866C13.1371 8.20598 12.6176 9.57197 11.7502 10.6451C11.8883 10.6768 12.0194 10.7464 12.127 10.854L14.4709 13.1979C14.776 13.503 14.776 13.9977 14.4709 14.3028C14.1657 14.6079 13.6711 14.6079 13.3659 14.3028L11.022 11.9589C10.9145 11.8514 10.8448 11.7202 10.8131 11.5822C9.74 12.4496 8.37401 12.9691 6.88669 12.9691C3.43469 12.9691 0.636292 10.1707 0.636292 6.71866Z" fill="black"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="header__authorization">
            <div class="header__authorization-flex">
                <div class="header__authorization-avatar">
                    <img src="img/header/bodya.png" alt="" class="header__authorization-avatar_img">
                </div>
                <svg class="header__autorization-vector" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.23999 1.43359L5.68088 5.87449L10.1218 1.43359" stroke="#757575" stroke-width="2.22045" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="header__authorization-login login">
                <form class="login__form">
                    <div class="login__field">
                        <input type="text" class="login__input" placeholder="Логин">
                    </div>
                    <div class="login__field">
                        <input type="password" class="login__input" placeholder="Пароль">
                        <svg class="header__authorization-eye" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_301_920)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.44179 6.49037C1.8798 7.17256 2.4857 8.04222 3.29271 8.77C4.18602 9.57559 5.29691 10.1816 6.6754 10.1816C9.32475 10.1816 10.8728 7.99965 11.7652 6.49888C11.399 5.84939 10.8091 5.00494 10.0107 4.29047C9.12195 3.49515 8.002 2.88345 6.65702 2.83858C5.45031 2.79833 4.30766 3.39092 3.34321 4.22164C2.48713 4.95901 1.82233 5.84152 1.44179 6.49037ZM2.62224 3.38017C3.69355 2.45741 5.09868 1.67665 6.69384 1.72986C8.37125 1.78582 9.7285 2.551 10.7474 3.46284C11.7636 4.37221 12.4701 5.44981 12.8639 6.20221C12.9703 6.40543 12.9624 6.64457 12.8497 6.83854C12.0115 8.28152 10.1561 11.2909 6.6754 11.2909C4.94303 11.2909 3.58002 10.5211 2.55283 9.59482C1.53165 8.67391 0.814121 7.57324 0.362631 6.85656C0.239301 6.66084 0.224756 6.41124 0.337186 6.19841C0.743583 5.42902 1.54742 4.30595 2.62224 3.38017Z" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.73168 5.41231C6.03396 5.41231 5.52889 5.93648 5.52889 6.51053C5.52889 7.08458 6.03396 7.60872 6.73168 7.60872C7.4294 7.60872 7.93446 7.08458 7.93446 6.51053C7.93446 5.93648 7.4294 5.41231 6.73168 5.41231ZM4.42249 6.51053C4.42249 5.25885 5.48978 4.30298 6.73168 4.30298C7.97355 4.30298 9.04084 5.25885 9.04084 6.51053C9.04084 7.76218 7.97355 8.71805 6.73168 8.71805C5.48978 8.71805 4.42249 7.76218 4.42249 6.51053Z" fill="black"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_301_920">
                                    <rect width="12.6781" height="12.6781" fill="white" transform="translate(0.260986 0.170166)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <input type="submit" class="button__text button login__submit" value="Войти">		
                </form>
            </div>
        </div>
    </div>
</header>