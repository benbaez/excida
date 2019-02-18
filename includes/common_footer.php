<?php

if (defined('COPYRIGHT_LICENSE')) {
	$license = COPYRIGHT_LICENSE;
	$license_string = str_split($license);

	if (is_array($license_string)) {
		$start = 1;
		$new_license = '';

		foreach ($license_string as $str) {
			if (($start % 2) == 0) {
				if (strlen($new_license) < 32) {
					$new_license .= $str;
				}
			}
			++$start;
		}
	}

	$domain = str_replace('www.', '', $_SERVER['SERVER_NAME']);

	if ($new_license != strtoupper(md5($domain))) {
		echo "\n" . '        <div style="width:100%;text-align:center;">' . "\n" . '        Powered by <a href="http://www.realtyscript.com" target="_blank">RealtyScript v' . VERSION . '</a>' . "\n" . '        </div>' . "\n" . '        ';
	}
}

?>
