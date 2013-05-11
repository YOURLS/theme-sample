<?php

/**
 * Options
 * 
 * - $minify Minify the code output
 * - $file_name Name of the output file (default: theme name)
 */
$minify = true;
$file_name = basename( dirname( dirname( dirname( __FILE__ ) ) ) );


/**
 * Core functions 
 */
require "lessc.inc.php";
$less = new lessc;

if( $minify ) {
    $less->setFormatter( "compressed" );
    $file_name .= ".min";
}

try {
    $less->compileFile( "yourls.less", "../$file_name.css" );
} catch (exception $e) {
    echo "Fatal Error: " . $e->getMessage();
    die();
}
echo "<body style=\"margin: 10%; font-family: sans-serif;\"><h2>Your Own Style compilation done!</h2><p>Check <code>css/$file_name.css</code>.</p></body>";
