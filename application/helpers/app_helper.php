<?php

function formatearFechaDMA($fecha)
{
  return  date("d/m/Y", strtotime($fecha));
}


function menuSSA()
{
  echo '
    <script type="text/javascript">
        function cerrarSubMenuSSA(elemento){
           var id=$(elemento).data("id");
           $("#"+id).removeClass("show");
        }
    </script>



        <ul class="vertical-nav-menu dropdown-menu azul-oscuro" id="menu-ssa-final" style="padding:0px; width:290px;">
          <li>
            <a class="text-right" href="javascript:void(0)" style="" onclick="cerrarSubMenuSSA(this);"
            data-id="menu-ssa-final">
              <div>
                  <i class="fa fa-times-circle" style="color:white; font-size:16px; margin-right:-20px;"></i> &nbsp;
              </div>
            </a>
          </li>


          <li aria-expanded="true" style="margin-top:-10px;">
            <a href="javascript:void(0)" aria-expanded="false" style="color:white !important;" class="item-ssa submenu-requisitos-legales">
                Nómina
                &nbsp; &nbsp;
                   <i class="fa fa-chevron-down" style="font-size:10px; margin-top:15px;"></i>

                <!-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> -->
            </a>
            <ul style="background-color:#3A647E;">
                  <li>
                      <a  href="' . site_url() . '/empleados/index"  class="sub-item-ssa" >
                           &bull; Empleados
                      </a>
                  </li>
                  <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                  <li>
                      <a  href="' . site_url() . '/empleados/consultaDocumentosEscaneados"  class="sub-item-ssa" >
                           &bull; Doc. Escaneados
                      </a>
                  </li>
                  <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                  <li>
                      <a  href="' . site_url() . '/cargos/index"  class="sub-item-ssa" >
                           &bull; Cargos
                      </a>
                  </li>
                <!--  <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                  <li>
                      <a  href="' . site_url() . '/empleados/empleadosInactivos"  class="sub-item-ssa" >
                           &bull; Empleados Inactivos
                      </a>
                  </li>-->
              </ul>
          </li>


            <hr style="background: white; margin-top:0px; margin-right: 40px;  margin-left: 40px; ">
          <li aria-expanded="true" style="margin-top:-10px;">
              <a href="javascript:void(0)" aria-expanded="false" style="color:white !important;" class="item-ssa submenu-requisitos-legales">
                  Requisitos Legales
                  &nbsp; &nbsp;
                     <i class="fa fa-chevron-down" style="font-size:10px; margin-top:15px;"></i>

                  <!-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> -->
              </a>
              <ul style="background-color:#3A647E;">
                    <li>
                        <a  href="' . site_url() . '/legales/financieros"  class="sub-item-ssa" >
                             &bull; Financiero
                        </a>
                    </li>
                    <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                    <li>
                        <a  href="' . site_url() . '/legales/sistemas"  class="sub-item-ssa" >
                             &bull; Sistemas
                        </a>
                    </li>
                    <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                    <li>
                        <a  href="' . site_url() . '/legales/tthh"  class="sub-item-ssa" >
                             &bull; TTHH
                        </a>
                    </li>
                    <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                    <li>
                        <a  href="' . site_url() . '/legales/ssa"  class="sub-item-ssa" >
                             &bull; SSA
                        </a>
                    </li>
                    <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                    <li>
                        <a  href="' . site_url() . '/legales/empresas"  class="sub-item-ssa" >
                             &bull; Empresa
                        </a>
                    </li>
                    <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                    <li>
                        <a  href="' . site_url() . '/legales/transportes"  class="sub-item-ssa" >
                             &bull; Transporte
                        </a>
                    </li>
                    <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                    <li>
                        <a  href="' . site_url() . '/legales/calidades"  class="sub-item-ssa" >
                             &bull; Calidad
                        </a>
                    </li>
                    <hr style="background: white; margin:0px; margin-right: 40px; margin-left:15px;">
                    <li>
                        <a  href="' . site_url() . '/legales/consolidados"  class="sub-item-ssa" >
                             &bull; Consolidado
                        </a>
                    </li>
              </ul>
          </li>
          <hr style="background: white; margin-top:0px; margin-right: 40px;  margin-left: 40px; ">
          <li style="margin-top:-10px;">
              <a href="' . site_url('listamaestra/index') . '"  class="item-ssa" style="color:white !important;">
                  Lista Maestra de Documentos
                  <!-- &nbsp; &nbsp;
                     <i class="fa fa-chevron-right" style="font-size:10px; margin-top:15px;"></i> -->
              </a>
          </li>
          <hr style="background: white; margin-top:0px; margin-right: 40px;  margin-left: 40px; ">
          <li>
              <a href="' . site_url('seguridad/cerrarSesion') . '"  class="item-ssa" style="color:white !important;">
                CERRAR SESIÓN
                  &nbsp;   <i class="fa fa-sign-out-alt"></i>
              </a>
          </li>
          <br> <br>
        </ul>



    <style media="screen">

         a.item-ssa{
          color:white !important;
        }

         a.item-ssa:hover{
          background-color:#3A647E !important;
          border-radius:0px;
          text-decoration:underline !important;
          color:white !important;
        }

        .submenu-requisitos-legales.mm-active{
          background-color:#3A647E;
          font-weight:normal !important;
          text-decoration:underline;
          font-family: "Noto Sans", sans-serif !important;
        }

        .vertical-nav-menu li.mm-active > a {
            font-weight:normal !important;
        }

        a.sub-item-ssa{
          color:white !important;
        }

        a.sub-item-ssa:hover{
           text-decoration:underline !important;
        }

    </style>


    ';
}

