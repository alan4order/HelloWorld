<?php
	$output = shell_exec('git');
	echo '<pre>' . $output . '</pre>';