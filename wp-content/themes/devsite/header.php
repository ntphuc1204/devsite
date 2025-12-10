<?php

?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout/header.css">

<header class="header">
    <div class="header__inner">

        <div class="header__logo">
            <a href="#" class="header__logo-link">Perat</a>
        </div>

        <nav class="header__nav">
            <ul class="header__menu">

                <li class="header__item header__item--dropdown">
                    <button class="header__link">Services</button>
                    <ul class="header__dropdown">
                        <li class="header__dropdown-item"><a href="#">Natus eget</a></li>
                        <li class="header__dropdown-item"><a href="#">Mauris nec</a></li>
                        <li class="header__dropdown-item"><a href="#">Massa</a></li>
                        <li class="header__dropdown-item"><a href="#">Nunc tellus</a></li>
                        <li class="header__dropdown-item"><a href="#">Gris</a></li>
                    </ul>
                </li>

                <li class="header__item"><a class="header__link" href="#">Projects</a></li>
                <li class="header__item"><a class="header__link" href="#">Blog</a></li>

                <li class="header__item header__item--dropdown">
                    <button class="header__link">About company</button>
                    <ul class="header__dropdown">
                        <li class="header__dropdown-item"><a href="#">Item 1</a></li>
                        <li class="header__dropdown-item"><a href="#">Item 2</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

        <div class="header__right">

            <div class="header__lang header__item--dropdown">
                <button class="header__lang-btn">EN</button>
                <ul class="header__dropdown">
                    <li class="header__dropdown-item"><a href="#">EN</a></li>
                    <li class="header__dropdown-item"><a href="#">JP</a></li>
                    <li class="header__dropdown-item"><a href="#">VI</a></li>
                </ul>
            </div>

            <a href="#" class="header__cta">Contact Us</a>

        </div>

    </div>
</header>
