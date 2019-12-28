<?php
include './Route.php';
include './interface/Controller.php';

$Route = new Route();

include './view/header.php';

// include dynamic content page
$Route->executeController();

include './view/footer.php';