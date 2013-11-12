<?php
/**
 * Created by PhpStorm.
 * User: stuarteske
 * Date: 10/11/2013
 * Time: 18:33
 *
 * @copyright    Copyright (C) 2013 CFA Group. All rights reserved.
 * @license      GNU General Public License Version 2 or later.
 * @author       Stuart Eske, <stuart.eske@cfa-group.com>
 */

header("Access-Control-Allow-Origin: *");

$dataString = md5(rand(9999, 9999999));

$response = array(
    "data" => $dataString
);

echo json_encode($response);

