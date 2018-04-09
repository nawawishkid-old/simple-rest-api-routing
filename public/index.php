<?php

use Me\Route;
use Me\Request;

require_once '../bootstrap.php';

Route::run( Request::singleton() );
