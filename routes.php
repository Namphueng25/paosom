<?php
$controllers = array(
	'pages' => ['home', 'error'],
	'user' => ['newregister', 'addregister'],
	'paosom' => ['index'],
	'store' => ['index','newtransfer','update','newtransecsion','search','report']
);

function call($controller, $action)
{
	//echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" . $controller . "_controller.php");
	switch ($controller) {
		case "paosom":
			require_once("./models/paosomModel.php");
			$controller = new PaosomController();
			break;

		case "store":
				require_once("./models/paosomModel.php");
				require_once("./models/storeModel.php");
				require_once("./models/topupModel.php");
				require_once("./models/transferModel.php");
				$controller = new storeController();
				break;



	}
	$controller->{$action}();
}

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	} else {
		call('pages', 'error');
	}
} else {
	call('pages', 'error');
}
