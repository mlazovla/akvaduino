<?php
/**
	
	Akvaduino testing server

*/

// SETTINGS
const AKVADUINO_SECRET = "1234";
const AKVADUINO_PATH = "/akvaduino";
const AKVADUINO_FILES = "files/";

$path = isset($_GET["path"]) ? $_GET["path"] : "";

// PAGE - LOGIN
if ($path == "login") {

	// POST - přihlášení
	if (isset($_POST["secret"]) && $_POST["secret"] == AKVADUINO_SECRET) {
		// Nastaveni cookie
		setcookie('akvaduino', AKVADUINO_SECRET, time() + 84000);
		// Presmerovani do nastaveni
		redirect("/settings");
	} elseif (isset($_POST["secret"]) && $_POST["secret"] != AKVADUINO_SECRET) {
		echo "Spatne heslo.";
		exit;
	} 
	
	// GET - Smazání cookie (tj odhlaseni)
	else {	
		setcookie('akvaduino', null, 1);
		include(AKVADUINO_FILES."login.html");
	}	
}

// PAGE - běžný přístup
else if ($path == "" || $path == "settings") {
	// Uzivatel je prihlasen
	if (isLoggedIn()) {
		include(AKVADUINO_FILES."settings.html");
		exit;
	}

	// neni prihlasen
	else {
		header("Location: ".AKVADUINO_PATH."/login");
	}
} 

// PAGE - VALUES
else if ($path == "values") {
	// Uzivatel je prihlasen
	if (isLoggedIn()) {
		if (isset($_POST["values"])) {
			// ulozeni ci cokoliv s hodnotami
		} else {
			include(AKVADUINO_FILES."values");
			exit;
		}
	// uzivatel neni prihlasen - nic nedostane
	} else {
		exit;
	}
	
}

// PAGE - NOT FOUND
else {
	// stránka nenalezena
	http_response_code(404);
}


/**
 * Test prihlaseni uzivatele
 */
function isLoggedIn() {
	if (isset($_COOKIE["akvaduino"]) && $_COOKIE["akvaduino"] == AKVADUINO_SECRET) { 
		return true;
	} else {
		return false;
	}
}

/**
 * Presmerovani na jinou stranku
 * string $url
 * bool $pernament
 */
function redirect($url, $permanent = false)
{
    header('Location: ' . AKVADUINO_PATH . $url, true, $permanent ? 301 : 302);
    exit();
}

?>