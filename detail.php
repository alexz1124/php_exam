<?php include("service.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Detail</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
     <?php
     $idd = $_GET['idd'];
     select_comment($idd);
     ?>
     <div class="content">
          <form action="service.php" method="post">
               <table>
                    <tr>
                         <th>ลำดับ</th>
                         <th>รายละเอียด Comment</th>
                         <th>วันที่ Comment</th>
                    </tr>
                    <?php while ($row = $result_comment->fetch_assoc()) : ?>
                         <tr>
                              <td><?php echo $row['number']; ?></td>
                              <td><?php echo $row['comment']; ?></td>
                              <td><?php echo $row['date_comment']; ?></td>
                         </tr>

                    <?php endwhile ?>
               </table>
               <textarea style="margin-top: 20px;width: 100%; height: 20vh;"></textarea>
               <button type="button" class="btn" onclick="history.back(1)">กลับ</button>
               <button class="btn">เพิ่ม</button>
          </form>
     </div>
</body>

</html>