<?php
  session_start();
	if(!isset($_COOKIE["PHPSESSID"])) {
	  session_start();
	};

	$cookie_time = 31556926;
	$defaultLanguage = 'en';	// Set default language
	$availableLanguages = array(	// Set available languages
			'ru' => array('ru','be','ky','ab','mo','et','lv'),
      'uk' => 'uk',
      'en' => 'en'
		);
	
	if(isset($path)) {
		$path = './';
	}
	else {
		$path = '../';
	};

	require_once($path.'languages/languages.php');	// Include languages file
	/* Detect user language */
	function getUserLanguage($availableLanguages, $defaultLanguage) {
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

	/* Check language */
	function checkLanguage($language, $availableLanguages) {
		return array_key_exists($language, $availableLanguages) ? true : false;
	};

	/* Detect language */
	function getLanguage($availableLanguages, $defaultLanguage) {
		if(isset($_POST['language'])) {
			if(checkLanguage($_POST['language'], $availableLanguages)) {
				return $_POST['language'];
			};
		};

		if(isset($_SESSION['language'])) {
			if(checkLanguage($_SESSION['language'], $availableLanguages)) {
				return $_SESSION['language'];
			};
		};

		if(isset($_COOKIE['language'])) {
			if(checkLanguage($_COOKIE['language'], $availableLanguages)) {
				return $_COOKIE['language'];
			};
		};

		return getUserLanguage($availableLanguages, $defaultLanguage);
	};

	/* Set language */
	function setLanguage($language, $cookie_time) {
		$_SESSION['language'] = $language;
		setcookie('language', $language, time() + $cookie_time, '/'); // Set cookie
	};

	/* Get language data */
	function getLanguagesData($languages) {
		if(isset($_POST['page'])) {
			$page = trim($_POST['page'], '/');
		};
		if(isset($languages[$page])) {
			$data[$page] = $languages[$page];
			$data['menu'] = $languages['menu'];
			$data['common'] = $languages['common'];
		}
		else {
			$data = $languages;
		};

		return $data;
	};

	/* Get single language data */
	function getSingleLanguageData($array, $language) {
    if(!is_array($array)) {
      return $array;
    }

  	if(count($array) == 3 && array_key_exists('en', $array) && array_key_exists('ru', $array) && array_key_exists('uk', $array)) {
  		return $array[$language];
  	};

  	$result = array();
    foreach ($array as $key => $value) {
    	$result[$key] = getSingleLanguageData($value, $language);
    };
    return $result;
	};

	$current_language = getLanguage($availableLanguages, $defaultLanguage);
	setLanguage($current_language, $cookie_time);

	$languages_data = getLanguagesData($languages);
	$language = getSingleLanguageData($languages_data, $current_language);

	if(isset($_POST['type']) && $_POST['type'] == 'ajax') {
		$responce = json_encode($language);
		echo $responce;
	};

?>