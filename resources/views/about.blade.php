@extends('footer')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>about</title>
  </head>
  <style>
      p{
          text-align: justify;
          padding: 3px;
          position: relative;
          top: 10px;
      }
      h3{
          padding: 5px;
          font-weight: bold;
          position: relative;
          top: 15px;
      }
    </style>
  <body>
    @section('content')
    <div class="container">
    <h3>ABOUT US</h3>
  <div class="row">
    <div class="col">
      <p>Started with a single shop in Lahore back in 2002, with the aim to be amongst the ones who stand out in the industry. Keeping in view the taste of our people, Aleez created a variety of embroidered, printed and fancy wear for the people who have a rich taste and unrealistic love for fashion.
    </p>
    <p>Aleez became word of mouth of the people which lead us to come to this point where we have numerous shops in the major cities of Pakistan. Our carefully designed, dyed, embellished hand worked items are quite famous because of its quality.</p>
    <p>Aleez has a vision to provide stylish, decent, high quality embroidered and Printed fabrics in new styles and trends for our esteem customers.</p>
    <p>We believe that the only way to achieve our goal is to try again no matter how much one has failed, have faith and always remember, the sky holds the limit.</p>
    </div>
    <div class="col" style="border:0px solid red;">
    <img src="sitecss/img/kp.jpg" alt="responsive img" class="img-thumbnail">
    </div>
  </div>
</div>
    @endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
@extends('header')