<?php

header('Content-Type: text/plain; charset=utf-8');
if (!isset($_GET['install']) || empty($_GET['install'])) die('Error unknown command' . PHP_EOL);

ini_set('max_execution_time', 120);
define('CURRENT_DIR', getcwd());
define('ZIP_FILE', CURRENT_DIR . '/' . basename($_GET['install'], '.zip') . '.zip');

if (!is_writable(CURRENT_DIR)) die('Error writing in: ' . CURRENT_DIR . PHP_EOL);

$zip = new ZipArchive;
if ($zip->open(ZIP_FILE) === true) {
	k_rmdir(CURRENT_DIR . '/site/templates/', true);

	echo 'Extracting: ' . ZIP_FILE . PHP_EOL;
	for ($i = 0; $i < $zip->numFiles; $i++) {
		$file = $zip->getNameIndex($i);
		echo $file . PHP_EOL;
		$zip->extractTo(CURRENT_DIR, array($file));
	}
	$zip->close();
	unlink(ZIP_FILE);
} else {
	die('Error opening: ' . ZIP_FILE . PHP_EOL);
}

echo 'Completed' . PHP_EOL;

function k_rmdir($path, $recursive = false) {
	if (!is_dir($path) || !strlen(trim($path, '/.'))) return false;
	if ($recursive) {
		$files = @scandir($path);
		if (is_array($files)) foreach ($files as $file) {
			if ($file == '.' || $file == '..') continue;
			$pathname = "$path/$file";
			if (is_dir($pathname)) {
				k_rmdir($pathname, true);
			} else {
				@unlink($pathname);
			}
		}
	}
	return @rmdir($path);
}
