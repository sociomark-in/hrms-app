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
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['test/(:any)'] = "TestController/experiment/$1";


$route['onboarding/home'] = "OnboardingController/home";

$route['dashboard'] = 'DashboardController/index';
$route['login'] = 'AuthController/login';
$route['signup'] = 'OnboardingController/signup';
$route['api/onboarding/signup'] = "AuthController/register";
$route['api/onboarding/resend-key'] = "AuthController/resend_key";
$route['api/onboarding/proceed'] = "OnboardingController/process_onboarding";

$route['profile'] = "UserAccountController/profile";

$route['api/auth/login'] = "AuthController/authenticate";
$route['api/action/attendance/(:any)'] = "UserActionController/attendance/$1";
$route['api/action/app-settings/(:any)'] = "CompanySettingsController/appSettings/$1";

$route['settings/app-settings/(:any)'] = "CompanySettingsController/appSettings/$1";


/*
==========================
Requests
==========================
requests


work-off/history
work-off/new 


reimbursements
reimbursements/apply


salary-slips
salary-slips/apply

*/
$route["requests"] = "RequestsController/home";
$route["requests/new"] = "RequestsController/new";
$route["requests/archived"] = "RequestsController/archived";
$route["requests/important"] = "RequestsController/important";
$route["requests/trash"] = "RequestsController/trash";
$route["request/(:any)"] = "RequestsController/detail";

$route["work-off/history"] = "RequestsController/work_off/$1";
$route["work-off/new"] = "RequestsController/work_off/$1";

$route["reimbursements"] = "RequestsController/reimbursements";
$route["reimbursements/apply"] = "";
$route["salary-slips"] = "";
$route["salary-slips/apply"] = "";



/*
==========================
Request Actions (Admin)
==========================
action/request/{:any}/{:action - approve/reject/edit}
action/send/{:any - }
*/

/* 
==========================
Employees
==========================
employees
employee-database


employee-management/designations
*/
$route["employee-management/employees"]="EmployeeMgmtController/home";
$route["employee-management/employees/new"]="EmployeeMgmtController/new_employee";
$route["employee-management/employees/new-bulk"]="EmployeeMgmtController/new_bulk_employee";
$route["employee-management/employees/add/(:any)"]="EmployeeMgmtController/add_action_status/$1";

$route['api/employee/new'] = "EmployeeMgmtController/add_employee";
$route['api/upload/single_document'] = "EmployeeMgmtController/single_document_upload";
$route['api/upload/employee/bulk'] = "EmployeeMgmtController/bulk_upload";

$route["employee-management/designations"] = "EmployeeMgmtController/all_designations";
$route["employee-management/departments"] = "EmployeeMgmtController/all_departments";

$route["attendance"]="DashboardController/attendance";

/*
==========================
Applications
==========================

Applications > Calendar
--------------------------
calendar


Applications > Mail Box
--------------------------
mail/inbox
mail/compose
mail/{chat_id}
*/

$route['calendar'] = "AppsController/calendar";
$route['mail/(:any)'] = "AppsController/calendar";

/* 
==========================
Settings
==========================

Settings > Account > Password
--------------------------
settings/account/password/forgot-password
settings/account/password/password-reset
settings/account/password/new-password
*/
$route['settings/account/password/(:any)'] = 'DashboardController/manage_password/$1';
$route['apps/calendar'] = 'AppsController/calendar';
