<?php
/* Smarty version 4.5.1, created on 2024-05-06 15:52:42
  from 'C:\xampp\htdocs\07_bd\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6638e0aaed39f0_48418954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6af670697671ddda0b54e77449a8e333ec2b100' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07_bd\\app\\views\\LoginView.tpl',
      1 => 1713537866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638e0aaed39f0_48418954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8301749056638e0aaec5674_89966258', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3898477196638e0aaec6421_93011202', 'result');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1182142506638e0aaed2986_35613420', 'content');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_8301749056638e0aaec5674_89966258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8301749056638e0aaec5674_89966258',
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
class Block_3898477196638e0aaec6421_93011202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_3898477196638e0aaec6421_93011202',
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
class Block_1182142506638e0aaed2986_35613420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1182142506638e0aaed2986_35613420',
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
