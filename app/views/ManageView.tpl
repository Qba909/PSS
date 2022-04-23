{extends file="main.tpl"}

{block name=top}
    
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
{foreach $confirm as $wiersz}
{strip}
	<tr>
		<td>{$wiersz["id"]}</td>
		<td>{$wiersz["user_id"]}</td>
		<td>{$wiersz["pizza_id"]}</td>
                <td>{$wiersz["count"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}accept/{$wiersz['id']}">Akceptuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}reject/{$wiersz['id']}">Odrzuć</a>
		</td>
	</tr>
{/strip}
{/foreach}
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
{foreach $todo as $wiersz}
{strip}
	<tr>
		<td>{$wiersz["id"]}</td>
		<td>{$wiersz["user_id"]}</td>
		<td>{$wiersz["pizza_id"]}</td>
                <td>{$wiersz["count"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}done/{$wiersz['id']}">Akceptuj</a>
		</td>
	</tr>
{/strip}
{/foreach}
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
{foreach $send as $wiersz}
{strip}
	<tr>
		<td>{$wiersz["id"]}</td>
		<td>{$wiersz["user_id"]}</td>
		<td>{$wiersz["pizza_id"]}</td>
                <td>{$wiersz["count"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}paid/{$wiersz['id']}">Akceptuj</a>
		</td>
	</tr>
{/strip}
{/foreach}
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
{foreach $archive as $wiersz}
{strip}
	<tr>
		<td>{$wiersz["id"]}</td>
		<td>{$wiersz["user_id"]}</td>
		<td>{$wiersz["pizza_id"]}</td>
                <td>{$wiersz["count"]}</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>       

{/block}
