<?php

/**
 * Enter description here...
 * @package lekoi.helper
 * @param unknown_type $dir
 */
function require_once_dir($dir) {
	if ($handle = opendir($dir)) {
		while (false !== ($file = readdir($handle))) {
			if (!is_dir($dir . '/' . $file)) {
				require_once($dir . '/' . $file);
			}
		}
		closedir($handle); 
	}
}
?>