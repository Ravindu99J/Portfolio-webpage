<?php

function establishDBConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webdatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully!";
    }

    return $conn;
}


function insertProject($title, $description, $imagePath) {
    $conn = establishDBConnection();

    $sql = "INSERT INTO projects (Title, Description, Image) VALUES ('$title', '$description', '$imagePath')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function getProjects() {
    $conn = establishDBConnection();

    $sql = "SELECT * FROM projects";
    $result = $conn->query($sql);

    $projects = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
    }

    return $projects;
}

function updateProject($id, $title, $description, $imagePath) {
    $conn = establishDBConnection();

    $sql = "UPDATE projects SET Title='$title', Description='$description', Image='$imagePath' WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function deleteProject($id) {
    $conn = establishDBConnection();

    $sql = "DELETE FROM projects WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}


?>






