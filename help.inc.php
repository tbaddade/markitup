<?php

/**
 * MARKITUP Addon
 * Textile Markup Editor
 * 
 * @author Markitup by Jay Salvat - http://markitup.jaysalvat.com
 * @author Redaxo Addon by http://www.gn2-netwerk.de/
 * @package redaxo4.2
 * @version svn:$Id$
 */

$info = file_get_contents($REX['INCLUDE_PATH'].'/addons/markitup/beispielmodul.txt');

echo '<pre style="font-size:13px;overflow:auto;">';
print_r(htmlentities($info));
echo '</pre>';


?>