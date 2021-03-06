<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Services Manager
 *
 * @copyright   XOOPS Project (http://xoops.org)
 * @license     GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Kazumi Ono (AKA onokazu)
 * @package     system
 * @version     $Id$
 */

$modversion['name']        = XoopsLocale::SERVICES;
$modversion['version']     = '1.0';
$modversion['description'] = SystemLocale::SERVICES_DESC;
$modversion['author']      = 'Richard Griffith <richard@geekwright.com>';
$modversion['credits']     = 'The XOOPS Project';
$modversion['help']        = 'page=services';
$modversion['license']     = "GPL see LICENSE";
$modversion['official']    = 1;
$modversion['image']       = 'services.png';

$modversion['hasAdmin']    = 1;
$modversion['adminpath']   = 'admin.php?fct=services';
$modversion['category']    = XOOPS_SYSTEM_SERVICE;
