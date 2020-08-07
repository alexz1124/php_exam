<?php include("service.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>IBusiness</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
     <div class="content">
          <form action="service.php" method="post">
               <table>
                    <tr>
                         <th rowspan="2">ลำดับ</th>
                         <th rowspan="2">หัวข้อ</th>
                         <th rowspan="2">วันที่สร้าง</th>
                         <th colspan="2">เครื่องมือ
                         </th>
                    </tr>
                    <tr>
                         <td>แก้ไข</td>
                         <td>ลบ</td>
                    </tr>

                    <?php
                    while ($row = $result->fetch_assoc()) {
                         echo "<tr id = \"data_table\"> 
                              <td name = \"value\" >" . $row["number"] . "</td> 
                              <!-- <td name = \"value\" >" . $row["header"] . "</td> -->
                              <td><a href=\"detail.php?idd= " . $row['id'] . "\">" . $row["header"] . "</a></td>
                              <td name = \"value\" >" . $row["date_create"] . "</td>
                              <td> <a href=\"edit.php?name=" . $row["header"] . " &id=" . $row['id'] . "\">EDIT</a></td>
                              <td><a href=\"service.php?name=" . $row["header"]
                              . " &id=" . $row['id'] . "\" onclick=\"return confirm('Are you sure?')\">DELETE</a></td>
                              <!-- <td><input type=\"submit\" name=\"action\" value=\"Update\" /></td>
                              <td><input type=\"submit\" name=\"action\" value=\"Delete\" /></td> -->
                         </tr>";
                    }
                    ?>
               </table>
          </form>
          <button type=" submit" class="btn" style="margin-left: 80%;">เพิ่ม</button>
     </div>
     <script>
          function getDataFromTable(id) {
               console.log(id)
          }
     </script>
</body>

</html>