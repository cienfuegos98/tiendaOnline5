<?php
/* Smarty version 3.1.33, created on 2019-02-14 09:40:22
  from '/var/www/tiendaOnline5/template/sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c652976034072_92512913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb30a24aedeb91297e0efe53917894ce97a1e84' => 
    array (
      0 => '/var/www/tiendaOnline5/template/sitio.tpl',
      1 => 1550133561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c652976034072_92512913 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos con Plantillas</title>
        <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
    </head>
    <body class="pagproductos">
        <div id="contenedor">
            
                <div id=""contenedor>
                    <div id="cesta">
                        <div class="pagcesta">
                            <h3><img class="carrito" src="estilos/carrito.png" alt="Cesta" width="24" height="21"> Cesta</h3>
                            <hr/>
                             <?php echo $_smarty_tpl->tpl_vars['addProducto']->value;?>

                            <hr />
                            <form action='sitio.php' method ='post'>
                                <input class='cestaAccion1' type='submit' src='pagar.png' name='accion' value='Pagar'>
                                <input class='cestaAccion2' type='submit' src='vaciarTodo.png' name='accion' value='Vaciar'>
                            </form>
                        </div>
                    </div>
                </div>
                             <div id="encabezado">
                <h1>Listado de Productos</h1>
            </div>
                        <div id=""contenedor>
                <div id="productos">
                    <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

                </div>
                </div>
                 <br class="divisor" />
             <div id="pie">
                <form action="login.php" method="post">
                    <input type="submit" name="desconectar" value="Desconectar">
                </form>        
            </div>
        </div>
    </body>
</html><?php }
}
