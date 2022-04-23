{extends file="main.tpl"}

{block name=top}

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Nazwa Pizzy</th>
		<th>Ilość</th>
	</tr>
</thead>
<tbody>
{foreach $lista as $wiersz}
{strip}
	<tr>
		<td>{$wiersz["name"]}</td>
		<td>
			<input class="item" type="number" min="0" max="9" value="0" name="{$wiersz['id']}" required/>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
<a href="{$conf->action_root}ordered" type="submit" class="pure-menu-heading pure-menu-link">Potwierdź zamówienie</a>
        
        
{/block}