<?php
  session_start();  // Start session
	$defaultLanguage = 'en';	// Set default language
	$availableLanguages = array(	// Set available languages
			'ru' => array('ru','be','ky','ab','mo','et','lv'),
      'uk' => 'uk',
      'en' => 'en'
		);
	$cookie_time = 31556926;
	
	if(!isset($path)) {
		$path = '/..';
	}
	require_once($path.'/languages/languages.php');	// Include languages file

	/* AJAX language switch */
	function getOneLanguage($array, $language) {
    if(!is_array($array)) {
      return $array;
    }

  	if(count($array) == 3 && array_key_exists('en', $array) && array_key_exists('ru', $array) && array_key_exists('uk', $array)) {
  		return $array[$language];
  	};

  	$result = array();
    foreach ($array as $key => $value) {
    	$result[$key] = getOneLanguage($value, $language);
    };
    return $result;
	};

	if(isset($_REQUEST['type']) && $_REQUEST['type'] == 'ajax') {
		session_start();
		$page = trim($_REQUEST['page'], '/');
		if(array_key_exists($_REQUEST['language'], $availableLanguages)) {	// check if the language is one we support
			$language = $_REQUEST['language'];
		}
		elseif($_SESSION['language'] == '') {
			$language = $_SESSION['language'];
		}
		else {
			$language = userLanguage($availableLanguages, $defaultLanguage);
		};
		$_SESSION['language'] = $_REQUEST['language']; // Set session
		setcookie("language", $_SESSION['language'], $cookie_time); // Set cookie

		$data['common'] = $languages['common'];
		$data['menu'] = $languages['menu'];
		if(isset($languages[$page])) {
			$data[$page] = $languages[$page];
		};
		$language_data = getOneLanguage($data, $language);
		$responce = json_encode($language_data);
		echo $responce;
		return;
	};

	/* Detect language */
	function userLanguage($availableLanguages, $defaultLanguage) {
		if(($userLanguages = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']))) {
			if(preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', $userLanguages, $userLanguages)) {
				$userLanguagesArray = array_combine($userLanguages[1], $userLanguages[2]);
				foreach ($userLanguagesArray as $key => $value) {
					$userLanguagesArray[$key] = $value ? $value : 1;
				}
				arsort($userLanguagesArray, SORT_NUMERIC);
			}
			else {
				$userLanguagesArray = array();
			};
			$languages = array();
			foreach($availableLanguages as $language => $alias) {
				if(is_array($alias)) {
					foreach($alias as $aliasLanguage) {
						$languages[strtolower($aliasLanguage)] = strtolower($language);
					};
				}
				else {
					$languages[strtolower($alias)] = strtolower($language);
				};
			};

			foreach($userLanguagesArray as $key => $value) {
				$strtoked = strtok($key, '-');
				if(isset($languages[$strtoked])) {
					return $languages[$strtoked];
				};
			};
			return $defaultLanguage;
		};
		return $defaultLanguage;
	};

	if(isset($_REQUEST['language']) && $_REQUEST['language'] != '') {
		if(array_key_exists($_REQUEST['language'], $availableLanguages)) {	// check if the language is one we support
			$_SESSION['language'] = $_REQUEST['language']; // Set session
			setcookie("language", $_SESSION['language'], time() + $cookie_time); // Set cookie
	setcookie("test", "test1", time() + $cookie_time); // Set cookie
		};
	};

	if($_SESSION['language'] == '' && $_COOKIE['language']!='') {
		if(array_key_exists($_COOKIE['language'], $availableLanguages)) {	// check if the language is one we support
			$_SESSION['language'] = $_COOKIE['language']; // Set session
		};
	};

	if($_SESSION['language'] == '') {	// Set our default language session ONLY if we've got nothing
		$userLanguage = userLanguage($availableLanguages, $defaultLanguage);
		$_SESSION['language'] = $userLanguage;
		setcookie("language", $userLanguage, time() + $cookie_time); // Set cookie
	setcookie("test", $_SESSION['language'], time() + $cookie_time); // Set cookie
	};
?>