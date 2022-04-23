{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}personList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Login" name="sf_login" value="{$searchForm->login}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=bottom}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}personNew">+ Nowa osoba</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
                <th>id</th>
		<th>login</th>
		<th>haslo</th>
		<th>adres</th>
		<th>telefon</th>
	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr>
                <td>{$p["id"]}</td>
		<td>{$p["login"]}</td>
		<td>{$p["passwd"]}</td>
		<td>{$p["address"]}</td>
                <td>{$p["phone"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}personEdit/{$p['id']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}personDelete/{$p['id']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
