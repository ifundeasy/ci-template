<?php
/**
 * Created by IntelliJ IDEA.
 * User: rappresent
 * Date: 25/06/19
 * Time: 4.26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

function integer_format($value) {
	if (is_numeric($value)) {
		return number_format($value, 0, lang('dec_point'), lang('thousands_sep'));
	}

	return 0;
}

function decimal_format($value, $decimals = 2) {
	if (is_numeric($value)) {
		return number_format($value, $decimals, lang('dec_point'), lang('thousands_sep'));
	}

	return 0;
}

function color_sentiment($type) {
	switch ($type) {
		case 'positive' :
			return '#0000FF';
		case 'neutral' :
			return '#DDDDDD';
		case 'negative' :
			return '#FF0000';
		case 'like':
			return 'deepskyblue';
		case 'love':
			return 'deeppink';
		case 'haha':
			return 'green';
		case 'wow':
			return 'blue';
		case 'sad':
			return 'orange';
		case 'angry':
			return 'darkred';
	}
}

function truncate($str, $width = 50) {
	return strtok(wordwrap($str, $width, "...\n"), "\n");
}
