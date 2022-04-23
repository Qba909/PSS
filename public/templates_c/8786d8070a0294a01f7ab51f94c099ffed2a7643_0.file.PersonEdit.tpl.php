<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-04 15:00:53
  from 'C:\xampp\htdocs\PSS\app\views\PersonEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_624aec057b83a8_55357389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8786d8070a0294a01f7ab51f94c099ffed2a7643' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\app\\views\\PersonEdit.tpl',
      1 => 1649077237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624aec057b83a8_55357389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3886591624aec057b1e58_24153211', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_3886591624aec057b1e58_24153211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_3886591624aec057b1e58_24153211',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="name">login</label>
            <input id="name" type="text" placeholder="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
        </div>
		<div class="pure-control-group">
            <label for="surname">haslo</label>
            <input id="surname" type="text" placeholder="passwd" name="passwd" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->passwd;?>
">
        </div>
		<div class="pure-control-group">
            <label for="birthdate">adres</label>
            <input id="birthdate" type="text" placeholder="address" name="address" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->address;?>
">
        </div>
                <div class="pure-control-group">
            <label for="birthdate">telefon</label>
            <input id="birthdate" type="text" placeholder="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
