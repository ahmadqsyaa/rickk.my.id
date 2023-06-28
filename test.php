<?php
$url = 'https://rickk.biz.id/api';
$sumber = file_get_contents($url);
$data = json_decode($sumber);
//foreach ($data as $row){
//   echo "gambar".$row->gambar."<br>";
//   echo "judul".$row->judul."<br>";
//  echo "admin".$row->admin."<br>";
//  echo "deskripsi".$row->deskripsi."<br>";
//   echo "link_url".$row->link_url."<br>";
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Rickk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>
   <h1 class="text-center mt-5">BLOG RICKK</h1>
  <?php foreach ($data as $row){?>
    <div class="card mb-3 mt-5">
  <img src="<?php echo $row->gambar ?>" width="300px" height="300px" class="card-img-top" alt="<?php echo $row->judul?></p>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row->judul?></h5>
    <p class="card-text text-truncate"><?php echo $row->deskripsi?></p>
    <p class="card-text"><i class="bi bi-person"></i> admin</p>
    <p class="card-text"><i class="bi bi-calendar"></i> <?php echo $row->tanggal?></p>
    <a type="button" href="<?php echo $row->link_url?>" class="btn btn-outline-secondary">Learn more</a>
</div>
    <?php }?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 <script
  </body>
</html>