<?php

if (!defined('WT_WEBTREES')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class digitalestamboom_plugin extends research_base_plugin {
	static function getName() {
		return 'Digitale Stamboom';
	}

	static function create_link($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return $link = 'http://www.digitalestamboom.nl/search.aspx?lang=nl&verder=' . str_replace('%20', '+', $givn . urlencode('||') . $prefix . urlencode('|') . $surn);
	}

	static function create_sublink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return false;
	}
}