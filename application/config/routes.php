<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|   my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['welcome']                                   = 'welcome';

$route['auth/check']                                = 'auth/check';
$route['auth/login']                                = 'auth/login';

$route['account/change_password']                   = 'main/user_change_password';

$route['journals/categories']                       = 'journals/categories';
$route['journals/categories/(:num)']                = 'journals/categories/$1';
$route['journals/categories/all']                   = 'journals/categories/all';

$route['journals']                                  = 'journals/index';
$route['journals/status']                           = 'journals/status';
$route['journals/where_not_id/(:any)']              = 'journals/where_not_id/$1';
$route['journals/image/(:any)']                     = 'journals/image/$1';
$route['journals/description/(:any)']               = 'journals/description/$1';
$route['journals/image_content']                    = 'journals/image_content';            
$route['journals/status/(:any)']                    = 'journals/status/$1';
$route['journals/related/(:any)']                   = 'journals/related/$1';
$route['journals/trending']                         = 'journals/trending';
$route['journals/short_news/(:any)']                = 'journals/short_news/$1';
$route['journals/tags']                             = 'journals/tags';
$route['journal/(:any)']                            = 'journals/journal/$1';
$route['journal/detail/(:any)/(:any)/(:any)']       = 'journals/slug/$1/$2/$3';

$route['journals/insert-json']                      = 'journals/journal_json';
$route['journals/counter-view/(:any)']              = 'journals/counter_view/$1';

$route['journal/comments/(:any)']                   = 'journals/comments/$1';


$route['videos']                                    = 'video/index';
$route['videos/status']                             = 'video/status';   
$route['videos/status/(:any)']                      = 'video/status/$1';
$route['video/(:any)']                              = 'video/journal/$1';

$route['akerun/(:any)/(:any)']                      = 'akerun/index/$1/$2';