function obtenerCantonesPorProvincia($codigo_cat)
{
  $CI = &get_instance();
  $CI->load->model('catalogo');
  $provincia = $CI->catalogo->obtenerPorCodigo($codigo_cat);
  $cantones = $CI->catalogo->obtenerCantonesPorProvincia($provincia->descripcion_cat);
  if ($cantones) {
    $listaCantones = "";
    foreach ($cantones->result() as $canton) {
      $listaCantones .= '<option value="' . $canton->codigo_cat . '">' . $canton->descripcion_cat . '</option>';
    }
    return $listaCantones;
  } else {
    return "";
  }
}

function validarEmpleadoSeleccionado($retorno = "")
{
  $CI = &get_instance();
  $CI->load->library('session');
  if ($CI->session->userdata('empleadoC13LO')) {
    return true;
  } else {
    $CI->session->set_flashdata("informacion", "Por favor seleccione un trabajador");
    redirect('vigilancias/seleccionarTrabajador/' . $retorno);
    return false;
  }
}

function encabezadoEmpleadoSesion($retorno)
{
  $CI = &get_instance();
  $CI->load->library('session');
  if ($CI->session->userdata('empleadoC13LO')) {
    $fotografia = "";
    if ($CI->session->userdata("documentosEscaneadosC13LO")) {
      $fotografia = $CI->session->userdata("documentosEscaneadosC13LO")->fotografia_de;
    }

    if ($fotografia == "") {
      $imagen = '<img id="visor_imagen_emp" src="' . base_url('assets/img/aux_empleado.jpg') . '" alt=""
        height="80px" width="70px"  style="border-radius:10px !important;">';
    } else {
      $imagen = '<img id="visor_imagen_emp" src="' . base_url() . obtenerRutaCarpetaPrincipal() . '/gestion_ssa/empleados/documentos_escaneados/' . $CI->session->userdata("documentosEscaneadosC13LO")->fotografia_de . '" alt=""
        height="80px" width="70px"  style="border-radius:10px !important;">';
    }

    echo '
          <div class="row">
            <div class="col-md-8">
            <div class="row">
              <div class="col-md-2 text-right">' .
      $imagen
      . '</div>
              <div class="col-md-10" style="text-transform:uppercase;"><b>
                  ' . $CI->session->userdata("empleadoC13LO")->apellido_emp . ' ' . $CI->session->userdata("empleadoC13LO")->segundo_apellido_emp . '
                  ' . $CI->session->userdata("empleadoC13LO")->nombre_emp . ' ' . $CI->session->userdata("empleadoC13LO")->segundo_nombre_emp . ' </b><br>
                  ' . $CI->session->userdata("empleadoC13LO")->identificacion_emp . '
                  <div id="seccion_gestacion"></div>
                  <a href="' . site_url('vigilancias/salirSesionEmpleado/') . $retorno . '" class="" >
                  SALIR DE PACIENTE
                </a>
              </div>
            </div>
            </div>
            <div class="col-md-4 text-right">
              <br>
              <a href="' . site_url('vigilancias/salirSesionEmpleado/') . $retorno . '" class="btn btn-secundario">
              &nbsp; &nbsp;    NUEVA CONSULTA &nbsp; &nbsp;
            </a>
            </div>
          </div>
          <script>
            function cargar_datos_gestacion(){
              $("#seccion_gestacion").load("' . site_url('vigilancias/seccion_gestacion/') . '");
            }
            cargar_datos_gestacion();
          </script>
      ';
  } else {
    $CI->session->set_flashdata("informacion", "Por favor seleccione un trabajador");
    redirect('vigilancias/seleccionarTrabajador');
    return false;
  }
}

function obtenerHash()
{
  return time() * rand(1, 5000);
}

function formatearSoloFecha($fecha)
{
  date_default_timezone_set('America/Guayaquil');
  $partesFecha = explode("-", $fecha);
  $anio = $partesFecha[0];
  $mes = $partesFecha[1];
  $dia = $partesFecha[2];
  return "$dia/$mes/$anio";
}


