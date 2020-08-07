<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
     <?php
     $topic = $_GET['name'];
     $id = $_GET['id'];
     ?>
     <div class="content">
          <form action="service.php" method="post">
               <label for="topic" style="margin-right: 2%;">หัวข้อ</label>
               <input type="text" name="topic" style="width: 80%; height: 3em; padding: 1px; font-size: 20px;" value="<?php echo $topic; ?>">
               <input type="hidden" name="id" value="<?php echo $id; ?>">
               <br>
               <button class="btn" type="button" onclick="history.back(1)">กลับ</button>
               <button class="btn" type="submit" name="edit_topic">แก้ไข</button>
          </form>
     </div>

</body>

</html>