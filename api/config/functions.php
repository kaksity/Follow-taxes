<?php

    function generate_error_response($status_code, $message)
    {
        $data = [
            'success' => false,
            'message' => $message,
            'status_code' => $status_code
        ];
        return json_encode($data);
    }

    function sanitize_data($data,$connection)
    {
        return $connection->real_escape_string($data);
    }