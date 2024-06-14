<?php
/* Smarty version 4.5.1, created on 2024-05-06 15:23:15
  from 'C:\xampp\htdocs\06_logowanie_routing\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6638d9c3c2e6f7_56927620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d83307fb8b98df82476d5d8db497920a67e44f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06_logowanie_routing\\app\\views\\LoginView.tpl',
      1 => 1713537866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638d9c3c2e6f7_56927620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9244281816638d9c3c1dbf7_77368482', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18653501136638d9c3c1f023_49306981', 'result');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18011175346638d9c3c2d737_80331045', 'content');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_9244281816638d9c3c1dbf7_77368482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9244281816638d9c3c1dbf7_77368482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer>
        <ul id="copyright">
            <li>Tekst w stópce itp</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>
<?php
}
}
/* {/block 'footer'} */
/* {block 'result'} */
class Block_18653501136638d9c3c1f023_49306981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_18653501136638d9c3c1f023_49306981',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--errors-->
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <div class="wrapper style5">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                <h4><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h4>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

<?php
}
}
/* {/block 'result'} */
/* {block 'content'} */
class Block_18011175346638d9c3c2d737_80331045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18011175346638d9c3c2d737_80331045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="form" class="wrapper style4">
        <div class="container medium">
            <header>
                <h2>Okno logowania</h2>
            </header>
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
                        <legend>Logowanie do systemu</legend>
                        <fieldset>
                            <div class="col-12">
                                <label for="id_login">Login: </label>
                                <input id="id_login" type="text" name="login"/>
                            </div>
                            <div class="col-12">
                                <label for="id_pass">Hasło: </label>
                                <input id="id_pass" type="password" name="pass" /><br />
                            </div>
                            <div class="col-12">
                                <input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
    </article>
<?php
}
}
/* {/block 'content'} */
}
