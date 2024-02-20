              <?php
              include "config.php";

              ?>


              <!DOCTYPE html>
              <html lang="en">
              <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <link rel="stylesheet" href="src/output.css">
                  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
                  <title>Add Your Schedule</title>
              </head>
              <body>
              <div class="navbar bg-neutral text-neutral-content">
                      <button class="btn btn-ghost text-xl">Masukan data</button>
                    </div>
                    
                    <div class="flex justify-center items-center">
              <div class="w-full max-w-xs">
                <form action="insertdata.php" method="post">
              <label class="block form-control mt-5" for="hari">
                <div class="label mb-3">
                  <span class="label-text mt-3">Hari</span>
                
                </div>
                <input type="text"  id="hari" placeholder="Tanggal / Hari / Tahun" class="input input-bordered w-full max-w-xs" name="hari" />
                
              </label>
              <label class="block form-control mt-5" for="latihan">
              <div class="label mb-3">
                  <span class="label-text mt-3">Latihan</span>
                
                </div>
                <input type="text" id="latihan" placeholder="Jenis Latihan" class="input input-bordered w-full max-w-xs" name="latihan" />
              
              </label>
              <label class="block form-control mt-5" for="repetisi">
              <div  class="label mb-3 ">
                  <span  class="label-text mt-3">Repetisi</span>

                </div>
                <input type="text" id="repetisi" placeholder="Berapa Repetisi" class="input input-bordered w-full max-w-xs" name="repetisi" />
              
                <button type="submit" class="btn btn-outline btn-info mt-5 text-black">add</button>
                </form>
              </label>


              </div>
              </div>


                  

                    <script src="https://cdn.tailwindcss.com"></script>
              </body>
              </html>