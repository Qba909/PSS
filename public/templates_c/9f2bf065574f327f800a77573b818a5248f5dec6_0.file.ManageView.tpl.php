<?php
/* Smarty version 3.1.34-dev-7, created on 2022-03-13 23:01:04
  from 'C:\xampp\htdocs\PSS\app\views\ManageView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_622e69a09476f6_26817692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f2bf065574f327f800a77573b818a5248f5dec6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\app\\views\\ManageView.tpl',
      1 => 1647208863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622e69a09476f6_26817692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1469463220622e69a0933243_60146822', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1469463220622e69a0933243_60146822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1469463220622e69a0933243_60146822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div class="pure-g">
	<div class="pure-u-1-5"></div>
	<div class="pure-u-3-5">
		<h1>Zamówienia</h1>
		<h4>Do akceptacji</h4>
                
                <form method="post" class="pure-form pure-form-aligned bottom-margin">
                <fieldset>
                    
                    <div class="pure-control-group" >
                    </div>
                    
                </fieldset>
                </form>	
                
                <form method="post" class="pure-form pure-form-aligned bottom-margin">
                <fieldset>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirm']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
                <tr>
                    <div class="pure-control-group" >
                    href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
accept/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
" class="pure-menu-heading pure-menu-link">Zatwierdź
                    Id Zamówienia_<?php echo $_smarty_tpl->tpl_vars['wiersz']->value["id"];?>

                    Id Klineta_<?php echo $_smarty_tpl->tpl_vars['wiersz']->value["user_id"];?>

                    Id Pizzy_<?php echo $_smarty_tpl->tpl_vars['wiersz']->value["pizza_id"];?>

                    Ile<?php echo $_smarty_tpl->tpl_vars['wiersz']->value["count"];?>

                    href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reject/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
" class="pure-menu-heading pure-menu-link">Anuluj
                    </div>
                    
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
			
		<h4>W przygotowaniu</h4>
                <table cellpadding="5">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todo']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
                <tr>
                  <td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
done/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
" class="pure-menu-heading pure-menu-link">Gotowa</a></td>
                    <td><p>Id Zamówienia</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["id"];?>
</td>
                    <td><p>Id Klineta</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["user_id"];?>
</td>
                    <td><p>Id Pizzy</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["pizza_id"];?>
</td>
                    <td><p>Ile</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["count"];?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
			
		<h4>Wysłane do Klienta</h4>
                <table cellpadding="5">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['send']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
                <tr>
                  <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
paid/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
" class="pure-menu-heading pure-menu-link">Dostarczona</a></td>
                    <td><p>Id Zamówienia</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["id"];?>
</td>
                    <td><p>Id Klineta</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["user_id"];?>
</td>
                    <td><p>Id Pizzy</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["pizza_id"];?>
</td>
                    <td><p>Ile</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["count"];?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
			
		<h4>Wykonane</h4>
                <table cellpadding="5">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['archive']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
                <tr>
                    <td><p>Id Zamówienia</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["id"];?>
</td>
                    <td><p>Id Klineta</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["user_id"];?>
</td>
                    <td><p>Id Pizzy</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["pizza_id"];?>
</td>
                    <td><p>Ile</p><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["count"];?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
             
	</div>
	<div class="pure-u-1-5"></div>
</div>
<?php
}
}
/* {/block 'top'} */
}
