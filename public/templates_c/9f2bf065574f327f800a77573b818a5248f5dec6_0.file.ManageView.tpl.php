<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-23 09:29:42
  from 'C:\xampp\htdocs\PSS\app\views\ManageView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6263aae6b84bb4_39785875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f2bf065574f327f800a77573b818a5248f5dec6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\app\\views\\ManageView.tpl',
      1 => 1650698974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6263aae6b84bb4_39785875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14906086516263aae6b4fea7_51695329', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_14906086516263aae6b4fea7_51695329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_14906086516263aae6b4fea7_51695329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
 <h1>Zamówienia</h1>   
 <h4>Do akceptacji</h4>   
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>ID_Zamówienia</th>
		<th>ID_Klienta</th>
		<th>ID_Pizzy</th>
		<th>Ilość</th>
                <th>Zatwierdzenia</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirm']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["user_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["pizza_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["count"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accept/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
">Akceptuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reject/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
">Odrzuć</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
    
 <h4>W przygotowaniu</h4>   
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>ID_Zamówienia</th>
		<th>ID_Klienta</th>
		<th>ID_Pizzy</th>
		<th>Ilość</th>
                <th>Zatwierdzenia</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todo']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["user_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["pizza_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["count"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
done/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
">Akceptuj</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
    
    
 <h4>Wysłane do Klienta</h4>   
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>ID_Zamówienia</th>
		<th>ID_Klienta</th>
		<th>ID_Pizzy</th>
		<th>Ilość</th>
                <th>Zatwierdzenia</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['send']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["user_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["pizza_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["count"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
paid/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
">Akceptuj</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>    
    
 <h4>Wykonane</h4>   
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>ID_Zamówienia</th>
		<th>ID_Klienta</th>
		<th>ID_Pizzy</th>
		<th>Ilość</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['archive']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["user_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["pizza_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["count"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>       

<?php
}
}
/* {/block 'top'} */
}
