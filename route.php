<?php
//chỉ được nhúng controller
//xử lí các yêu cầu từ đường dẫn
require_once "Controller/HomeController.php";
require_once "Controller/ClassController.php";
require_once "Controller/StudentController.php";

$controller = "";
if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
}
$action = isset($_GET["action"]) ? $_GET["action"] : "";


switch ($controller) {
    case "":
    case 'home':
        HomeController::viewHome();
        break;
    case 'class':
        switch ($action) {
            case '':
                ClassController::viewClass();

                break;
            case 'update':
                ClassController::viewUpdate();
                break;
            case 'insert':
                ClassController::viewInsert();
                break;
            case 'insertpro':
                ClassController::InsertPro();
                break;

            case 'update-pro':
                ClassController::updatepro();
                break;
            case 'delete-pro':
                ClassController::deletepro();
                break;
            default:
                echo "Sai lòi mắt kia kìa";
                break;
        }
        break;

    case 'student':
        switch ($action) {
            case '':
                StudentController::viewStudent();
                break;
            case 'create':
                StudentController::viewCreat();
                break;
            case 'createpro':
                StudentController::CreatePro();
                break;
            case 'update':
                StudentController::viewUpdate();
                break;
            case 'updatepro':
                StudentController::updatepro();
                break;
            case 'delete':
                StudentController::delete();
                break;
            default:

                break;
        }
        break;
    default:
        echo "Nhập lại";
        break;
}
