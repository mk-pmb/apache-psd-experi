<?php # -*- coding: utf-8, tab-width: 2 -*-

Header('Content-Type: text/plain');
echo "\xEF\xBB\xBF";  # UTF-8 BOM
var_dump(basename(__FILE__));
echo date("r\n");
print_r($_REQUEST);
