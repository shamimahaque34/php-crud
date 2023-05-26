<?php
require_once '../vendor/autoload.php';
use App\classes\Product;
use App\classes\Auth;

if (isset($_POST['btn']))
{
    $product = new Product($_POST, $_FILES);
    $message = $product->save();
    include 'home.php';
}

else if (isset($_GET['status']))
{
    if ($_GET['status'] == 'manage')
    {
        $product = new Product();
        $products = $product->getAllProductInfo();
        include 'manage.php';
    }
    else if ($_GET['status'] == 'edit')
    {
        $id = $_GET['id'];
        $product = new Product();
        $productInfo = $product->getProductInfoById($id);
        extract($productInfo);
        include 'edit.php';
    }
    else if ($_GET['status'] == 'delete')
    {
        $id = $_GET['id'];
        $product = new Product();
        $product->deleteProduct($id);
    }
    else if ($_GET['status'] == 'index')
    {
        $product = new Product();
        $products = $product->getAllProductInfo();
        include 'index.php';
    }
    else if ($_GET['status'] == 'detail')
    {
        $id = $_GET['id'];
        $product = new Product();
        $productInfo = $product->getProductInfoById($id);
        include 'detail.php';
    }
    else if ($_GET['status'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
}

else if (isset($_POST['updateBtn']))
{
//    echo '<pre>';
//    print_r($_POST);
//    print_r($_FILES);
//    echo '</pre>';
//
//    if (empty($_FILES['image']['name']))
//    {
//        echo 'Hello';
//    }
//    else
//    {
//        echo 'Hi';
//    }
//    exit();

    $id = $_POST['id'];
    $product = new Product($_POST, $_FILES);
    $productInfo = $product->getProductInfoById($id);
    $product->updateProductInfo($productInfo);
}

else if (isset($_POST['loginBtn']))
{
    $auth = new Auth($_POST);
    $message = $auth->login();
    include 'login.php';
}