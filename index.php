<?php
  include "config.php";

  $query = "SELECT * FROM tb_wo";
  $sql=mysqli_query($koneksi,$query);
  $result=mysqli_fetch_assoc($sql);
  // var_dump($result);
 $no = 0;

?>


<!DOCTYPE html>
<html data-theme="cupcake" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/output.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" /> -->
    <title>💪 Catatan WorkOut 💪</title>
</head>
<body>
    <div class="navbar bg-neutral text-neutral-content">
        <button class="btn btn-ghost text-xl "> 💪 Catatan WorkOut 💪  </button>
      </div>
      

      <!-- button add -->
<div class="p-5 ">
    <button class="btn btn-outline btn-success"><a href="insert.php">Add</a> </button>
</div>

      <div class="overflow-x-auto mt-5">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>hari</th>
              <th>latihan</th>
              <th>berapa repetisi</th>
              <th>Button</th>
            </tr>
          </thead>
          <tbody>
         <?php
        while($result = mysqli_fetch_assoc($sql)){

          ?>
           
          
            <tr class="hover">
              <th><?php echo ++$no ?></th>

              <td><?php echo $result['hari_wo'] ?></td>

              <td><?php echo $result['latihan_wo'] ?></td>

              <td><?php echo $result['rep_wo'] ?></td>

              <td>
                <button class="btn btn-outline btn-info"><a href="update.php?edit=<?php echo $result['id_wo'] ?>">Edit</a></button>
                <button class="btn btn-outline btn-error"> <a href="delete.php?delete=<?php echo $result['id_wo']  ?>">Delete</a></button>
            </td>
             
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>

      <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</body>
</html>