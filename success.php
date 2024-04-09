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
      body{
            background: #796fab;
            width: 100%;
            height: 100vh;
      }
      body .modal-content{
            position: absolute;
            top: 50%;
            left: 50%;
            translate: -50% -50%;
            background: white;
            width: 450px;
            /* height: 350px; */
            padding: 50px;
            border-radius: 10px;
            border: 3px solid #796fab80;
      }
      body .ti-check {
            font-size: 50px;
            /* padding: px; */
            background: #796fab;
            border-radius: 50%;
            color: white;
      }
</style>
<body class="bg-">
      <div class="modal-content modal2">
            <!-- <div class="modal-header border-0 p-0">
                  <i class="fa fa-x ms-auto" data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;"></i>
            </div> -->
            <div class="modal-body text-center">
                  <h5>Your response has been received for moderation</h5>
                  <!-- <p> -->
                        <i class="ti ti-check"></i> <br>
                  <!-- </p> -->
                  Redirecting in <span id="countdown"></span>
            </div>
      </div>




      <script>
            setTimeout(function() {
            window.location.href = 'index.php';
            }, 3000);
      </script>
      <script>
            var countdownDuration = 3; 
            function updateCountdown() {
                  var countdownElement = document.getElementById('countdown');
                  countdownElement.textContent = countdownDuration + ' seconds';
                  countdownDuration--;

                  if (countdownDuration < 0) {
                        window.location.href = 'index.php#testimonials';
                  }
                  else {
                        setTimeout(updateCountdown, 1000);
                  }
            }
            updateCountdown();
      </script>




      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="script.js"></script>
      <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>