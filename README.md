# akvaduino

TODO text od Lukáše

## Popis komunikace

TODO Stavový diagram (je třeba?)

### Request / response


<table>
	<thead>
		<tr><th>REQUEST</th><th>Popis</th><th>Návratové kódy</th></tr>
	</thead>
	<tbody>
		<tr><th>GET /</th><td>Podle cookie vráti buď login nebo přesměruje na settings.</td><td>200,301</td></tr>
		<tr><th>GET /settings.html</th><td>Podle cookie vráti buď settings nebo přesměruje na login.</td><td>200,301</td></tr>
		<tr><th>GET /values</th><td>Podle cookie vrací buď seznam hodnot ze zařízení nebo nic.</td><td>200,403</td></tr>
		<tr><th>POST /login</th><td>V případě úspěchu nastaví cookie a přesměruje na settings, při neúspěchu přesměruje znovu na login</td><td>301</td></tr>
		<tr><th>POST /values</th><td>Nastaví hodnoty</td><td>200,403</td></tr>
		<tr><th>jinak</th><td>Stránka neexistuje</td><td>404</td></tr>
	</tbody>
</table>

## Login 

## Proměnné

<table>
	<thead>
		<tr><th>Jméno</th><th>Příklad</th><th>Popis</th></tr>
	</thead>
	<tbody>
		<tr><th>rgbR</th><td>255</td><td>int, 0..255, Červená LED</td></tr>
		<tr><th>rgbG</th><td>32</td><td>int, 0..255, Modrá LED</td></tr>
		<tr><th>rgbB</th><td>130</td><td>int, 0..255, Zelená LED</td></tr>
	</tbody>
</table>

## Testovací server

Testovací server v index.php a .htaccess umožňují testovat program.
