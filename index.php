<?php

require_once('api.php');
require_once('client.php');

if (isset($_GET["module"])) {
    switch ($_GET["module"]) {
        case 'api':
            $api = new API($_GET['method']);
            break;
        case 'client':
            if (isset($_POST['xml'])) {
                $client = new Client();
                $client->xml = $_POST['xml'];
                $client->postXML();
                print_r("<pre>" . $client->postXML());
            } else {
                include("client_form.php");
            }
            break;
    }
} else {
    header( 'Location: client/' ) ;
}


