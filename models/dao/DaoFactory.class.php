<?php

class DaoFactory {
	function getDaoFactory($type) {
		switch ($type) {
			case ORACLE: return new OracleDaoFactory();
		}
	}
}
?>