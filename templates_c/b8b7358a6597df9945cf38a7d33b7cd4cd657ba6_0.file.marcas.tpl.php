<?php
/* Smarty version 3.1.39, created on 2021-05-16 03:46:30
  from 'C:\xampp\htdocs\WEB2\web2-TPE1\templates\marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a07976489038_26515425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8b7358a6597df9945cf38a7d33b7cd4cd657ba6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\web2-TPE1\\templates\\marcas.tpl',
      1 => 1621129571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60a07976489038_26515425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container">
        <div class="row justify-content-center ">
            <input type="number" id="id_posicion" placeholder="Posicion" class="shadow p-1  mx-1 my-1 bg-white rounded">
            <input type="text" id="id_nombre" placeholder="Equipo" class="shadow p-1 mx-1 my-1 bg-white rounded">
            <input type="number" id="id_puntos" placeholder="Puntos" class="shadow p-1 mx-1 my-1 bg-white rounded">



        </div>
        <div class="row justify-content-center">
            <button id="agregar" class="btn btn-outline-dark mx-1 my-1 ">
                Agregar
            </button>
            <button id="vaciar" class="btn btn-outline-dark mx-1 my-1">
                Vaciar
            </button>
            <select name="" id="filtrar">
                <option value="0">FUTBOL 5</option>
                <option value="1">CESPED</option>
            </select>
            <button id="botonFiltro" class="btn btn-outline-dark mx-1 my-1">
                Aplicar
            </button>
        </div>
    </div>



    </div>
    
    <table class="table w-50 mx-auto">
        <thead class="thead-dark">
            <tr id=> 
            
                <th scope="col" onclick="">NOMBRE</th> 
                <th scope="col" onclick="">PAIS DE ORIGEN</th>
                <th></th>
                <th></th>
            </tr>
            
        </thead>

        <tbody class="table mx-auto" id="tablaPosiciones">
            
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                            <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->paisOrigen;?>
</td>                
                            </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>

        
        <?php echo '<script'; ?>
 src="js/js.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
</div>

</body>

<?php echo '<script'; ?>
 src="js/jstabla.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/js.js"><?php echo '</script'; ?>
>

</html><?php }
}
