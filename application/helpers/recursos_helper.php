<?php

function cargarCssHeader()
{
  echo  '
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta http-equiv="Content-Language" content="es">
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       <title>DBSell</title>

       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
       <meta name="description" content="Sistema de Gestión Integral de Información Ambiental, Seguridad Industrial y Salud Ocupacional">
       <meta name="msapplication-tap-highlight" content="no">
       <link href="' . base_url() . '/assets/administracion/template/css/main.css" rel="stylesheet">
       <link href="' . base_url() . '/assets/administracion/librerias/fileinput/css/fileinput.css" rel="stylesheet">

       <link href="' . base_url() . '/assets/administracion/librerias/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">


       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">


       <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
       ';
  cargarMiCss();
}


function cargarMiCss()
{
  echo '
  <style>
 /* Definir variable de colores */
 :root {
     /* Salud Ocupacional */
     --primario: #357DBD;
     --p-light: #6EACF0;
     --p-dark: #004684;
     /* Ambiental */
     --secundario: #A1C181;
     --s-light: #D1EDB5;
     --s-dark: #729154;
     /* Industrial */
     --terciario: #F4CC62;
     --t-light: #F5DE9F ;
     --t-dark: #B48A1C;
     /* Otros*/
     --titulo-card-tareas: #2C4C59;
   }


    /* width */
    #menu-lateral::-webkit-scrollbar {
      width: 0px !important;
    }
    /*For Firefox*/
    #menu-lateral{
      overflow-y: scroll !important;
     /* scrollbar-color: #0A4C95 #C2D2E4;*/
      scrollbar-width: none !important;
    }

    .campo-grocery{
      margin-bottom:30px;
    }

    .item-reporte{
      color:#3A647E !important;
    }

    select.mi-input{
      cursor:pointer;
    }

    .table-cielo thead tr th  {
      vertical-align:middle !important;
    }

    .btn-administrador-activo{
      background-color:#3A647E !important;
      color:white !important;
    }

    .img-perfil-circular{
      height:130px;
      border-radius:130px;
    }

    .item-reporte:hover{
      color:#3A647E !important;
      font-weight:bold;
    }

    .paginate_button a{
      border:1px solid #3A647E !important;
      border-radius:30px !important;
      margin-left:5px !important;
      height:33px;
      width:33px;
    }

    .fc-content{
      cursor:pointer;
    }

    .pagination{
        display: inline-flex;
    }

    div.dataTables_wrapper div.dataTables_paginate{
        text-align: center !important;
    }


    .btn-reporte{
      height:40px !important;
      width:40px !important;
      border-radius:100px !important;
      padding-top:8px !important;
      font-size:16px !important;
    }

    .elemento{
      margin-bottom:10px;
    }

    input.mi-input-sm, select.mi-input-sm{
      height:28px !important;
      font-size:12px;
      padding-top:5px !important;
    }

    .contenedor-producto-epp:hover{
      border:1px solid #3A647E;
      cursor:pointer;
    }


    .oculto{
      display:none !important;
    }

    .btn-accion{
      background:none;
      border:none;
      cursor:pointer;
    }

    .btn-accion:hover{

      text-decoration:underline;
    }

    /* width */
    .menu-lateral::-webkit-scrollbar {
      width: 0px !important;
    }
    /*For Firefox*/
    .menu-lateral{
      overflow-y: scroll !important;
     /* scrollbar-color: #0A4C95 #C2D2E4;*/
      scrollbar-width: none !important;
    }

    .modal-title{
      color:#2C4C59;
    }

    .btn-grande{
      padding-top:50px;
      padding-bottom:40px;
      padding-left:15px;
      padding-right:15px;
      border-radius:25px !important;
      margin-top:20px;
      margin-right:20px;
      width:200px;
    }
    .btn-grande label{
        margin-top:15px;
        font-size:16px;
        cursor:pointer;
        font-family: "Noto Sans", sans-serif !important;
    }

    .columna-ocultable{
      display: none;
    }

    textarea{
      border:1px solid #2C4C59 !important;
      border-radius:20px !important;
      font-size:13px !important;
      font-family: "Noto Sans", sans-serif !important;
    }


    .table-hover tbody tr:hover{
      background-color:#BBDDFF !important;
    }

    textarea{
     outline: none !important;
     padding-left:10px;
     padding-top:10px;
    }

    input{
      font-size:13px !important;
      font-family: "Noto Sans", sans-serif !important;
    }

     .azul-oscuro{
       background-color: #3A647E;
       color:white;
     }

     .form-redondeado{
         border-radius:20px;
         border:1px solid #2C4C59;
     }
     .form-line{
       outline: none;
       border:none;
       border-bottom: 1px solid #2C4C59;
     }
     .btn-circle{
       border-radius:150px;
       height:35px;
       width:35px;
     }

     .btn-blanco{
       background-color:white;
       color: #2C4C59;
       border:none;
     }

     .fondo-industrial{
       background-color:#F4CC62;
     }

     .fondo-salud{
       background-color:#357DBD;
     }

     .fondo-ambiente{
       background-color:#A1C181;
     }

     .redondeado{
         border-radius:60px;
         cursor:pointer;
     }

     .salud{
       background-color:#357DBD;
     }

     .sombra-gris:hover{
       -webkit-box-shadow: 1px 1px 8px 5px rgba(115,115,115,0.41);
       box-shadow: 1px 1px 8px 5px rgba(115,115,115,0.41);
     }

     #bottom {
         position:absolute;
         bottom:20px;
         left:47%;
         color:#3A647E;
         font-size:13px;
     }

     .btn-azul{
       background-color:#3A647E;
       color:white;
       border-radius:20px;
     }

     .btn-azul:hover{
       background-color:white;
       color:#3A647E;
       border:1px solid #3A647E;
     }

     .btn-outline-azul{
       background-color:white;
       color:#3A647E;
       border:1px solid #3A647E;
       border-radius:20px;
     }

     .btn-outline-azul:hover{
       background-color:#3A647E;
       color:white;
       border-radius:20px;
       /* border:2px solid #3A647E;*/
     }

     .letra-azul-oscuro{
        color:#3A647E;
     }

    .mi-input:focus{
 			outline: 0 none;
 		}

     .hero{
       font-weight:bold;
       font-size:100px;
       letter-spacing: 1.5px;
       font-family: "Noto Sans", sans-serif;
     }

     .h1{
       font-weight:extra light !important;
       font-size:96px;
       letter-spacing: 1.5px;
       font-family: "Noto Sans", sans-serif;
     }


     .h4{
       font-weight:bold;
       font-size:34px;
       letter-spacing: 0px;
       font-family: "Noto Sans", sans-serif;
     }

     .h5{
       font-weight:bold;
       font-size:24px;
       letter-spacing: 0px;
       font-family: "Noto Sans", sans-serif;
     }


     .subtitulo1{
       font-weight:bold;
       font-size:16px;
       letter-spacing: 0.15px;
       font-family: "Noto Sans", sans-serif;
     }

     .subtitulo2{
       font-weight:medium;
       font-size:16px;
       letter-spacing: 0.1px;
       font-family: "Noto Sans", sans-serif;
     }

     .mi-subtitulo1{
       text-transform: uppercase;
       padding-top:12px;
       padding-bottom:12px;
       color:#2C4C59;
       font-family: "Noto Sans", sans-serif;
     }

     .menu-modulo{
       letter-spacing:1px;
       font-weight:normal !important;
       font-family: "Noto Sans", sans-serif;
     }
     .menu-modulo label{
        cursor:pointer;
     }

     .submenu-ambiental{
       color:#729154 !important;
       font-weight:normal !important;
     }


     .submenu-ambiental:hover{
       color:#2C4C59 !important;
     }

     .submenu-ambiental.active{
       color:#2C4C59 !important;
     }

     .submenu-administracion:hover{
       color:#2C4C59 !important;
       font-weight:bold;
     }

     .submenu-administracion.active{
       color:#2C4C59 !important;
       font-weight:bold;
     }

     .btn-circle-menu{
           font-size:16px !important;
           height:40px !important;
           width:40px !important;
           border-radius:200px !important;
           margin-top:10px;
     }

     .page-title-icon{
        box-shadow:none !important;
        width:50px !important;
        margin-right:15px !important;
        margin-top:-15px !important;
     }

     .caret-left{
       margin-right:20px !important;
     }

     .fa.pull-right{
       margin-right:10px !important;
     }

     .icono-modulo{
       height:45px !important;
       width:45px !important;
       margin-top:10px;
     }

     .btn-agregar{
       letter-spacing: 0.5px;
       padding-left:12px;
       padding-right:12px;
       padding-top:3px;
       padding-bottom:3px;
       font-size:12px;
     }

     .nivel-3:hover{
       text-decoration:underline !important;
     }
     .nivel-3.active{
       text-decoration:underline !important;
     }

     body, div, a, input, button, table, .pGroup th, td {
       font-family: "Noto Sans", sans-serif !important;
       color:#2C4C59;
     }


     .industrial{
       color:#F4CC62;
     }

     .submenu-industrial{
       color:#B48A1C !important;
       font-weight:normal !important;
     }

     .industrial .subtitulo2{
         color:#F5DE9F;
     }


     ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
       color: #D0D7DA !important;
       opacity: 1; /* Firefox */
     }


     .submenu-industrial:hover{
       color:#2C4C59 !important;
     }

     .submenu-industrial.active{
       color:#2C4C59 !important;
     }

     .salud-ocupacional{
       color:#357DBD;
     }


     .modulo-administracion{
       color:#30377F;
     }

     .modulo-convenios{
       color:#189238;
     }


     .modulo-laboratorios{
       color:#EC731B;
     }

     .modulo-academico{
      color:#169FDB;
    }


     .submenu-salud{
       color:#004684 !important;
       font-weight:normal !important;
     }


     .submenu-salud:hover{
       color:#F2F2F2 !important;
     }

     .submenu-salud.active{
       color:#F2F2F2 !important;
     }


     .switch {
       position: relative;
       display: inline-block;
       width: 60px;
       height: 30px;
     }


     .switch input {
       opacity: 0;
       width: 0;
       height: 0;
     }


     .slider {
       position: absolute;
       cursor: pointer;
       top: 0;
       left: 0;
       right: 0;
       bottom: 0;
       background-color: #F2F2F2;
       -webkit-transition: .4s;
       border:0.5px solid #3A647E;
       transition: .4s;
     }

     .slider:before {
       position: absolute;
       content: "";
       height: 20px;
       width: 20px;
       left: 4px;
       bottom: 4px;
       background-color: white;
       -webkit-transition: .4s;
       border:1px solid #3A647E;
       transition: .4s;
     }


     .slider.round {
       border-radius: 34px;
     }

     .slider.round:before {
       border-radius: 50%;
     }
     input:checked + .slider {
       background-color: #2C4C59;
     }

     input:focus + .slider {
       box-shadow: 0 0 1px #2196F3;
     }

     input:checked + .slider:before {
       -webkit-transform: translateX(26px);
       -ms-transform: translateX(26px);
       transform: translateX(26px);
     }
     .topcorner{
        position:absolute;
        top:20px;
        right:0;
       }

     .btn-principal{
       background-color:#3A647E;
       border-radius:40px;
       color:white;
     }

     .btn-principal:hover{
       background-color:#2C4C59;
       color:white;
     }

     .btn-secundario{
       background-color:white;
       border-radius:40px;
       color:#3A647E;
       border:1px solid #3A647E;
     }

     .btn-secundario:hover{
       color:#2C4C59;
       border:3px solid #2C4C59;
       /*transform: scale(0.97);*/
     }

     .vista-active{
       color:#2C4C59;
       border:3px solid #2C4C59;
     }


     .btn-large{
       height:42px;
     }

     .btn-medium{
       height:32px;
       padding-top:5px !important;
       padding-bottom:8px !important;
     }


     .mi-input{
       height:35px !important;
       border-radius:7px !important;
       padding-left: 10px !important;
       width:100% !important;
       border-radius:40px !important;
       border:1px solid #2C4C59 !important;
     }

     .chosen-single{
       height:35px !important;
       border-radius:7px !important;
       padding-left: 10px !important;
       width:100% !important;
       border-radius:40px !important;
       border:1px solid #2C4C59 !important;
       padding-top:5px !important;
       background:none !important;
       color:#212121 !important;
     }
     .chosen-single div{
       padding-top:5px !important;
     }

     .contenedor_indicador_salud{
       border:1px solid #3A647E;
       border-radius:20px;
       padding:15px;
     }

     .search-choice-close{
       margin-top:5px !important;
     }

     .chosen-drop{
       margin-top:5px !important;
       border:1px solid #2C4C59 !important;
       border-radius:5px !important;
       padding:7px !important;
     }

     .chosen-choices{
       height:35px !important;
       border-radius:7px !important;
       padding-left: 10px !important;
       width:100% !important;
       border-radius:40px !important;
       border:1px solid #2C4C59 !important;
       padding-top:5px !important;
       background:none !important;
       color:#212121 !important;
     }


     li a.search-choice-close{
       margin-top:0px !important;
     }

     .azul-oscuro .dropdown-item:hover{
       color:white;
       text-decoration:underline;
     }

     label.error{
       color:red;
     }
     input.error, select.error{
       border:1px solid red !important;
     }

     textarea.error, select.error{
       border:1px solid red !important;
     }
     /* Otros estilos */
     .font-size-12{
       font-size: 12px;
     }
     /* Estilo industrial tarjetas tareas */
     .border-tareas-industrial{
       border-color: var(--terciario);
       border-width: 1px;
       border-radius: 1.5rem;
     }
     .menu-tareas-industrial{
       color: var(--t-dark);
     }
     .titulo-tareas{
       color: var(--titulo-card-tareas);
       line-height: 27px;
       font-size: 20px;
       font-style: normal;
       font-weight: bold;
     }
     .input-date-custom{
       border:none;
       outline: 0!important;
       font-size:12px !important;
       font-family: "Noto Sans", sans-serif !important;
     }
     .input-date-custom:focus{
       box-shadow: none;
     }
     .indicador1-industrial, .indicador2-industrial{
       color: var(--titulo-card-tareas);
       font-weight: bolder;
     }
     .indicador1-industrial::before {
       content: "";
       background-color: var(--t-light);
       height: 25px;
       padding-left: 20px;
       margin-right: .5rem;
       border-radius: .2rem;
   }

   .indicador2-industrial::before {
       content: "";
       background-color: var(--t-dark);
       height: 25px;
       padding-left: 20px;
       margin-right: .5rem;
       border-radius: .2rem;
   }
   .bg-industrial{
     background-color: var(--terciario);
   }
   .activity{
     color: var(--titulo-card-tareas);
     font-weight: bolder;
   }
   .progress-text{
     color: var(--titulo-card-tareas);
     font-weight: 500;
   }
   .progress-percentage-industrial{
     font-weight: 500;
     color: var(--t-dark);
   }
   /* Estilo Salud Ocupacional tarjetas tareas */
   .border-tareas-salud{
     border-color: var(--primario);
     border-width: 1px;
     border-radius: 1.5rem;
   }
   .menu-tareas-salud{
     color: var(--p-dark);
   }
   .indicador1-salud, .indicador2-salud{
     color: var(--titulo-card-tareas);
     font-weight: bolder;
   }
   .indicador1-salud::before {
     content: "";
     background-color: var(--p-light);
     height: 25px;
     padding-left: 20px;
     margin-right: .5rem;
     border-radius: .2rem;
 }

 .indicador2-salud::before {
     content: "";
     background-color: var(--p-dark);
     height: 25px;
     padding-left: 20px;
     margin-right: .5rem;
     border-radius: .2rem;
 }
 .bg-salud{
   background-color: var(--primario);
 }
 .progress-percentage-salud{
   font-weight: 500;
   color: var(--p-dark);
 }
   /* Estilo Ambiental tarjetas tareas */
 .ambiental{
   color:  #A1C181;
 }
   .border-tareas-ambiental{
     border-color: var(--secundario);
     border-width: 1px;
     border-radius: 1.5rem;
   }
   .menu-tareas-ambiental{
     color: var(--s-dark);
   }
   .indicador1-ambiental, .indicador2-ambiental{
     color: var(--titulo-card-tareas);
     font-weight: bolder;
   }
   .indicador1-ambiental::before {
     content: "";
     background-color: var(--s-light);
     height: 25px;
     padding-left: 20px;
     margin-right: .5rem;
     border-radius: .2rem;
 }

 .indicador2-ambiental::before {
     content: "";
     background-color: var(--s-dark);
     height: 25px;
     padding-left: 20px;
     margin-right: .5rem;
     border-radius: .2rem;
 }
 .bg-ambiental{
   background-color: var(--secundario);
 }
 .progress-percentage-ambiental{
   font-weight: 500;
   color: var(--s-dark);
 }
 .text-color-dark{
   color: var(--titulo-card-tareas)!importan;
   font-weight: 600;
 }

 .card-menu {
     background: #F2F2F2;
     width: 75%;
 }

 .card-menu:hover {
     box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
 }
 .header-dropdown-menu{
   background: #F2F2F2;
 }


   .TRV{
     background-color:#FFFF99 !important;
     color:black;
   }

   .TOL{
     background-color:#FFFF00 !important;
     color:black;
   }

   .MOD{
     background-color:#993300 !important;
     color:white;
   }


   .IMP{
     background-color:#808080 !important;
     color:white;
   }

   .INT{
     background-color:#FF0000 !important;
     color:white;
   }


   .ntp-Extremo{
     background-color:#FF0000!important;
     color:white;
   }

   .ntp-Alto{
     background-color:#FFC000 !important;
   }

   .ntp-Medio{
     background-color:#FFFF00 !important;
   }

   .ntp-Bajo{
     background-color:#00B050 !important;
     color:white;
   }

   .mi-tab-active{
      text-decoration:underline !important;
      color:#2C4C59 !important;
      font-size:13px !important;
   }

   .mi-tab{
     color:#979797;
     font-size:13px !important;
   }

   .mi-tab:hover{
     color:#2C4C59;
   }


   .btn-agregar-vacio{
     letter-spacing:0.5px;
     font-size:14px;
     background-color:transparent;
     border:none;
     cursor:pointer;
   }
   .btn-agregar-vacio:hover{
       text-decoration:underline;
   }

   .table-cielo thead{
       background-color:#F3F6F9;
       padding:0px;
       font-size:12px;
   }
   .table-cielo, .table-cielo tr , .table-cielo td  , .table-cielo th , .table-cielo thead {
     border:none;
     padding-top:8px;
     padding-bottom:8px !important;
     border-spacing: 0px;
   }




   .table-cielo thead tr{
      border-bottom: 20px solid white;
   }


   .contenedor-producto-epp{
     margin-top:10px;
     background-color:white;
     border-radius:10px;
     padding:20px;
     height:270px;
     -webkit-box-shadow: -10px 0px 30px -10px #B9B9B9;
     box-shadow: -10px 0px 30px -10px #B9B9B9;


   }

   .stock{
     padding-left:10px;
     padding-right:10px;
     padding-top:2px;
     padding-bottom:2px;
     border-radius:10px;
     margin-top:10px;
     font-size:12px;
       color:#2C4C59;
   }

   .stock-alto{
      background-color:#A4E4AE;
   }

   .stock-medio{
      background-color:#F5DE9F;
   }

   .stock-bajo{
      background-color:#F48383;
   }

   .sin-stock{
      background-color:#F48383;
   }



   thead .sorting {
   	background: url(' . base_url() . '/assets/administracion/librerias/datatables/images/sort_both.png) no-repeat center right !important;
   }

   thead .sorting_asc {
   	background: url(' . base_url() . '/assets/administracion/librerias/datatables/images/sort_asc.png) no-repeat center right !important;
   }
    thead .sorting_desc {
   	background: url(' . base_url() . '/assets/administracion/librerias/datatables/images/sort_desc.png) no-repeat center right !important;
   }

   .CellWithComment{
     position:relative;
     align:center;
   }

    .CellComment
    {
        align:center;
        width: auto;
        position:absolute;
        z-index:100;
        text-align: center;
        transition: opacity 2s;
        border-radius: 6px;
        background-color: #3A647E;
        color:white;
        padding:3px;
        padding-left:10px;
        padding-right:10px;
        top:-20px;
        left:0px;
    }
    .CellComment:after {
         z-index: -1;
         position: absolute;
         top: 98.1%;
         left: 70%;
         margin-left: -30%;
         content: "";
         width: 0;
         height: 0;
         border-top: solid 7px #3A647E;
         border-left: solid 7px transparent;
         border-right: solid 7px transparent;
     }
    .CellWithComment:hover span.CellComment {visibility: visible;opacity: 1;}
  </style>
  ';
}

