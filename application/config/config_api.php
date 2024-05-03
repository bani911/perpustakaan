<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| URL API Odoo (Localhost, Staging & Production)
|--------------------------------------------------------------------------
|
| WARNING: You MUST set this value! => If it is not set, then Apps will Error!
|
*/

/*
|--------------------------------------------------------------------------
| API LOCALHOST Odoo
|--------------------------------------------------------------------------
*/

$config['api'] = array (
    'key'                 => 'xxxxxxxxxxxxxxxxx',
    'get_plant'           => 'http://localhost:8080/apivss/plant'
    );



/*
|--------------------------------------------------------------------------
| API STAGING Odoo
|--------------------------------------------------------------------------
*/

// $config['api'] = array (
//     'key'                 => 'xxxxxxxxxxxxxxxxx',
//     'get_plant'           => 'https://rmcix.adhimix.web.id/apivss/plant'
//     );