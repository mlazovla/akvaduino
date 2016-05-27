# akvaduino

TODO text od Lukáše

## Popis komunikace

Proměnné se předávají v pořadí, jak popisuje tabulka.

### Request / response

<table>
	<thead>
		<tr><th>REQUEST</th><th>Popis</th><th>Návratové kódy</th></tr>
	</thead>
	<tbody>
		<tr><th>GET /</th><td>Podle cookie vráti buď login nebo přesměruje na settings.</td><td>200,302</td></tr>
		<tr><th>GET /settings.html</th><td>Podle cookie vráti buď settings nebo přesměruje na login.</td><td>200,302</td></tr>
		<tr><th>GET /values</th><td>Podle cookie vrací buď seznam hodnot ze zařízení nebo nic.</td><td>200,403</td></tr>
		<tr><th>POST /login</th><td>V případě úspěchu nastaví cookie a přesměruje na settings, při nepřihlášení přesměruje znovu na login, při neúspěchu vrátí chybu</td><td>200,302,400</td></tr>
		<tr><th>POST /values</th><td>Nastaví hodnoty</td><td>200,403</td></tr>
		<tr><th>GET /history</th><td>Vrátí soubor naměřených hodnot</td><td>200,403</td></tr>
		<tr><th>jinak</th><td>Stránka neexistuje</td><td>404</td></tr>
	</tbody>
</table>

## Login 

Přihlášení do Akvaduino je zařízeno pouze pomocí hesla na zvolené IP adrese. Heslo je uvedeno na schránce, ve které je umístěno zařízení.

## Proměnné

### Proměnné ke stažení (GET)

<table>
	<thead>
		<tr><th>Jméno</th><th>Příklad</th><th>Popis</th></tr>
	</thead>
	<tbody>
		<tr><th>sunsetHour</th><td>5</td><td>int, 0..23, vychod slunce hodina</td></tr>
		<tr><th>sunsetMinute</th><td>55</td><td>int, 0..59, vychod slunce minuta</td></tr>
		<tr><th>sunriseHour</th><td>20</td><td>int, 0..23, zapad slunce hodina</td></tr>
		<tr><th>sunriseMinute</th><td>30</td><td>int, 0..59, zapad slunce minuta</td></tr>
		<tr><th>moonsetHour</th><td>21</td><td>int, 0..23, vychod mesice hodina</td></tr>
		<tr><th>moonsetMinute</th><td>00</td><td>int, 0..59, vychod mesice minuta</td></tr>
		<tr><th>moonriseHour</th><td>22</td><td>int, 0..23, zapad mesice hodina</td></tr>
		<tr><th>moonriseMinute</th><td>30</td><td>int, 0..59, zapad mesice minuta</td></tr>
		<tr><th>sunsetDelay</th><td>20</td><td>int, 0..59, delka vychodu slunce v minutach</td></tr>
		<tr><th>sunriseDelay</th><td>20</td><td>int, 0..59, delka zapadu slunce v minutach</td></tr>
		<tr><th>moonsetDelay</th><td>5</td><td>int, 0..59, delka vychodu mesice v minutach</td></tr>
		<tr><th>moonriseDelay</th><td>5</td><td>int, 0..59, delka zapadu mesice v minutach</td></tr>	
		<tr><th>second</th><td>30</td><td>int, 0..59, cteni RTC</td></tr>
		<tr><th>minute</th><td>30</td><td>int, 0..59, cteni RTC</td></tr>
		<tr><th>hour</th><td>12</td><td>int, 0..23, cteni RTC</td></tr>
		<tr><th>dayOfWeek</th><td>1</td><td>int, 1..7, cteni RTC, zacina v nedeli</td></tr>
		<tr><th>dayOfMonth</th><td>1</td><td>int, 1..31, cteni RTC</td></tr>
		<tr><th>month</th><td>1</td><td>int, 1..12, cteni RTC</td></tr>
		<tr><th>year</th><td>01</td><td>int, 01..99, cteni RTC</td></tr>
		<tr><th>dayCons</th><td>255</td><td>float, 0..INF, spotreba za den</td></tr>
		<tr><th>weekCons</th><td>255</td><td>float, 0..INF, spotreba za tyden</td></tr>
		<tr><th>monthCons</th><td>255</td><td>float, 0..INF, spotreba za mesic</td></tr>
		<tr><th>yearCons</th><td>255</td><td>float, 0..INF, spotreba za rok</td></tr>
		<tr><th>totalCons</th><td>255</td><td>float, 0..INF, spotreba celkem</td></tr>
		<tr><th>redCons</th><td>255</td><td>float, 0..INF, aktualni spotreba cervene LED</td></tr>
		<tr><th>greenCons</th><td>255</td><td>float, 0..INF, aktualni spotreba zelene LED</td></tr>
		<tr><th>blueCons</th><td>255</td><td>float, 0..INF, aktualni spotreba modre LED</td></tr>
		<tr><th>whiteCons</th><td>255</td><td>float, 0..INF, aktualni spotreba bile LED</td></tr>
		<tr><th>temperature</th><td>255</td><td>float, 0..INF, aktualni teplota</td></tr>
	</tbody>
