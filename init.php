<?php defined('SYSPATH') or die('No direct script access.');

// Render Debug Toolbar on the end of application execution
register_shutdown_function('debugtoolbar::render');