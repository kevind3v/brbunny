<?php

/**
 * #######################
 * ###  ERROR DISPLAY  ###
 * #######################
 */

ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);

/**
 * [Xdebug] - Display full var_dump
 */
ini_set('xdebug.overload_var_dump', 1);
ini_set("xdebug.var_display_max_children", -1);
ini_set("xdebug.var_display_max_data", -1);
ini_set("xdebug.var_display_max_depth", -1);
