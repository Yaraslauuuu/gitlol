<?php
/* Smarty version 4.5.1, created on 2024-05-06 15:51:12
  from 'C:\xampp\htdocs\06_logowanie_routing\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6638e0500fc042_64475627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e078fbfe6a55e6b8d948d39fe4e6ff9efbf855a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06_logowanie_routing\\app\\views\\templates\\main.tpl',
      1 => 1715003470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638e0500fc042_64475627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
</head>
<body class="is-preload">

<!-- Nav -->
<nav id="nav">
    <ul class="container">
        <li><a href="#top">Góra strony</a></li>
        <li><a href="#form">Dół strony</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow">Kalkulator</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
result">Lista kredytów</a></li>
    </ul>
</nav>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13898757756638e0500f5402_05746397', 'result');
?>

<!-- top -->
<article id="top" class="wrapper style2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-12-large col-12-medium">
                <header>
                    <h1>To jest <strong><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Domyślnie" ?? null : $tmp);?>
</strong>.</h1>
                </header>
                <p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
            </div>
        </div>
    </div>
</article>

<article id="bg-image" class="wrapper style1"></article>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_993108096638e0500f8772_76163102', 'content');
?>


<article id="footer" class="wrapper style4 footer">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15428059066638e0500f9436_78402281', 'footer');
?>

</article>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'result'} */
class Block_13898757756638e0500f5402_05746397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_13898757756638e0500f5402_05746397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'result'} */
/* {block 'content'} */
class Block_993108096638e0500f8772_76163102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_993108096638e0500f8772_76163102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_15428059066638e0500f9436_78402281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15428059066638e0500f9436_78402281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
