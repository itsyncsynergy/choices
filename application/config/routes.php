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
$route['default_controller'] = 'welcome';						//welcom page
$route['welcome_message'] = 'welcome/index';						        //game page
$route['404_override'] = 'welcome/errors';
$route['translate_uri_dashes'] = FALSE;

//manually writing all the links
$route['form/submit'] = 'welcome/formSubmit';
$route['question/supply'] = 'welcome/qsupply';				    //question 1
$route['question/signature'] = 'welcome/qsignature';		    //question 2
$route['question/last'] = 'welcome/qlast';					//question 3
$route['question/share'] = 'welcome/qshare';					//question 4
$route['question/character'] = 'welcome/qcharacter';					//question 5
$route['question/rest'] = 'welcome/qrest';			//question 6
$route['question/survive'] = 'welcome/qsurvive';					    //question 7
$route['question/dream'] = 'welcome/qdream';			            //question 8
$route['question/relation'] = 'welcome/qrelation';						//question 9
$route['question/speak'] = 'welcome/qspeak';					//question 10
$route['question/given'] = 'welcome/qgiven';					//question 11
$route['question/show'] = 'welcome/qshow';						//question 12
$route['question/known'] = 'welcome/qknown';                    //question 13
$route['question/happiest'] = 'welcome/qhappiest';                      //question 14
$route['question/change'] = 'welcome/qchange';                  //question 15
$route['question/count'] = 'welcome/qcount';                    //question 16
$route['question/long'] = 'welcome/qlong';                    //question 17
$route['question/person'] = 'welcome/qperson';                      //question 18
$route['question/trust'] = 'welcome/qtrust';
$route['question/ever'] = 'welcome/qever';
$route['question/favourite'] = 'welcome/qfav';
$route['question/makes'] = 'welcome/qmakes';
$route['question/thing'] = 'welcome/qthing';
$route['question/help'] = 'welcome/qhelp';
$route['loading-page'] = 'welcome/loadingpage';

$route['result1'] = 'welcome/results';							//result page
