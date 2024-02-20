<?php
include "config.php";

$id = $_GET["edit"];
// var_dump($id);
// die;
$query = "SELECT * FROM tb_wo WHERE id_wo='$id' ";
$sql=mysqli_query($koneksi,$query);
$result=mysqli_fetch_assoc($sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/output.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>Edit Your data</title>
</head>

<body>
    <div class="navbar bg-neutral text-neutral-content">
        <button class="btn btn-ghost text-xl">Edit data</button>
    </div>

    <div class="flex justify-center items-center">
        <div class="w-full max-w-xs">
            <form action="updatedata.php" method="post">
                <label class="block form-control mt-5" for="hari">
                    <div class="label mb-3">
                        <span class="label-text mt-3">Hari</span>

                    </div>
                    <input type="text" id="hari" placeholder="Tanggal / Hari / Tahun" class="input input-bordered w-full max-w-xs" name="hari" value="<?php echo $result['hari_wo'] ?>" required/>

                </label>
                <label class="block form-control mt-5" for="latihan">
                    <div class="label mb-3">
                        <span class="label-text mt-3">Latihan</span>

                    </div>
                    <input type="text" id="latihan" placeholder="Jenis Latihan" class="input input-bordered w-full max-w-xs" name="latihan" value="<?php echo $result['latihan_wo'] ?>" required/>

                </label>
                <label class="block form-control mt-5" for="repetisi">
                    <div class="label mb-3 ">
                        <span class="label-text mt-3">Repetisi</span>

                    </div>
                    <input type="text" id="repetisi" placeholder="Berapa Repetisi" class="input input-bordered w-full max-w-xs" name="repetisi" value="<?php echo $result['rep_wo'] ?>" required/>
                   
                    <input type="hidden" name="id" value="<?php echo $result['id_wo'] ?>">
                
                </label>
                
                    <button type="submit"  class="btn btn-outline btn-info mt-5 text-black">Edit</button>
            </form>
            </label>


        </div>
    </div>




    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>