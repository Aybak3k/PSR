<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/8871897388.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/psr-logo.png" type="image/icon type" style="border-radius:50%">
    <script src="https://kit.fontawesome.com/8871897388.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Code -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- MyStylesheet -->
    <link href="assets/css/styles.css" rel="stylesheet">
  </head>
  <body>

<!-- Section 1 -->
    <div class="">
      <nav class="navbar navbar-light shadow sticky-top">
        <a class="navbar-brand mx-auto" href="index.php">
          <img src="images/psr-logo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation" style="border:none;">
            <!-- <span class="navbar-toggler-icon ml-auto"></span> -->
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">

              <!-- <a href="index.php" class="nav-link py-3">Home</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Our Projects
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:none; text-align:center;">
                  <a class="dropdown-item" href="nandanam.php">PSR Nandanam</a>
                  <a class="dropdown-item" href="krishkamal.php">PSR Krishkamal</a>
                  <a class="dropdown-item" href="#">PSR Aster</a>
                </div>
              </li>
              <a href="about.php" class="nav-link py-3">About</a>
              <a href="team.php" class="nav-link py-3">Team</a>
              <a href="careers.php" class="nav-link py-3">Careers</a>
              <a href="contact.php" class="nav-link py-3">Contact</a> -->


              <div class="">
                <a href="#"><h4>Home</h4></a>
              </div>
              <div class="our-projects-menu">
                <a href="#"><h4>Our Projects</h4></a>
              </div>

                    <div class="psr-sub-menu text-white">

                      <div class="row">
                        <div class="col-lg-4">
                          Residential
                        </div>
                        <div class="col-lg-4">
                          Commercial
                        </div>
                        <div class="col-lg-4">
                          Plotted Developments
                        </div>
                      </div>
                    </div>

              <div class="">
                <a href="#"><h4>About</h4></a>
              </div>
              <div class="">
                <a href="#"><h4>Team</h4></a>
              </div>
              <div class="">
                <a href="#"><h4>Careers</h4></a>
              </div>
              <div class="">
                <a href="#"><h4>Contact</h4></a>
              </div>
            </div>
          </div>
        </button>
    </nav>
  </div>

  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button> -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="card my-2" style="border:none;">
            <div class="card-body d-inline shadow" style="border-radius:1.4em;">
              <div class="py-4 my-4">
                <div class="text-center" style="color:#006E4C;">
                  <h3 class="" style="">TALK TO US</h3>
                </div>

                <div class="text-center my-2">
                  <a target="_blank" href="https://web.whatsapp.com/send?phone=+918951359771&amp;text=Hi, I would like to get more information on this. Please call me on +" class="btn btn-success badge-pill my-3" style="padding: 1.4% 5%;"><i class="fa fa-fw fa-whatsapp pr-4" style="color:#fff"></i> WHATSAPP US</a>
                </div>

                <div class="text-center my-2">
                  <!-- <a href="tel:+91 9686757883" target="_blank" class="btn btn-outline-success badge-pill" style="color:#006E4C; padding:1.4% 9%;"> Call Us Now</a> -->
                  <a href="tel:+919606039582" target="_blank" class="" style="color:#006E4C;"><h4>+91 9606039582</h4></a>
                </div>

                <form style="margin: 0% 10%;" method="POST" action="mail.php" id="contact-form">
                  <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Phone">
                  </div>

                  <div class="text-center">
                    <button name="submit" type="submit" value="send" class="btn btn-success text-center my-4 brand-bg-colour badge-pill" style="padding:1.4% 40%;">Submit</button>
                  </div>
              </form>


              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script type="text/javascript">
var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
if (mobile) {

 $('.hidemobile').css('display', 'none'); // OR you can use $('.hidemobile').hide();
}
else
{
 $('.hideweb').css('display', 'none'); // OR you can use $('.hideweb').hide();
}

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

</script>

  </body>
</html>
