{extends file="main.tpl"}

{block name=top}
    
    <div class="pure-g">
	<div class="pure-u-1-5"></div>
	<div class="pure-u-3-5">
		<h1>Zamówienia</h1>
		<h4>Do akceptacji</h4>
                <table cellpadding="5">
                {foreach $confirm as $wiersz}
                <tr>
                    <td><a href="{$conf->action_root}accept/{$wiersz['id']}" class="pure-menu-heading pure-menu-link">Zatwierdź</a></td>
                    <td><p>Id Zamówienia_</p>{$wiersz["id"]}</td>
                    <td><p>Id Klineta_</p>{$wiersz["user_id"]}</td>
                    <td><p>Id Pizzy_</p>{$wiersz["pizza_id"]}</td>
                    <td><p>Ile</p>{$wiersz["count"]}</td>
                    <td><a href="{$conf->action_root}reject/{$wiersz['id']}" class="pure-menu-heading pure-menu-link">Anuluj</a></td>
                </tr>
                {/foreach}
                </table>
			
		<h4>W przygotowaniu</h4>
                <table cellpadding="5">
                {foreach $todo as $wiersz}
                <tr>
                  <td>
                    <td><a href="{$conf->action_root}done/{$wiersz['id']}" class="pure-menu-heading pure-menu-link">Gotowa</a></td>
                    <td><p>Id Zamówienia</p>{$wiersz["id"]}</td>
                    <td><p>Id Klineta</p>{$wiersz["user_id"]}</td>
                    <td><p>Id Pizzy</p>{$wiersz["pizza_id"]}</td>
                    <td><p>Ile</p>{$wiersz["count"]}</td>
                </tr>
                {/foreach}
                </table>
			
		<h4>Wysłane do Klienta</h4>
                <table cellpadding="5">
                {foreach $send as $wiersz}
                <tr>
                  <td><a href="{$conf->action_root}paid/{$wiersz['id']}" class="pure-menu-heading pure-menu-link">Dostarczona</a></td>
                    <td><p>Id Zamówienia</p>{$wiersz["id"]}</td>
                    <td><p>Id Klineta</p>{$wiersz["user_id"]}</td>
                    <td><p>Id Pizzy</p>{$wiersz["pizza_id"]}</td>
                    <td><p>Ile</p>{$wiersz["count"]}</td>
                </tr>
                {/foreach}
                </table>
			
		<h4>Wykonane</h4>
                <table cellpadding="5">
                {foreach $archive as $wiersz}
                <tr>
                    <td><p>Id Zamówienia</p>{$wiersz["id"]}</td>
                    <td><p>Id Klineta</p>{$wiersz["user_id"]}</td>
                    <td><p>Id Pizzy</p>{$wiersz["pizza_id"]}</td>
                    <td><p>Ile</p>{$wiersz["count"]}</td>
                </tr>
                {/foreach}
                </table>
             
	</div>
	<div class="pure-u-1-5"></div>
</div>


{/block}
