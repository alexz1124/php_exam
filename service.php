<?php
include('server.php');
session_start();

$result;
$result_comment;
select();

if (isset($_POST['action'])) {
     $id = $_POST['action'];
     echo $id;
     // if ($_POST['action'] == 'Update') {
     //      echo 'update';
     //      header('Location: edit.php');
     // } else if ($_POST['action'] == 'Delete') {
     //      echo 'delete';
     // } else {
     //      echo 'error';
     // }
}

if (isset($_POST['edit_topic'])) {
     edit($_POST['id'], $_POST['topic']);
}
if (isset($_GET['id'])) {
     delete($_GET['id']);
}

function select()
{
     global $result, $conn;
     $sql = "SELECT * FROM content_db";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
          // output data of each row
          // while ($row = $result->fetch_assoc()) {
          //      echo "id: " . $row["id"] . " - Name: " . $row["header"] . " " . $row["date_create"] . "<br>";
          // }
     } else {
          // echo "0 results";
     }
}

function select_comment($id)
{
     global $result_comment, $conn;
     $sql = "SELECT * FROM comment WHERE id='$id'";
     $result_comment = $conn->query($sql);

     if ($result_comment->num_rows > 0) {
          // output data of each row
          // while ($row = $result_comment->fetch_assoc()) {
          //      echo "id: " . $row["id_comment"] . " - Name: " . $row["comment"] . " " . $row["date_comment"] . "<br>";
          // }
     } else {
          // echo "0 results";
     }
}

function edit($uniq, $new_topic)
{
     echo $uniq . "<br>";
     echo $new_topic . "<br>";
     global $conn;
     $sql = "UPDATE content_db SET header='$new_topic' WHERE id='$uniq'";

     if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully";
          header("Location: ./");
          die();
     } else {
          echo "Error updating record: " . $conn->error;
     }
}

function delete($id_delete)
{
     global $conn;
     $sql = "DELETE FROM content_db WHERE id = '$id_delete'";

     if ($conn->query($sql) === true) {
          echo "Record delete successfully";
          header('Location: index.php');
          die();
     } else {
          echo "Error deleting record: " . $conn->error;
     }
}
