{extends file="main.tpl"}

{block name=top}
        <div class="pure-g">
	<div class="pure-u-1-5"></div>
	<div class="pure-u-3-5">
        <table cellpadding="5">
        {foreach $lista as $wiersz}
        <tr>
          <td>
              <label for="aligned-foo">{$wiersz['name']}</label>
              <input class="item" type="number" min="0" max="9" value="0" name="{$wiersz['id']}" required/>
          </td>
        </tr>
        {/foreach}
        </table>
        <a href="{$conf->action_root}ordered" type="submit" class="pure-menu-heading pure-menu-link">Potwierdź zamówienie</a>
        </div>
	<div class="pure-u-1-5"></div>
        </div>
{/block}
