<?php
/* Smarty version 4.5.1, created on 2024-05-06 15:52:49
  from 'C:\xampp\htdocs\07_bd\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6638e0b17049d5_29012566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f03b49210149def82940e980e503d10289175733' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07_bd\\app\\views\\CalcView.tpl',
      1 => 1713537866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638e0b17049d5_29012566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9971701606638e0b16f0011_37824721', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033205996638e0b16f1522_81222702', 'result');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11665786476638e0b17016e9_28107942', 'content');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_9971701606638e0b16f0011_37824721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9971701606638e0b16f0011_37824721',
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
class Block_2033205996638e0b16f1522_81222702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_2033205996638e0b16f1522_81222702',
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
<!--result-->
    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->monthlyPayment))) {?>
        <div class="wrapper style3">
            <h3>Miesięczna rata: <?php echo $_smarty_tpl->tpl_vars['res']->value->monthlyPayment;?>
 zł</h3>
        </div>
    <?php }
}
}
/* {/block 'result'} */
/* {block 'content'} */
class Block_11665786476638e0b17016e9_28107942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11665786476638e0b17016e9_28107942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<article id="form" class="wrapper style4">
    <div class="container medium">
        <header>
            <h2>Oblicz miesięczną ratę kredytu</h2>
        </header>
        <div class="row">
            <div class="col-12">
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
                    <div class="row">
                        <div class="col-6 col-12-small">
                            <input type="text" name="amount" id="amount" placeholder="Kwota [zł]" />
                        </div>
                        <div class="col-6 col-12-small">
                            <input type="text" name="years" id="years" placeholder="Ilość lat" />
                        </div>
                        <div class="col-12">
                            <input type="text" name="percent" id="percent" placeholder="Oprocentowanie w skali roku [%]" />
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Oblicz ratę" /></li>
                                <li><input type="reset" value="Wyczyść" class="alt" /></li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <h4>użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</h4>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="fa-button">wyloguj</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</article>
<?php
}
}
/* {/block 'content'} */
}
