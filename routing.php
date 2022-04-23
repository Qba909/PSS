<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login',        'LoginCtrl');
Utils::addRoute('logout',       'LoginCtrl');

Utils::addRoute('hello',        'HelloCtrl');

Utils::addRoute('personList',    'PersonListCtrl',      ['admin']);
Utils::addRoute('personNew',     'PersonEditCtrl',	['admin']);
Utils::addRoute('personEdit',    'PersonEditCtrl',	['admin']);
Utils::addRoute('personSave',    'PersonEditCtrl',	['admin']);
Utils::addRoute('personDelete',  'PersonEditCtrl',	['admin']);

Utils::addRoute('order',        'OrderCtrl',     ['user','admin']);
Utils::addRoute('ordered',      'OrderCtrl',     ['user','admin']);

Utils::addRoute('manage',       'ManageCtrl',    ['employe','admin']);
Utils::addRoute('done',         'ManageCtrl',    ['employe','admin']);
Utils::addRoute('accept',       'ManageCtrl',    ['employe','admin']);
Utils::addRoute('paid',         'ManageCtrl',    ['employe','admin']);
Utils::addRoute('reject',       'ManageCtrl',    ['employe','admin']);

//Utils::addRoute('action_name', 'controller_class_name');
