<header>
    <div class="container">
        <div id="main-menu-1194" class="col-md-2 col-sm-2 col-xs-12">
            <img id="btn-menu-movil" src="./assets/img/generales/menu-movil.png"/>
            <a href="index.php">
                <img src="./assets/img/home/logo-menu.png"/>
            </a>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-12 no-movil">
            <ul id="menu-top">


                <?php

                function getUriSegments() {
                    return explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                }

                function getUriSegment($n) {
                    $segs = getUriSegments();
                    return count($segs) > 0 && count($segs) >= ($n - 1) ? $segs[$n] : '';
                }
                ?>



                <li id="nosaltres"  <?php
                $site_url = getUriSegment(1); //returns foo
                $page = getUriSegment(2); //returns bar
                if ($page == 'sobre-nosaltres.php' || $page == 'sobre-nosaltres-infraestructura.php' || $page == 'nosaltres-equiphuma.php' || $page == 'nosaltres-cultura.php' || $page == 'nosaltres-noticias.php' || $page == 'nosaltres-news-view.php') {
                    echo "class='active-sub'";
                }
                echo $page;
                ?>><a href="#" class="selector-sub">Sobre nosaltres</a></li>
                <li class="divider">|</li>
                <li id="transport"    <?php
                $site_url = getUriSegment(1); //returns foo
                $page = getUriSegment(2); //returns bar
                if ($page == 'transport-aeri-pais.php' || $page == 'transport-aeri.php' || $page == 'transport-documentacio.php' || $page == 'transport-maritim-pais.php' || $page == 'transport-maritim.php' || $page == 'transport-terrestre-internacional-pais.php' || $page == 'transport-terrestre-internacional.php' || $page == 'transport-terrestre-nacional.php' || $page == 'transport.php') {
                    echo "class='active-sub'";
                }
                ?> ><a href="#"  class="selector-sub">Transport</a></li>
                <li class="divider">|</li>
                <li class="select <?php
                $site_url = getUriSegment(1); //returns foo
                $page = getUriSegment(2); //returns bar
                if ($page == 'logistica-emmagatzematge.php' || $page == 'logistica-emmagatzematge-emmagatzematge-picking.php') {
                    echo "active-sub";
                }
                ?>"><a href="logistica-emmagatzematge.php">Logística | Emmagatzematge</a></li>
                <li class="divider">|</li>
                <li class="select <?php
                $site_url = getUriSegment(1); //returns foo
                $page = getUriSegment(2); //returns bar
                if ($page == 'productes-quimics-emagatzematge.php' || $page == 'productes-quimics.php') {
                    echo "active-sub";
                }
                ?>"><a href="productes-quimics.php">Productes Químics</a></li>
                <li class="divider">|</li>
                <li class="select <?php
                $site_url = getUriSegment(1); //returns foo
                $page = getUriSegment(2); //returns bar
                if ($page == 'contacto.php') {
                    echo "active-sub";
                }
                ?>"><a href="contacto.php">Contacte</a></li>
                <li class="divider">|</li>
                <li><a href="#">Idiomes</a></li>
                <li class="divider">|</li>
                <li><a href="#"><img id="icon-user" src="./assets/img/home/avatar-home.png"/></a></li>
            </ul>
        </div>
    </div>
