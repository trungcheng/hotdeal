<!DOCTYPE html>
<!--
Copyright (c) 2007-2018, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or https://ckeditor.com/sales/license/ckfinder
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>CKFinder 3 - File Browser</title>
</head>
<body>

<?php
use App\Models\User;
require __DIR__ . '/../../../../vendor/autoload.php';
$app = require_once __DIR__ . '/../../../../bootstrap/app.php';
$request = Illuminate\Http\Request::capture();
$request->setMethod('GET');

$app->make('Illuminate\Contracts\Http\Kernel')
    ->handle($request);

$check = auth()->guard('admin')->check() && User::find(auth()->guard('admin')->id())->hasRole('Admin');
if($check){
}else{
	echo 'Access is denied.'; die();
}

?>

<script src="ckfinder.js"></script>
<script>
	CKFinder.start();
</script>

</body>
</html>