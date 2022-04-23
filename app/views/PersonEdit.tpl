{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="name">login</label>
            <input id="name" type="text" placeholder="login" name="login" value="{$form->login}">
        </div>
		<div class="pure-control-group">
            <label for="surname">haslo</label>
            <input id="surname" type="text" placeholder="passwd" name="passwd" value="{$form->passwd}">
        </div>
		<div class="pure-control-group">
            <label for="birthdate">adres</label>
            <input id="birthdate" type="text" placeholder="address" name="address" value="{$form->address}">
        </div>
                <div class="pure-control-group">
            <label for="birthdate">telefon</label>
            <input id="birthdate" type="text" placeholder="phone" name="phone" value="{$form->phone}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>

{/block}
