<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-23 09:51:54
  from 'C:\xampp\htdocs\PSS\app\views\OrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6263b01a6db389_74150853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57551588dd0c2e0f07ac0594d65e8410253e2356' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\app\\views\\OrderView.tpl',
      1 => 1650700302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6263b01a6db389_74150853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10369940286263b01a6a6a26_88201294', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_10369940286263b01a6a6a26_88201294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_10369940286263b01a6a6a26_88201294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Nazwa Pizzy</th>
		<th>Ilość</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["name"];?>
</td><td><input class="item" type="number" min="0" max="9" value="0" name="<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
" required/></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ordered" type="submit" class="pure-menu-heading pure-menu-link">Potwierdź zamówienie</a>
        
        
<?php
}
}
/* {/block 'top'} */
}