</header>
<div id="content-menu-sec">
    <div class="container">
        <div id="sobre-nosaltres-sub" class="col-md-12 col-sm-12 col-xs-12 sub-menu-head">
            <div class="col-md-3 col-sm-3 col-xs-12 content-img-menu-sec">
                <img src="./assets/img/generales/menu-nosaltres.jpg"/>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 space-text-menu">              
                <p><a href="sobre-nosaltres.php">Qui som</a></p>
                <p><a href="sobre-nosaltres-infraestructura.php">Infraestructura</a></p>
                <p><a href="nosaltres-equiphuma.php">Equip humà</a></p>
                <p><a href="nosaltres-cultura.php">Cultura i valors</a></p>
                <p><a href="nosaltres-noticias.php">Notícies</a></p>
            </div>
        </div>
        <div id="transport-sub" class="sub-menu-head">
            <div class="col-md-3 col-sm-3 col-xs-12 content-img-menu-sec img-tranport">
                <img src="./assets/img/generales/menu-transport.jpg"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 padd-sub-menu space-text-menu-two">              
                <p><a href="transport-terrestre-nacional.php">Transport Terrestre Nacional</a></p>
                <p><a href="transport-terrestre-internacional.php">Transport Terrestre Internacional</a></p>
                <p><a href="transport-maritim.php">Transport Marítim</a></p>
                <p><a href="transport-aeri.php">Transport Aeri</a></p>
                <p><a href="transport-documentacio.php">Documentació i informació</a></p>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-blue-sub padd-sub-menu">              
                <p><a href="#">Sudamérica Pacífic</a></p>
                <p><a href="#">USA Costa Oest</a></p>
                <p>&nbsp;&nbsp;</p>
                <p>&nbsp;&nbsp;</p>
                <p>&nbsp;&nbsp;</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div id="menu-movil">
    <div class="container">
        <ul id="menu-top-movil">          
            <li id="nosaltres"  <?php
            $site_url = getUriSegment(1); //returns foo
            $page = getUriSegment(2); //returns bar
            if ($page == 'sobre-nosaltres.php' || $page == 'sobre-nosaltres-infraestructura.php' || $page == 'nosaltres-equiphuma.php' || $page == 'nosaltres-cultura.php' || $page == 'nosaltres-noticias.php' || $page == 'nosaltres-news-view.php') {
                echo "class='active-sub'";
            }
            echo $page;
            ?>><a href="#" class="selector-sub">Sobre nosaltres</a>
                <ul class="sub-sn">
                    <li><a href="sobre-nosaltres.php">Qui som</a></li>
                    <li><a href="sobre-nosaltres-infraestructura.php">Infraestructura</a></li>
                    <li><a href="nosaltres-equiphuma.php">Equip humà</a></li>
                    <li><a href="nosaltres-cultura.php">Cultura i valors</a></li>
                    <li><a href="nosaltres-noticias.php">Notícies</a></li>
                </ul>

            </li>
            <li id="transport"    <?php
            $site_url = getUriSegment(1); //returns foo
            $page = getUriSegment(2); //returns bar
            if ($page == 'transport-aeri-pais.php' || $page == 'transport-aeri.php' || $page == 'transport-documentacio.php' || $page == 'transport-maritim-pais.php' || $page == 'transport-maritim.php' || $page == 'transport-terrestre-internacional-pais.php' || $page == 'transport-terrestre-internacional.php' || $page == 'transport-terrestre-nacional.php' || $page == 'transport.php') {
                echo "class='active-sub'";
            }
            ?> ><a href="#"  class="selector-sub">Transport</a>
                <ul class="sub-sn">
                    <li><a href="transport-terrestre-nacional.php">Transport Terrestre Nacional</a></li>
                    <li><a href="transport-terrestre-internacional.php">Transport Terrestre Internacional</a></li>
                    <li><a href="transport-maritim.php">Transport Marítim</a></li>
                    <li><a href="transport-aeri.php">Transport Aeri</a></li>
                    <li><a href="transport-documentacio.php">Documentació i informació</a></li>
                    <li><a href="#">Sudamérica Pacífic</a></li>
                    <li><a href="#">USA Costa Oest</a></li>
                </ul>
            </li>
            <li class="select <?php
            $site_url = getUriSegment(1); //returns foo
            $page = getUriSegment(2); //returns bar
            if ($page == 'logistica-emmagatzematge.php' || $page == 'logistica-emmagatzematge-emmagatzematge-picking.php') {
                echo "active-sub";
            }
            ?>"><a href="logistica-emmagatzematge.php">Logística | Emmagatzematge</a></li>
            <li class="select <?php
            $site_url = getUriSegment(1); //returns foo
            $page = getUriSegment(2); //returns bar
            if ($page == 'productes-quimics-emagatzematge.php' || $page == 'productes-quimics.php') {
                echo "active-sub";
            }
            ?>"><a href="productes-quimics.php">Productes Químics</a></li>
            <li class="select <?php
                $site_url = getUriSegment(1); //returns foo
                $page = getUriSegment(2); //returns bar
                if ($page == 'contacto.php') {
                    echo "active-sub";
                }
                ?>"><a href="contacto.php">Contacte</a></li>
            <li><a href="#">Idiomes</a></li>
            <li><a href="#"><img  src="./assets/img/home/avatar-home.png"/></a></li>
        </ul>
    </div>
</div>
