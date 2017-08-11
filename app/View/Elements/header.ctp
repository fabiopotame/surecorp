<header>
    <div class="center">
        <div class="logo">
        <a href="<?php echo $this->webroot ?>">
        <span>SURECORP</span><br>
        <span>corretora de seguros</span>
            <?php // echo $this->Html->image('logo.png', array('alt' => 'Surecorp Corretora de Seguros', 'url' => array('controller' => 'pages', 'action' => 'display'))) ?>
        </a>
        </div>

        <nav>
            <ul class="menu">
                <li class="active">
                <?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display')); ?>
                </li>

                <li>
                    <button class="menu-element" data-action="show-quote-popup" data-quote-key="life-insurance">
                        Faça uma cotação
                    </button>
                </li>

                <li>
                    <a href="#">Produtos</a>
                    <i class="fa fa-caret-down"></i>
                    <ul class="submenu animated speed fadeInDown">
                        <li><a href="">Seguro Automóvel</a></li>
                        <li><a href="">Saúde e Odontológico</a></li>
                        <li><a href="">Fiança Locatícia</a></li>
                        <li><a href="">Seguro Empresarial</a></li>
                        <li><a href="">Seguro Residencial</a></li>
                        <li><a href="">Imobiliária</a></li>
                        <li><a href="">Financiamentos</a></li>




                        <!-- <li>
                            <a href="get-a-travel-insurance-quote.html"><i class="fa fa-caret-left"></i> Quote forms</a>
                            <ul class="submenu animated speed fadeInRight">
                                <li><a href="get-a-life-insurance-quote.html">Life insurance Quote</a></li>
                                <li><a href="get-a-car-insurance-quote.html">Car insurance Quote</a></li>
                                <li><a href="get-a-house-insurance-quote.html">House insurance Quote</a></li>
                                <li><a href="get-a-travel-insurance-quote.html">Travel insurance Quote</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="claims.html">Claims</a></li>
                        <li><a href="contact.html">Contact page</a></li>
                        <li>
                            <a href="travel-insurance.html"><i class="fa fa-caret-left"></i> Insurances promo</a>
                            <ul class="submenu animated speed fadeInRight">
                                <li><a href="life-insurance.html">Life insurance</a></li>
                                <li><a href="car-insurance.html">Car insurance</a></li>
                                <li><a href="house-insurance.html">House insurance</a></li>
                                <li><a href="travel-insurance.html">Travel insurance</a></li>
                            </ul>
                        </li>
                        <li><a href="404.html">404 page</a></li> -->
                    </ul>
                </li>

                <li><a href="blog.html">Blog</a></li>

                <li><button class="menu-element" data-action="show-contact-popup">Contato</button></li>

            </ul>
            <div class="menu-responsive"><i class="fa fa-bars"></i></div>
        </nav>

        <div class="clear">
        </div>
    </div>
</header>