<?php
  include "connect.php";


  $msg = '';
  if (isset($_POST["submit"])){
    $name = $_POST['name'];
    $image = $_FILES['image']["name"];
    $tmp_image = $_FILES['image']["tmp_name"];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `testimonials`(`name`, `image`, `comment`) VALUES ('$name','$image','$comment')";
    $insert = mysqli_query($conn, $sql);

    if ($insert == true){
      move_uploaded_file($tmp_image, "upload/$image");
      header('location: success.php');
    }
    else {
      $msg = 'Error submitting form';
    }
  }
  $select_testimonials = mysqli_query($conn, 'SELECT * FROM `testimonials` WHERE `status` = "1"');
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
    .myForm{
      width: 100%;
      height: 100vh;
      /* display: flex;
      align-items: center;
      justify-content: center; */
      background: #796fab80;
      position: fixed;
      top: 0;
      left: 0;
      backdrop-filter: blur(20px);
      z-index: 10000 !important;
    }
    .myForm .popup{
      position: absolute;
      top: 50%;
      left: 50%;
      translate: -50% -50%;
      background: white;
      width: 450px;
      padding: 35px;
      border-radius: 10px;
      border: 3px solid #796fab;
    }
  </style>
  <body class="bg-">
    
    <div class="overflow-x-hidden">

        <nav class="navbar navbar-expand-lg fixed-top bg-light">
          <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2">
              <img src="images/img2.png" alt="..." class="img-fluid">
              <span class="bb">BuggyBillions</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active text-dark" href="#story">Our Story</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-dark" href="#ceo">CEO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-dark" href="#titan1">Titan 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-dark" href="#titan2">Titan 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-dark" href="#titan3">Titan 3</a>
                </li>
              </ul>
              <form class="">
                <button class="btn navbtn ms-3" type="button" id="sendADm">Join The Party</button>
              </form>
            </div>
          </div>
        </nav>

        <section class="hero-section" id="hero-section">
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div class="hero-content d-flex justify-content-center place-items-center text-center w-75 mx-auto">
                  <h3 class="" id="hero-text">Welcome to Our Website</h3>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="story py-5" id="story">
          <div class="container">
            <div class="row">
              <div class="col-12 my-3">
                <div class="card d-grid align-items-center border-0 bg-transparent py-5" style="grid-template-columns: 1fr 4fr;">
                  <h1>Our story</h1>
                  <div><hr style="background: black; height: 5px;"></div>
                </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-12">
                <div class="card border-0 bg-transparent">
                  <p class="card-text">In a country like Nigeria where the odds of succeeding are against its citizens, especially those from rural areas, it is very common to see young brilliant minds lose faith in their career paths, especially after long years of being beaten down - making attempts to get the wheel rolling in their favor, but they just keep stumbling upon series of heartbreaking halts that would make a normal mind quit aspiring and simply accept the norms of not standing out, not willing to strive, and becoming unmotivated to move on. <br>
                  This is what a larger part of Nigerian youths interested in following a technological career face for a long part during the start of their career before they eventually hit the jackpot. It's always a rough journey for Nigerians and most learners from third-world countries like ours.
                  <br>The dreams of a thousand minds crunched by unfavourable environment and unpredictable factors to the few tens that escapes the drag to sour among the stars.</p>
                </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-12">
                <div class="card border-0 bg-transparent">
                  <p class="card-text">BuggyBillions is a place that exists in the heart and soul of our members. Our sole purpose is to help tech enthusiasts like ours comb through the thick and thin of their career paths with fewer bruises and better success rates. We want to help them make the right decisions along the way. We want to help people learn complex topics effectively and provide the motivation that they need along the way. More importantly, we believe that our efforts will yield good results for these people, and there will be more job opportunities for them to choose from. Not only will there be jobs, but there will also be employable manpower in the economy to contribute to the development of the country.<br>
                  Our mission at BuggyBillions is to help young Nigerians overcome the difficulty of learning a tech skill on their own without guidance and companionship, and we believe we can do it.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="titans pt-5 pb-5">
          <div class="container-fluid mt-5">
            <div class="card mb-lg-5 mb-md-5 mb-0 border-0 bg-transparent">
              <h1 class="card-title text-center">Meet The Titans</h1>
            </div>
            <div class="row justify-content-between align-items-center pb-5 px-5" id="ceo">
              <div class="col col-lg-6 col-md-6 col-12 mb-lg-5 pb-lg-5">
                <div class="card bg-transparent border-0 position-relative mt-5 pt-lg-3">
                  <h4 class="card-title"><span class="fw-bold fs-1 bb">C</span>eo Olasunkanmi</h4>
                  <p class="card-text">A seasoned entrepreneur and visionary leader, I proudly hold the esteemed position of CEO at SUNMENCE, BuggyBillions, and BugGy HuB. My educational journey encompasses an OND from Kwara State Polytechnic and a current pursuit of a B.Tech. Degree from the prestigious Ladoke Akintola University of Technology (LAUTECH).</p><p class="card-text">My academic pursuits were fortified by a comprehensive four-month ICT Training at the esteemed University of Ilorin Teaching Hospital, followed by a year-long internship at the globally renowned pharmaceutical powerhouse, GSK (GlaxoSmithKline). In the capacity of an ICT expert, I played an integral role during my tenure.</p><p class="card-text">Initiating my foray into entrepreneurship, I established my own ICT firm in 2018. Since then, my organization has been at the forefront of delivering exceptional services to diverse clientele, leaving a significant impact on the human experience. Additionally, I actively participate in various occasions and NGO programs, further cementing my commitment to social engagement.</p>
                  <div class="side2">
                    <div class="side px-5 py-5">
                      <img src="images/olasunkanmi.jpg" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="3000">
                      <div class="stone1 stones" data-aos="fade-down-right" data-aos-duration="3000"></div>
                      <div class="stone2 stones" data-aos="fade-up-left" data-aos-duration="3000"></div>
                    </div>
                  </div>
                  <div class="titan-socials mb-3 d-flex gap-2">
                    <a href="https://x.com/ibrahimsunmence?t=SVSM6S7VdJ3D7xT1hr5RMg&s=09"><i class="fab p-2 fa-x-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/olatunji-ibrahim"><i class="fab p-2 fa-linkedin"></i></a>
                  </div>
                  <button class="btn navbtn w-50">Yes, I want to be a Titan</button>
                </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-12 d-flex justify-content-center mt-md-5">
                <div class="side side1 px-5 py-5">
                  <img src="images/olasunkanmi.jpg" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="3000">
                  <div class="stone1 stones" data-aos="fade-down-right" data-aos-duration="3000"></div>
                  <div class="stone2 stones" data-aos="fade-up-left" data-aos-duration="3000"></div>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-center pb-5 px-5" id="titan1">
              <div class="col col-lg-6 col-md-6 col-12 d-flex justify-content-center mt-md-5">
                <div class="side side1 px-5 py-5">
                  <img src="images/adedeji.jpg" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="3000">
                  <div class="stone1 stones" data-aos="fade-down-right" data-aos-duration="3000"></div>
                  <div class="stone2 stones" data-aos="fade-up-left" data-aos-duration="3000"></div>
              </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-12 mb-lg-5 pb-lg-5">
                <div class="card bg-transparent border-0 position-relative mt-5 pt-3">
                  <h4 class="card-title"><span class="fw-bold fs-1 bb">T</span>itan Adedeji</h4>
                  <p class="card-text">In my first year of school, I met Sunmence, a tech aficionado who guided me in my tech career path and encouraged my learning journey. He generously provided me with a laptop when I didn't have one and instilled confidence in me to request for one from my parents.</p><p class="card-text">His support and guidance ultimately paved my path to a role at a prestigious company. Sunmence's mentorship has been a cornerstone of my success.</p>
                  <div class="side2">
                    <div class="side px-5 py-5">
                      <img src="images/adedeji.jpg" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="3000">
                      <div class="stone1 stones" data-aos="fade-down-right" data-aos-duration="3000"></div>
                      <div class="stone2 stones" data-aos="fade-up-left" data-aos-duration="3000"></div>
                    </div>
                  </div>
                  <div class="titan-socials mb-3 d-flex gap-2">
                    <a href="https://twitter.com/devadedeji"><i class="fab p-2 fa-x-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/devadedeji"><i class="fab p-2 fa-linkedin"></i></a>
                  </div>
                  <button class="btn navbtn w-50">Yes, I want to be a Titan</button>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-center pb-5 px-5" id="titan2">
              <div class="col col-lg-6 col-md-6 col-12 mb-lg-5 pb-lg-5">
                <div class="card bg-transparent border-0 position-relative mt-5 pt-3">
                  <h4 class="card-title"><span class="fw-bold fs-1 bb">T</span>itan Olasunkanmi</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, assumenda! Rerum, quas quisquam illum, nisi perspiciatis ipsam, adipisci dignissimos eius maxime repellendus asperiores ut laudantium veniam ea dolor sapiente unde.</p>
                  <div class="side2">
                    <div class="side px-5 py-5">
                      <img src="https://images.pexels.com/photos/18978812/pexels-photo-18978812/free-photo-of-young-redhead-in-a-leather-jacket-and-sunglasses-sitting-on-a-bench.png?auto=compress&cs=tinysrgb&w=1260&h=150&w=100&dpr=2" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="3000">
                      <div class="stone1 stones" data-aos="fade-down-right" data-aos-duration="3000"></div>
                      <div class="stone2 stones" data-aos="fade-up-left" data-aos-duration="3000"></div>
                    </div>
                  </div>
                  <div class="titan-socials mb-3 d-flex gap-2">
                    <a href="#"><i class="fab p-2 fa-x-twitter"></i></a>
                    <a href="#"><i class="fab p-2 fa-linkedin"></i></a>
                    <a href="#"><i class="fab p-2 fa-instagram"></i></a>
                  </div>
                  <button class="btn navbtn w-50">Yes, I want to be a Titan</button>
                </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-12 d-flex justify-content-center mt-md-5">
                <div class="side side1 px-5 py-5">
                  <img src="https://images.pexels.com/photos/18978812/pexels-photo-18978812/free-photo-of-young-redhead-in-a-leather-jacket-and-sunglasses-sitting-on-a-bench.png?auto=compress&cs=tinysrgb&w=1260&h=150&w=100&dpr=2" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="3000">
                  <div class="stone1 stones" data-aos="fade-down-right" data-aos-duration="3000"></div>
                  <div class="stone2 stones" data-aos="fade-up-left" data-aos-duration="3000"></div>
              </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-center pb-5 px-5" id="titan3">
              <div class="col col-lg-6 col-md-6 col-12 d-flex justify-content-center mt-md-5">
                <div class="side side1 px-5 py-5">
                  <img src="https://images.pexels.com/photos/18978812/pexels-photo-18978812/free-photo-of-young-redhead-in-a-leather-jacket-and-sunglasses-sitting-on-a-bench.png?auto=compress&cs=tinysrgb&w=1260&h=150&w=100&dpr=2" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="3000">
                  <div class="stone1 stones" data-aos="fade-down-right" data-aos-duration="3000"></div>
                  <div class="stone2 stones" data-aos="fade-up-left" data-aos-duration="3000"></div>
              </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-12 mb-lg-5 pb-lg-5">
                <div class="card bg-transparent border-0 position-relative mt-5 pt-3">
                  <h4 class="card-title"><span class="fw-bold fs-1 bb">T</span>itan Olasunkanmi</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, assumenda! Rerum, quas quisquam illum, nisi perspiciatis ipsam, adipisci dignissimos eius maxime repellendus asperiores ut laudantium veniam ea dolor sapiente unde.</p>
                  <div class="side2">
                    <div class="side px-5 py-5">
                      <img src="https://images.pexels.com/photos/18978812/pexels-photo-18978812/free-photo-of-young-redhead-in-a-leather-jacket-and-sunglasses-sitting-on-a-bench.png?auto=compress&cs=tinysrgb&w=1260&h=150&w=100&dpr=2" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="3000">
                      <div class="stone1 stones" data-aos="fade-down-right" data-aos-duration="3000"></div>
                      <div class="stone2 stones" data-aos="fade-up-left" data-aos-duration="3000"></div>
                    </div>
                  </div>
                  <div class="titan-socials mb-3 d-flex gap-2">
                    <a href="#"><i class="fab p-2 fa-x-twitter"></i></a>
                    <a href="#"><i class="fab p-2 fa-linkedin"></i></a>
                    <a href="#"><i class="fab p-2 fa-instagram"></i></a>
                  </div>
                  <button class="btn navbtn w-50">Yes, I want to be a Titan</button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="contact my-5 py-5 border-0">
          <div class="container pt-5">
            <div class="row">
              <div class="fab-col fab-col1"></div>
              <div class="col-12">
                <div class="card d-grid gap-3 justify-content-center text-center border-0 pb-5 bg-transparent">
                  <h3 class="card-title text-capitalize fs-1">Can't take fun out of the developer</h3>
                  <button class="btn text-capitalize navbtn w-50 mx-auto" id="sendADm">Join the party <i class="ti ti-click"></i></button>
                </div>
              </div>
              <div class="fab-col fab-col2"></div>
            </div>
          </div>
        </section>

        <section class="testimonials py-5 mt-5" id="testimonials">
          <div class="container pb-5">
            <div class="row">
              <div class="col col-12 pb-3">
                <div class="card bg-transparent border-0 mb-3 d-flex flex-row gap-5">
                  <h1 class="card-title text-light">Testimonials</h1>
                  <button type="button" id="test" class="btn navbtn2"><i class="ti ti-plus me-2"></i>Add Yours</button>
                </div>
              </div>


              <form action="" method="post" enctype="multipart/form-data" class="myForm">
                <div class="popup">
                  <div class="content">
                    <div class="modal-header">
                      <h3 class="modal-title border-0" id="exampleModalLabel">Leave a Comment</h3>
                    </div>
                    <div class="form">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" autocomplete="name" class="form-control mb-3" required>
                      <label for="image">Choose an image</label>
                      <input type="file" name="image" id="image" class="form-control mb-3" required>
                      <label for="comment">Comment</label>
                      <textarea rows="5" name="comment" id="comment" class="form-control mb-3" required></textarea>
                      <center class="alert fs-5">
                        <?php echo $msg;?>
                      </center>
                      <div class="modal-footer border-0 gap-3">
                        <button class="btn btn-secondary">Close</button>
                        <button class="btn navbtn" name="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>


              <div class="wrapper row pb-5">
              <?php
                    while ($select = mysqli_fetch_assoc($select_testimonials)){
                      ?>
                <div class="col col-lg-6 col-md-6 col-12 mt-4">
                  <div class="card p-3 border border-3 bg-transparent text-light">
                    <div class="card-top d-flex align-items-end mb-3">
                      <img src="upload/<?php echo $select['image']; ?>" alt="..." class="img-fluid" style="width: 10%; height: 15%; border-radius: 50%;">
                      <h6 class="fw-bold ms-2"><?php echo $select['name']; ?></h6>
                    </div>
                    <div class="card-btom">
                      <p><span class="fw-bold">Comment:</span><?php echo $select['comment']; ?></p>
                    </div>
                  </div>
                </div>
                <?php }?>
              </div>
            </div>
          </div>
        </section>

        <footer class="footer mt-5 py-5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col col-12 col-md-6 col-lg-6">
                <div class="card text-lg-end text-center border-0 bg-transparent">
                  <p class="card-title text-light m-0 fw-bold fs-5">&copy;&nbsp;BuggyBillions Titans 2024</p>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-6 mt-3 mt-lg-0 mt-md-0">
                <div class="card text-lg-start text-center border-0 bg-transparent">
                  <p class="fw-bold text-light m-0"><a href="https://oluwamayokun.netkify.app" class="nav-link">Dev. Oluwamayokun</a></p>
                </div>
              </div>
            </div>
          </div>
        </footer>
    </div>



    <script>
      let testEl = document.getElementById('test');
      let myFormEl = document.querySelector('.myForm');
      testEl.addEventListener('click', testBtnClick);
      // myFormEl.addEventListener('submit', myFormBtnClick);
      
      myFormEl.style.display = 'none';

      // function myFormBtnClick(params) {
      //   params.preventDefault();
      // }
      function testBtnClick(params) {
        myFormEl.style.display = 'block';
      }
    </script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>