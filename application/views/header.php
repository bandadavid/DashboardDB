<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <?php cargarJsHeader(); ?>
    <?php cargarCssHeader(); ?>


    <!-- STYLES -->
    <link href="<?php echo base_url(); ?>/assets/template/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">


    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- SCRIPTS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/template/js/custom.js"></script>


</head>

<body>
    <div id="loading">
        <img id="loading-image" src="<?php echo base_url(); ?>/assets/images/carga.gif" alt="Procesando..." />
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#loading').hide();
        });

        function mostrarCarga() {
            $('#loading').fadeIn();
        }

        function ocultarCarga() {
            $('#loading').hide();
        }

        $(document).ajaxStart(function() {
            mostrarCarga();
        }).ajaxComplete(function() {
            ocultarCarga();
        });
    </script>


    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">DBSell</span>
                    <span class="profession">Sistema de ventas <br> de cuentas</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="<?php echo base_url(); ?>" id="menu-inicio" title="Inicio">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="<?php echo site_url(); ?>/productos/index" id="menu-productos" title="Productos">
                            <i class='bx bx-cart icon'></i>
                            <span class="text nav-text">Productos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#" title="Ventas">
                            <i class='bx bx-purchase-tag icon'></i>
                            <span class="text nav-text">Ventas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#" title="Clientes">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">Clientes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#" title="Servicios">
                            <i class='bx bx-package icon'></i>
                            <span class="text nav-text">Servicios</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#" title="Salir">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Salir</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Modo Dia";
            } else {
                modeText.innerText = "Modo Oscuro";

            }
        });
    </script>

    <section class="home">