<?php
// api/v1/users/index.php
header('Content-Type: application/json');

// Dummy data for demonstration
$users = [
    ['id' => 1, 'name' => 'John Doe'],
    ['id' => 2, 'name' => 'Jane Doe']
];

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle GET request to fetch all users
    echo json_encode($users["id"]);
// } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Handle POST request to create a new user
//     $input = json_decode(file_get_contents('php://input'), true);
//     $newUser = [
//         'id' => count($users) + 1,
//         'name' => $input['name']
//     ];
//     $users[] = $newUser;
//     echo json_encode($newUser);
// }