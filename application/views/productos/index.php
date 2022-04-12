<script type="text/javascript">
    $(document).ready(function() {
        $("#menu-productos").addClass("active");
    });
</script>

<h1 class="titulo">Productos</h1>

<div class="row">
    <div class="col-md-12 text-right">
        <a href="<?php echo site_url('procesos/nuevo'); ?>" class="btn btn-principal btn-agregar">
            &nbsp;&nbsp;&nbsp;NUEVO&nbsp;&nbsp;<i class="fa fa-plus-circle"></i>&nbsp;&nbsp;
        </a>
    </div>
</div>
<br>


<div class="row">
    <div class="col-md-12">
        <table id="tablaProductos" class="table table-cielo table-hover tbl-buscador">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <!--<th class="text-center">PERIODO ACADÉMICO</th>-->
                    <th class="text-center">TIPO DE PROYECTO</th>
                    <th class="text-center">CONVENIO</th>
                    <!--<th class="text-center">DOCENTE TUTOR</th>-->
                    <th class="text-center">TEMA</th>
                    <th class="text-center">FECHA DE CREACIÓN</th>
                    <th class="text-center">FECHA DE ACTUALIZACIÓN</th>
                    <th class="text-center">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">2</td>
                    <td class="text-center">3</td>
                    <td class="text-center">4</td>
                    <td class="text-center">5</td>
                    <td class="text-center">6</td>
                    <td class="text-center">7</td>
                </tr>
            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                $('#tablaProductos').DataTable();
            });
        </script>
    </div>
</div>


</section>