<?php
/* Smarty version 4.5.1, created on 2024-05-06 15:52:52
  from 'C:\xampp\htdocs\07_bd\app\views\ResultView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6638e0b47d43a4_87478634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75dbcd378e900a30cea5da6d9f59e1dc6ec51741' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07_bd\\app\\views\\ResultView.tpl',
      1 => 1715003066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638e0b47d43a4_87478634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1323134436638e0b47c3ee0_60163848', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11152645946638e0b47c4b68_01279349', 'result');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5852401376638e0b47d0255_46700786', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1323134436638e0b47c3ee0_60163848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1323134436638e0b47c3ee0_60163848',
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
class Block_11152645946638e0b47c4b68_01279349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_11152645946638e0b47c4b68_01279349',
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
class Block_5852401376638e0b47d0255_46700786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5852401376638e0b47d0255_46700786',
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