function cargarJsHeader()
{
  echo '
    <script type="text/javascript" src="' . base_url() . '/assets/administracion/template/scripts/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="' . base_url() . '/assets/administracion/librerias/datatables/datatables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    <script type="text/javascript" src="' . base_url() . '/assets/administracion/librerias/validator/jquery.validate.min.js"></script>
    <script type="text/javascript" src="' . base_url() . '/assets/administracion/librerias/validator/additional-methods.min.js"></script>
    <script type="text/javascript" src="' . base_url() . '/assets/administracion/librerias/validator/misvalidaciones.js"></script>
    <script type="text/javascript" src="' . base_url() . '/assets/administracion/librerias/fileinput/js/fileinput.js"></script>
    <script type="text/javascript" src="' . base_url() . '/assets/administracion/librerias/rowspanizer/jquery.rowspanizer.js"></script>
    <script type="text/javascript" src="' . base_url() . '/assets/administracion/librerias/numeros/js-written-number.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript" src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>

    <script>
      $.validator.setDefaults({ ignore: ":hidden:not(.chosen-select)" });
      function formatearFecha(fecha){
        var d = new Date(fecha),
           month = "" + (d.getMonth() + 1),
           day = "" + d.getDate(),
           year = d.getFullYear();

       if (month.length < 2) month = "0" + month;
       if (day.length < 2) day = "0" + day;

       return [day, month, year].join("/");
      }


      function cargaHtml(){
        return "<center><br><label style=\"font-size:12px;\"><i class=\"fa fa-spin fa-spinner fa-lg\"></i> Consultando Información</label></center>"
      }

      function procesarVistasTabla(estado){
        if(estado=="s"){
            $(".columna-ocultable").hide();
            $(".vista-simplificada").addClass("vista-active");
            $(".vista-extendida").removeClass("vista-active");
        }else{
          $(".columna-ocultable").show();
          $(".vista-extendida").addClass("vista-active");
          $(".vista-simplificada").removeClass("vista-active");
        }
      }

      Date.prototype.addDays = function (days) {
          const date = new Date(this.valueOf());
          date.setDate(date.getDate() + days);
          return date;
      };

      function formatDate(date) {
          var d = new Date(date),
              month = "" + (d.getMonth() + 1),
              day = "" + d.getDate(),
              year = d.getFullYear();

          if (month.length < 2)
              month = "0" + month;
          if (day.length < 2)
              day = "0" + day;

          return [year, month, day].join("-");
      }
      function sumarDias(fechaInicio,numeroDias){
        var inicio =  new Date(fechaInicio);
        var finCalculado=inicio.addDays(numeroDias);
        var fin=formatDate(finCalculado);
        return fin;
      }

      function convertirAMDFechaTexto(fecha){
        try{
          var partes=fecha.split("-");
          var meses=["ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE",
        "DICIEMBRE"];
          dia=writtenNumber(partes[2], {lang: "es"});
          mes=meses[parseInt(partes[1])-1];
          anio=writtenNumber(partes[0], {lang: "es"});
          var fechaTexto=dia+" de "+mes+" del "+anio;
          return fechaTexto.toUpperCase();
        }catch(error){
          return "";
        }

      }

    </script>
        ';
}


