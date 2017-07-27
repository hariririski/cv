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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*-----------------------------------------------------------------------*/
$route['default_controller'] = 'Home';
$route['home'] = 'Home';
$route['kontak'] = 'kontak';
$route['login'] = 'login';
$route['logout'] = 'login/logout';


/*-----------------------------------------------------------------------*/


/*-----------------------------------------------------------------------*/
$route['biodata'] = 'biodata';
$route['data_biodata'] = 'biodata/data_biodata';
$route['tambah_biodata'] = 'biodata/tambah_biodata';
$route['edit_biodata'] = 'biodata/edit_biodata';
      /*-----------------------------------------------------------------------*/
$route['data_organisasi'] = 'biodata/data_organisasi';
$route['tambah_organisasi'] = 'biodata/tambah_organisasi';
$route['edit_organisasi'] = 'biodata/edit_organisasi';

      /*-----------------------------------------------------------------------*/
$route['data_pengalaman_kerja'] = 'biodata/data_pengalaman_kerja';
$route['tambah_pengalaman_kerja'] = 'biodata/tambah_pengalaman_kerja';
$route['edit_pengalaman_kerja'] = 'biodata/edit_pengalaman_kerja';

      /*-----------------------------------------------------------------------*/
$route['data_keahlian'] = 'biodata/data_keahlian';
$route['tambah_keahlian'] = 'biodata/tambah_keahlian';
$route['edit_keahlian'] = 'biodata/edit_keahlian';

/*-----------------------------------------------------------------------*/
$route['aplikasi'] = 'aplikasi';
$route['tambah_aplikasi'] = 'aplikasi/tambah_aplikasi';
$route['foto_aplikasi'] = 'aplikasi/tambah_foto_aplikasi';
$route['edit_aplikasi'] = 'aplikasi/edit_aplikasi';
$route['edit_foto_aplikasi'] = 'aplikasi/edit_foto_aplikasi';
/*-----------------------------------------------------------------------*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