</table>

### Proměnné k nastavení (POST)
<table>
	<thead>
		<tr><th>Jméno</th><th>Příklad</th><th>Popis</th></tr>
	</thead>
	<tbody>
		<tr><th>useManual</th><td>0</td><td>bool, 0..1, přepínání mezi auto/manual</td></tr>
		<tr><th>sunsetHour</th><td>5</td><td>int, 0..23, vychod slunce hodina</td></tr>
		<tr><th>sunsetMinute</th><td>55</td><td>int, 0..59, vychod slunce minuta</td></tr>
		<tr><th>sunriseHour</th><td>20</td><td>int, 0..23, zapad slunce hodina</td></tr>
		<tr><th>sunriseMinute</th><td>30</td><td>int, 0..59, zapad slunce minuta</td></tr>
		<tr><th>moonsetHour</th><td>21</td><td>int, 0..23, vychod mesice hodina</td></tr>
		<tr><th>moonsetMinute</th><td>00</td><td>int, 0..59, vychod mesice minuta</td></tr>
		<tr><th>moonriseHour</th><td>22</td><td>int, 0..23, zapad mesice hodina</td></tr>
		<tr><th>moonriseMinute</th><td>30</td><td>int, 0..59, zapad mesice minuta</td></tr>
		<tr><th>sunriseDelay</th><td>20</td><td>int, 0..59, delka vychodu slunce v minutach</td></tr>
		<tr><th>sunsetDelay</th><td>20</td><td>int, 0..59, delka zapadu slunce v minutach</td></tr>
		<tr><th>moonriseDelay</th><td>5</td><td>int, 0..59, delka vychodu mesice v minutach</td></tr>
		<tr><th>moonsetDelay</th><td>5</td><td>int, 0..59, delka zapadu mesice v minutach</td></tr>	
		<tr><th>secondSet</th><td>30</td><td>int, 0..59, nastaveni RTC</td></tr>
		<tr><th>minuteSet</th><td>30</td><td>int, 0..59, nastaveni RTC</td></tr>
		<tr><th>hourSet</th><td>12</td><td>int, 0..23, nastaveni RTC</td></tr>
		<tr><th>dayOfWeekSet</th><td>1</td><td>int, 1..7, nastaveni RTC</td></tr>
		<tr><th>dayOfMonthSet</th><td>1</td><td>int, 01..31, nastaveni RTC</td></tr>
		<tr><th>monthSet</th><td>1</td><td>int, 1..12, nastaveni RTC</td></tr>
		<tr><th>yearSet</th><td>01</td><td>int, 01..99, nastaveni RTC</td></tr>	
		<tr><th>manualR</th><td>130</td><td>int, 0..255, cervena LED manualni ovladani</td></tr>
		<tr><th>manualG</th><td>130</td><td>int, 0..255, zelena LED manualni ovladani</td></tr>
		<tr><th>manualB</th><td>130</td><td>int, 0..255, modra LED manualni ovladani</td></tr>
		<tr><th>manualW</th><td>130</td><td>int, 0..255, bila LED manualni ovladani</td></tr>
		
	</tbody>
</table>


## Testovací server

Testovací server (index.php a .htaccess) umožňují testovat program i bez přístupu k akvaduino.
