<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Api Keys
	|--------------------------------------------------------------------------
	|
	| Generate your keys at https://app.zencoder.com/api
	|
	| apiKey:
	| - Full Access API Keys allow complete access to the API.
	|   You can create multiple API Keys for different applications, users, etc.
	|
	| integrationModeApiKey:
	| - Integration-only API keys will only create test jobs;
	|   they act as if your account is in Integration Mode.
	|
	*/
	'apiKey'                => 'a3046c9e9e91a9c08d36a5dcda048620',
	'integrationModeApiKey' => '35a2ad6d6487052eaa5b24147ec86da1',

	/*
	|--------------------------------------------------------------------------
	| Integration Model
	|--------------------------------------------------------------------------
	|
	| If set to true we will use the integration mode api key
	|
	*/
	'integrationMode'       => false,

	/*
	|--------------------------------------------------------------------------
	| Api Details
	|--------------------------------------------------------------------------
	|
	| You shouldn't need to change these, but just in case you want to you can
	|
	*/
	'apiVersion'            => 'v2',
	'apiHost'               => 'https://app.zencoder.com',
	'apiDebug'              => false,

	/*
	|--------------------------------------------------------------------------
	| Fetcher configuration
	|--------------------------------------------------------------------------
	|
	| These are for the zencoder:notifications command
	|
	*/

	'receivingUrl'          => url()
];
