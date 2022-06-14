<?php
$images = scandir('images');
//  print_r($images);
// $prouduct ='';
// foreach ($images as $index => $image) {
//   # code...
//   if ($index == 0 || $index == 1) {
//     # code...
//     continue;
//   }
//   $prouduct .= "<div class='img-div col-3'>
//       <img src='images/{$image}' alt='' class='w-100'>
//       </div>";
// }
?>
<!doctype html>
<html lang="en">

<head>
  <title>loopexample</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    img {
      height: 250px;
    }
  </style>
</head>

<body>
  <div class="container">
      <div class="row">
        <?php foreach ($images as $index => $image) {
          # code...
          if ($index == 0 || $index == 1) {
                 # code...
                 continue;
               }
         ?>
        <div class='img-div col-3'>
          <img src='images/<?= $image ?>' alt='' class='w-100'>
        </div>
        <?php } ?>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>