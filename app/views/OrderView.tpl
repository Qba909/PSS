{extends file="main.tpl"}

{block name=top}
         
        <form method="post" class="pure-form pure-form-aligned bottom-margin">
	<fieldset>
        {foreach $lista as $wiersz}
        <div class="pure-control-group" >
                <label for="aligned-foo">{$wiersz['name']}</label>
                <input class="item" type="number" min="0" max="9" value="0" name="{$wiersz['id']}" required/>
	</div>
        {/foreach}
	</fieldset>
        <a href="{$conf->action_root}ordered" type="submit" class="pure-menu-heading pure-menu-link">Potwierdź zamówienie</a>
</form>	
{/block}
