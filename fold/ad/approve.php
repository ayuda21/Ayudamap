<?php
    session_start();

    if ($_GET) {
        include("connection.php");

        // Validate and sanitize the user input
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        if ($id !== false && $id !== null) {
            // Use a prepared statement to fetch data from the beneficiaries table
            $stmtSelect = $database->prepare("SELECT * FROM request WHERE user_id = ?");
            $stmtSelect->bind_param("i", $id);
            $stmtSelect->execute();
            $result = $stmtSelect->get_result();
            $data = $result->fetch_assoc();
            $stmtSelect->close();

            if ($data) {
                // Insert data into the request table
                $stmtInsert = $database->prepare("INSERT INTO beneficiaries (full_name, status, gender, dob, address) VALUES (?, ?, ?, ?, ?)");
                $stmtInsert->bind_param("sssss", $data['full_name'], $data['status'], $data['gender'], $data['dob'], $data['address']);
                $stmtInsert->execute();
                $stmtInsert->close();

                // Delete the record from the beneficiaries table
                $stmtDelete = $database->prepare("DELETE FROM request WHERE user_id = ?");
                $stmtDelete->bind_param("i", $id);
                $stmtDelete->execute();
                $stmtDelete->close();

                header("location: bene.php");
            } else {
                // Handle case where no data is found in beneficiaries table
                echo "No data found in beneficiaries table for user ID: $id";
            }
        } else {
            // Handle invalid input
            echo "Invalid or missing ID parameter.";
        }
    }
?>
