<?php

require 'core/bootstrap.php';

require Router::lood('routes.php')->direct(Request::uri());