<?php

session_start();

if (empty($_SESSION["admin_id"])) {

    header("Location: ../index.php");

    exit;
}


require_once __DIR__ . "/../config/database.php";


$id =
    isset($_GET["id"])
        ? (int)$_GET["id"]
        : 0;


if ($id <= 0) {

    header("Location: index.php");

    exit;
}


/*
|--------------------------------------------------------------------------
| Check Products
|--------------------------------------------------------------------------
*/

$checkSql = "

    SELECT COUNT(*) AS Total

    FROM dbo.Products

    WHERE CategoryId = ?

";


$checkStmt =
    sqlsrv_query(
        $conn,
        $checkSql,
        [$id]
    );


$checkRow =
    sqlsrv_fetch_array(
        $checkStmt,
        SQLSRV_FETCH_ASSOC
    );


$productCount =
    (int)(
        $checkRow["Total"] ?? 0
    );


sqlsrv_free_stmt($checkStmt);


/*
|--------------------------------------------------------------------------
| Prevent delete when products exist
|--------------------------------------------------------------------------
*/

if ($productCount > 0) {

    die(
        "This category cannot be deleted because products are assigned to it."
    );
}


/*
|--------------------------------------------------------------------------
| Delete
|--------------------------------------------------------------------------
*/

$sql = "

    DELETE FROM dbo.Categories

    WHERE CategoryId = ?

";


$stmt =
    sqlsrv_query(
        $conn,
        $sql,
        [$id]
    );


if ($stmt === false) {

    die(
        "Unable to delete category."
    );

}


header("Location: index.php");

exit;