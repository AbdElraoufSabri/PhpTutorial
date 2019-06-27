<?php

require 'core/bootstrap.php';


require Router::load('core/routes.php')
    ->direct(Request::uri());

    