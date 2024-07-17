<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chat | Submit-Manuscript.Org</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>direct_reply/images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/vendor/bootstrap/css/bootstrap.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/vendor/animate/animate.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/vendor/css-hamburgers/hamburgers.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/vendor/animsition/css/animsition.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/vendor/select2/select2.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/vendor/daterangepicker/daterangepicker.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/css/util.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>direct_reply/css/main.css" />
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?= base_url('assets/landingpage') ?>/img/newfavicon.png.ico">
  <link href="<?= base_url(); ?>/favicon-32x32.png" rel="shortcut icon" type="image/png" />
</head>

<body>
  <div class="container-contact100">
    <!-- <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div> -->
    <div class="contact100-map">
      <img src="<?php echo base_url() ?>direct_reply/images/icons/bg.jpg" style="height: 100%; width: 100%;" alt="" />
    </div>
    <div class="wrap-contact100">
      <span class="contact100-form-symbol"><a href="<?= base_url() ?>">
          <img src="<?= base_url('assets/img/seo.png') ?>" alt="SYMBOL-MAIL" />
        </a>
      </span>

      <form class="contact100-form validate-form flex-sb flex-w" method="post" action="<?= base_url('tools/send_reply') ?>">
        <span class="contact100-form-title">
          <b>Direct Reply to <?= $sender_firstname . ' ' . $sender_lastname ?></b>
        </span>

        <!-- <div class="wrap-input100 rs1 validate-input" data-validate="Name is required">
          <input class="input100" type="text" name="name" placeholder="Name" />
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 rs1 validate-input" data-validate="Email is required: e@a.z">
          <input class="input100" type="text" name="email" placeholder="Email Address" />
          <span class="focus-input100"></span>
        </div> -->

        <div class="wrap-input100 validate-input" data-validate="Message is required">
          <textarea class="input100" name="message" placeholder="Write your message here..."></textarea>
          <span class="focus-input100"></span>
        </div>
        <input type="hidden" name="sender_id" value="<?= $sender_id ?>">
        <input type="hidden" name="receiver_id" value="<?= $receiver_id ?>">

        <div class="container-contact100-form-btn">
          <button type="submit" class="contact100-form-btn">
            Send
          </button>
        </div>
      </form>
      <div style="margin-top:50px;margin-bottom:-50px">
        © <script>
          document.write(new Date().getFullYear())
        </script>, Submit-Manuscript.Org. All Rights Reserved.
      </div>
    </div>

  </div>

  <div id="dropDownSelect1"></div>

  <!--===============================================================================================-->
  <script src="<?php echo base_url() ?>direct_reply/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url() ?>direct_reply/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url() ?>direct_reply/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url() ?>direct_reply/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url() ?>direct_reply/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url() ?>direct_reply/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url() ?>direct_reply/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url() ?>direct_reply/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
  <script src="<?php echo base_url() ?>direct_reply/js/map-custom.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url() ?>direct_reply/js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-23581568-13");
  </script>
</body>

</html>