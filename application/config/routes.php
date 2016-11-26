<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Desarrollo Web
$route['desarrollo-web'] = 'desarrolloweb/index';
$route['desarrollo-web/rediseno'] = 'desarrolloweb/rediseno';
$route['desarrollo-web/webinformativa'] = 'desarrolloweb/webinformativa';
$route['desarrollo-web/mejorsolucion'] = 'desarrolloweb/mejorsolucion';

// Branding
$route['branding'] = 'branding/index';
$route['branding/diseno-de-marcas-y-logotipos'] = 'branding/disenomarca';
$route['branding/identidad-corporativa'] = 'branding/icorp';
$route['branding/estrategia-corporativa'] = 'branding/ecorp';

// Ecommerce

$route['ecommerce'] = 'ecommerce/index';
$route['ecommerce/plan-basico'] = 'ecommerce/pbasico';
$route['ecommerce/plan-premium'] = 'ecommerce/ppremium';
$route['ecommerce/plan-exclusivo'] = 'ecommerce/pexclusivo';

// Merchandising
$route['merchandising'] = 'merchandising/index';




$route['contacto'] = 'paginas/contacto'; //contacto
$route['nosotros'] = 'paginas/nosotros'; //nosotros


$route['servicios'] = 'servicios/index';
$route['servicios/(:any)'] = 'servicios/view/$1';

$route['default_controller'] = 'home';

//$route['(:any)'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