function validarCI($strCedula)
{
  //aqui explico la logica de la validacion de una cedula de ecuador
  //El decimo Digito es un resultante de un calculo
  //Se trabaja con los 9 digitos de la cedula
  //Cada digito de posicion impar se lo duplica, si este es mayor que 9 se resta 9
  //Se suman todos los resultados de posicion impar
  //Ahora se suman todos los digitos de posicion par
  //se suman los dos resultados
  //se resta de la decena inmediata superior
  //este es el decimo digito
  //si la suma nos resulta 10, el decimo digito es cero

  if (is_null($strCedula) || empty($strCedula)) { //compruebo si que el numero enviado es vacio o null
    echo "Por Favor Ingrese la Cedula";
  } else { //caso contrario sigo el proceso
    if (is_numeric($strCedula)) {
      $total_caracteres = strlen($strCedula); // se suma el total de caracteres
      if ($total_caracteres == 10) { //compruebo que tenga 10 digitos la cedula
        $nro_region = substr($strCedula, 0, 2); //extraigo los dos primeros caracteres de izq a der
        if ($nro_region >= 1 && $nro_region <= 24) { // compruebo a que region pertenece esta cedula//
          $ult_digito = substr($strCedula, -1, 1); //extraigo el ultimo digito de la cedula
          //extraigo los valores pares//
          $valor2 = substr($strCedula, 1, 1);
          $valor4 = substr($strCedula, 3, 1);
          $valor6 = substr($strCedula, 5, 1);
          $valor8 = substr($strCedula, 7, 1);
          $suma_pares = ($valor2 + $valor4 + $valor6 + $valor8);
          //extraigo los valores impares//
          $valor1 = substr($strCedula, 0, 1);
          $valor1 = ($valor1 * 2);
          if ($valor1 > 9) {
            $valor1 = ($valor1 - 9);
          } else {
          }
          $valor3 = substr($strCedula, 2, 1);
          $valor3 = ($valor3 * 2);
          if ($valor3 > 9) {
            $valor3 = ($valor3 - 9);
          } else {
          }
          $valor5 = substr($strCedula, 4, 1);
          $valor5 = ($valor5 * 2);
          if ($valor5 > 9) {
            $valor5 = ($valor5 - 9);
          } else {
          }
          $valor7 = substr($strCedula, 6, 1);
          $valor7 = ($valor7 * 2);
          if ($valor7 > 9) {
            $valor7 = ($valor7 - 9);
          } else {
          }
          $valor9 = substr($strCedula, 8, 1);
          $valor9 = ($valor9 * 2);
          if ($valor9 > 9) {
            $valor9 = ($valor9 - 9);
          } else {
          }

          $suma_impares = ($valor1 + $valor3 + $valor5 + $valor7 + $valor9);
          $suma = ($suma_pares + $suma_impares);
          $dis = substr($suma, 0, 1); //extraigo el primer numero de la suma
          $dis = (($dis + 1) * 10); //luego ese numero lo multiplico x 10, consiguiendo asi la decena inmediata superior
          $digito = ($dis - $suma);
          if ($digito == 10) {
            $digito = '0';
          } else {
          } //si la suma nos resulta 10, el decimo digito es cero
          if ($digito == $ult_digito) { //comparo los digitos final y ultimo
            return true;
          } else {
            return false;
          }
        } else {
          return false;
        }
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}


function obtenerPesoMaximo()
{
  return 2048;
}



function obtenerRutaCarpetaPrincipal()
{
  $CI = &get_instance();
  $CI->load->library('session');
  if (!($CI->session->userdata("empr3s4C13LO"))) {
    echo '<script>window.top.location.href ="' . obtenerUrlPasarela() . 'seguridad/cerrarSesion";</script>';
  }

  $nombreCarpetaPrincipal = "empresa_" . $CI->session->userdata("empr3s4C13LO")->codigo_emp;
  return 'uploads/' . $nombreCarpetaPrincipal;
}


function obtenerNombreTipoSistemaContraIncendios()
{
  return "SISTEMA_CONTRA-INCENDIOS_C13L0";
}

function obtenerExtensionPorNombre($nombre)
{
  $partes = explode(".", $nombre);
  return $partes[sizeof($partes) - 1];
}

function calcularEdadActual($fechaNacimientoAMD)
{
  $birthDate = $fechaNacimientoAMD;
  $currentDate = date("Y-m-d");
  $age = date_diff(date_create($birthDate), date_create($currentDate));
  echo "" . $age->format("%y");
}

function calcularEdadFechas($fechaNacimientoAMD, $fechaHasta)
{
  $birthDate = $fechaNacimientoAMD;
  $currentDate = $fechaHasta;
  $age = date_diff(date_create($birthDate), date_create($currentDate));
  echo "" . $age->format("%y");
}
