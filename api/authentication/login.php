<?php
    require_once'../config/Database.php';
    require_once '../config/functions.php';

    header('Content-Type: application/json');

    if($_SERVER['REQUEST_METHOD'] != "POST"){
        http_response_code(404);
        echo json_encode(array('success' => false,'message' => 'Only POST request is allowed here','status_code' => 404));    
        exit();
    }

    $data = json_decode(file_get_contents('php://input'));

    if(isset($data->admin_email_address) == false || empty($data->admin_email_address) == true)
    {
        http_response_code(400);
        echo generate_error_response(400,'Admin Email Address is required');
        exit();
    }

    if(isset($data->admin_password) == false || empty($data->admin_password) == true)
    {
        http_response_code(400);
        echo generate_error_response(400,'Admin Password is required');
        exit();
    }

    $admin_email_address = sanitize_data($data->admin_email_address,$dbConnection);
    $admin_password = sanitize_data($data->admin_password,$dbConnection);

    if(strlen($admin_password) < 8) 
    {
        http_response_code(401);
        echo json_encode(array('success' => false,'message' => 'Incorrect Login Credentials','status_code' => 401));    
        exit();
    }

    $sqlQuery = "
                INSERT INTO admins
                    (admin_id, admin_full_name, admin_phone_number, admin_email_address, admin_password, is_deleted, created_at, updated_at)
                VALUES('', 'Admin Admin Admin', '07028311645', '$admin_email_address', '$hashed_admin_password', 0, '', '');
                ";
    
