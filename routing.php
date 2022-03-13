<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login',        'LoginCtrl');
Utils::addRoute('logout',       'LoginCtrl');

Utils::addRoute('hello',        'HelloCtrl');

Utils::addRoute('order',        'OrderCtrl',     ['user']);
Utils::addRoute('ordered',      'OrderCtrl',     ['user']);

Utils::addRoute('manage',       'ManageCtrl',    ['employe']);
Utils::addRoute('done',         'ManageCtrl',    ['employe']);
Utils::addRoute('accept',       'ManageCtrl',    ['employe']);
Utils::addRoute('paid',         'ManageCtrl',    ['employe']);
Utils::addRoute('reject',       'ManageCtrl',    ['employe']);

//Utils::addRoute('action_name', 'controller_class_name');
