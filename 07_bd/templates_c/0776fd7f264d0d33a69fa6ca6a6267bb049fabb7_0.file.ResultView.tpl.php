<?php
/* Smarty version 4.5.1, created on 2024-05-06 15:44:27
  from 'C:\xampp\htdocs\06_logowanie_routing\app\views\ResultView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6638debb99d520_35135258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0776fd7f264d0d33a69fa6ca6a6267bb049fabb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06_logowanie_routing\\app\\views\\ResultView.tpl',
      1 => 1715003066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638debb99d520_35135258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16363706956638debb98ba96_97748882', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17823880186638debb98c8b0_97217605', 'result');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5458664646638debb998a20_70648078', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_16363706956638debb98ba96_97748882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16363706956638debb98ba96_97748882',
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
class Block_17823880186638debb98c8b0_97217605 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_17823880186638debb98c8b0_97217605',
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
class Block_5458664646638debb998a20_70648078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5458664646638debb998a20_70648078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="form" class="wrapper style4">
        <table id="tab_result" class="pure-table pure-table-bordered">
            <thead>
            <tr>
                <th>kwota</th>
                <th>lata</th>
                <th>procent</th>
                <th>miesięczna rata</th>
                <th>data</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["lata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["procent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["miesieczna_rata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["data"];?>
</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </article>
<?php
}
}
/* {/block 'content'} */
}
