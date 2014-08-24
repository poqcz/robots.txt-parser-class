<?php
	use RobotsTxtParser\RobotsTxtParser;
// load file
	require_once(__DIR__ . '/../src/RobotsTxtParser.php');

	// prepare sample data
	$data = "
		User-Agent: *
		Disallow:
		Disallow: /foo
		Disallow: /bar
	";

	// init parser
	$parser = new RobotsTxtParser($data);

	// do assertions
	assert(!$parser->isDisallowed("/peanuts"));
	assert($parser->isDisallowed("/foo"));

	echo "OK\n";