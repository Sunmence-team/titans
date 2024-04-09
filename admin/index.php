<?php
  include "../connect.php";
  $select_testimonials = mysqli_query($conn, 'SELECT * FROM testimonials ORDER BY id DESC');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BuggyBillions Titans</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/img2.png">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="tabler-icons/webfont/tabler-icons.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  </head>
  <style>
    tbody img{
      width: 150px;
      height: 150px;
      object-fit: cover;
      object-position: top;
    }
    tbody button{
      width: 125px;
    }
    tbody .btn1{
      background: #796fab !important;
      color: white !important;
      border: none !important;
    }
    tbody .btn2{
      /* background: non !important; */
      color: #796fab !important;
      border: 1px solid #796fab !important;
    }
  </style>
  <body>
    <div class="container">
      <h2 class="fw-bolder fs-2 py-3">USERS TESTIMONIALS</h2>
      <table class="table text-center">
            <thead>
                  <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Approval</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while ($select = mysqli_fetch_assoc($select_testimonials)){
                      ?>
                      <tr id="table<?php echo $select['id']?>">
                        <th scope="row"><?php echo $select['id'];?></th>
                        <td><?php echo $select['name'];?></td>
                        <td><img src="../upload/<?php echo $select['image'];?>" width="100%" alt=""></td>
                        <td><?php echo $select['comment'];?></td>
                        <td>
                          <?php
                          if ($select['status'] == 0) {
                          ?>
                            <a href="approval.php?approve=<?php echo $select['id'];?>">
                              <button class="btn btn1">Approve</button></td>
                            </a>
                          <?php }
                          else {
                            ?>
                            <button class="btn btn2" type="button">Approved</button></td>
                            <?php
                          }
                          ?>
                      </tr>
                    <?php
                    }?>
            </tbody>
          </table>
        </div>
    




    <script src="script.js"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>