function paginadorCrud()
{
  echo '

      	.pGroup .next-button {
      	 padding-top:4px;
      	 height:30px;
      	 width:30px;
      	}

      	.pGroup .first-button{
      		height:30px;
       	  width:30px;
      		/* padding-right:10px !important; */
      		padding-left:7px !important;
      		padding-top:5px;
      	}
      	.pGroup .prev-button {
      	 padding-top:4px;
      	 height:30px;
      	 width:30px;
      	 	padding-left:7px !important;
      	}

      	.pGroup .last-button{
      		height:30px;
      		width:30px;
      		/* padding-right:10px !important; */
      		padding-left:7px !important;
      		padding-top:5px;
      	}

      	.pGroup .ajax_refresh_and_loading{
      		height:30px;
      		width:30px;
      		/* padding-right:10px !important; */
      		padding-left:7px !important;
      		padding-top:5px;
      	}

        ';
}


function cargarCssPasos()
{
  echo '
  <script type="text/javascript">
  	function abrirPaso(numero){
  		$(".btn-"+numero).trigger("click");
  	}
  </script>
  <style media="screen">

  .btn-vacio{
      background-color:white !important;
      border: 1px solid #b8b8b8 !important;
      color:#b8b8b8 !important;
  }

  .stepwizard-step p {
    margin-top: 0px;
    color:#5A6268;
  }

  .stepwizard {

  }
  .stepwizard-step button[disabled] {

  }
  .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#cdcdcd;
  }

  .stepwizard-step {
    display: table-cell;
    text-align: left;
    position: relative;
    width:45px;
  }

  .btn-circle-step {
      width: 35px;
      height: 35px;
      text-align: center;
      padding: 8px 0;
      font-size: 14px;
      line-height: 1.428571429;
      border-radius: 30px;
  }

  .panel-heading{
    padding-top:10px;
    padding-bottom:10px;
    border-radius:10px;
    background-color:white;
  }

  .panel-body{
    background-color:white !important;
    padding:20px;
    border-radius:10px;
    margin-top:20px;
  }


  .linea-central{
    width: 80px !important;
  }

  .linea-central::after{
    content: "";
    width: 30px;
    height: 1px;
    left:42px !important;
    padding-left:20px !important;
    background-color: #b8b8b8;
    display: block;
    position: absolute;
    top: 17px;
    z-index: -1;
  }

  #elemento_final::after{
    height: 0px !important;
  }




  .btn-circle-step{
    padding-top:6px;
  }
  </style>
  <script>
  // Fix Modal
    $(`.modal `).insertAfter($(`body`));
    $(document).ready(function() {
      $("body").after($(".modal"));
    });
  </script>
  ';
}

