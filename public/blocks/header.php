<header>
    <div class="container top-menu">
        <div class="nav">
            <a href="/">Головна</a>
            <a href="/contact">Контакти</a>
            <a href="/contact/about">Про компанію</a>
        </div>
    </div>
    <div class="container middle">
        <div class="logo">
            <img src="/public/img/panda.gif">
        </div>
        <div class="auth-checkout">
            <?php if($_COOKIE['login'] == ''): ?>
                <a href="/user/auth"><button class="btn auth">Увійти</button></a>
                <a href="/user/reg"><button class="btn">Реєстрація</button></a>
            <?php else: ?>
                <a href="/user/dashboard"><button class="btn dashboard">Особистий кабінет</button></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="goal">
        <span>Давайте зробимо коротше</span>
    </div>
</header>

