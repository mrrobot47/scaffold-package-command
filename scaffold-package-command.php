<?php

if ( ! class_exists( 'EE' ) ) {
	return;
}

$autoload = dirname( __FILE__ ) . '/vendor/autoload.php';
if ( file_exists( $autoload ) ) {
	require_once $autoload;
}

EE::add_command( 'scaffold package', array( 'EE\ScaffoldPackageCommand', 'package' ) );
EE::add_command( 'scaffold package-readme', array( 'EE\ScaffoldPackageCommand', 'package_readme' ) );
EE::add_command( 'scaffold package-tests', array( 'EE\ScaffoldPackageCommand', 'package_tests' ) );
EE::add_command( 'scaffold package-github', array( 'EE\ScaffoldPackageCommand', 'package_github' ) );
