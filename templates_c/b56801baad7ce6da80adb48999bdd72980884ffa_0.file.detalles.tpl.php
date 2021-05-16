<?php
/* Smarty version 3.1.39, created on 2021-05-16 04:38:11
  from 'C:\xampp\htdocs\WEB2\web2-TPE1\templates\detalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a08593004db9_09546304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b56801baad7ce6da80adb48999bdd72980884ffa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\web2-TPE1\\templates\\detalles.tpl',
      1 => 1621132690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60a08593004db9_09546304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>DETALLES</h1>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['botin']->value, 'bot');
$_smarty_tpl->tpl_vars['bot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bot']->value) {
$_smarty_tpl->tpl_vars['bot']->do_else = false;
?>
                            <ul>
                            <li> Modelo: <?php echo $_smarty_tpl->tpl_vars['bot']->value->modelo;?>
</li>
                            <li> Talle: <?php echo $_smarty_tpl->tpl_vars['bot']->value->talle;?>
</li>
                            <li> Tipo: <?php echo $_smarty_tpl->tpl_vars['bot']->value->tipo;?>
</li> 

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['bot']->value->id == $_smarty_tpl->tpl_vars['marca']->value->id_marca) {?>
                            <li> Marca: <?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</li>
                        <?php }?>
                            
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </ul>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