function fixModales()
{
  echo '
  <script>
    $(`.modal `).insertAfter($(`body`));
    $(`.modal`).on(`hide.bs.modal`, function(event) {
      $(".modal-backdrop").remove();
  });
  </script>
  ';
};
function cargarCssReportes()
{
  echo '
    <title>CIYA</title>
    <link rel="icon" type="image/png" href="' . base_url() . '/assets/presentacion/images/utc.png">
    <style>
        html{
            font-family: "Noto Sans", sans-serif !important;
        }

        body{
            font-size:11px !important;
        }
        .marginado {
          /* POR DEFAULT TRAE 1cm por lado */
          /* ACTUAL:
              SUPERIOR: 1cm,
              INFERIOR: 1cm,
              IZQUIERDO: 2.5cm,
              DERECHO: 1cm,*/
          /* margin-top: 1cm !important; */
          /* margin-bottom: 1cm !important; */
          /* border: 1px solid red; */
          margin-left: 1.5cm !important;
          /* margin-right: 1cm !important; */
      }

    </style>
    ';
  cargarMiCss();
}

function cargarJqueryUI()
{
  echo '<script src="' . base_url() . '/assets/administracion/librerias/jquery-ui/jquery-ui.js"></script>';
  echo '<link href="' . base_url() . '/assets/administracion/librerias/jquery-ui/jquery-ui.css" rel="stylesheet">';
}
