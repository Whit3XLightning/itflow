<?php

require_once('../validate_api_key.php');
require_once('../require_get_method.php');

if (isset($_GET['quote_id'])) {
    // quote via ID (single)

    $id = intval($_GET['quote_id']);
    $sql = mysqli_query($mysqli, "SELECT * FROM quotes WHERE quote_id LIKE '$id' AND quote_client_id = '$client_id' AND company_id = '$company_id'");

} else {
    // All quotes

    $sql = mysqli_query($mysqli, "SELECT * FROM quotes WHERE quote_client_id LIKE '$client_id' AND company_id = '$company_id' ORDER BY quote_id LIMIT $limit OFFSET $offset");
}

// Output
require_once("../read_output.php");
