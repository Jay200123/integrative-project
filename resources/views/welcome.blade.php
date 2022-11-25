@include('layouts.master')
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Fashion PH Official Website</title> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/thshit.jpg" type="image/x-icon">
</head>
<body> 
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/BG4.jpg" alt="Xia dynasty" height="500px" width="236" class="img-fluid">

      <div class="carousel-caption">
        <h3 style="color:black">ACTIVE LIFESTYLE </h3>
      </div>
    </div>
    <div class="item">
      <img src="images/logo4.jpg" alt="Yang dynasty" height="600px" width="236" class="img-fluid">
      <div class="carousel-caption">
        <h3 style="color:black">I MADE ME DO IT</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/icon3.jpg" alt="MING Dynasty" height="600px" width="236" class="img-fluid">
      <div class="carousel-caption">
        <h3 style="color:black"> The one thing you have to do if you write a book is put yourself in someone else's shoes. The reader's shoes. You've got to entertain them. 
        <br>
        --Mark Haddon</h3>
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<div class="container">
  <h1>Welcome to Home Page!</h1>
  <p>Fashion PH is a Shoes Retailer Shop Founded by Mr. Renyel Jay Sioc  & Ian Mark Morga on year 2022 and has become one of the most Famous Shoes Retailing Shop 
    here in the Philippines. It has establish Partners and Branch all over the Country.
  </p>
  <blockquote>
    <p>For Years Fashion PH has selling the best and quality shoes all over the Philippines</p>
    <footer>SeatWork 3</footer>
  </blockquote>
  

</div>

<div class="container features">
  <h2><strong>Our Most Selled Products</strong></h2>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h3 class="feature-title"><strong>World Balance</strong></h3>
            <img src="images/icon1.jpg" class="img-fluid" width="304" height="236">
            <blockquote>
            <p>Starting with World Balance, the active lifestyle core brand, that has been in the market four decades strong, it has continued to grow and expand its portfolio of businesses and product line to serve local and global consumers.
              World Balance is all about offering a wide array of quality products and experiences the customers will love. Our goal is to empower Filipinos with the right gear to keep on going, for those who seek value-for-money performance and active lifestyle products. Whether it is for everyday wear, work, or performance, World Balance provides value and comfort for customers from different walks of life.</p>
              <footer>World Balance Philippines Official Website</footer>
            </blockquote>
            <button class="btn btn-outline-secondary btn-lg">Tell Me More!</button>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h3 class="feature-title"><strong>Nike</strong></h3>
            <img src="images/logo4.jpg" class="img-fluid" width="306" height="236">
            <blockquote>
              <p>We champion continual progress for athletes and sport by taking action to help athletes reach their potential. Every job at NIKE, Inc. is grounded in a team-first mindset, cultivating a culture of innovation and a shared purpose to leave an enduring impact.</p>
              <footer>Nike Official Website</footer>
            </blockquote> 
            
            
  <div class="container">
  <h1>Services</h1>    
  <p>Quality service guarantee list:</p>
  <dl>
    <dt>Warranty Services</dt>
    <dd>- Item Replacement</dd>

    <dt>Other Services</dt>
    <dd>- Shoe Sewing</dd>
    <dd>- Shoe Cleaning</dd>
  </dl>     
</div>
        </div>

<div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="feature-title"><strong>Puma  </strong></h3>
            <img src="images/icon3.jpg" class="img-circle" alt="Cinque Terre" width="306" height="236"> 
            <blockquote>
            <p>Comfortable insoles, extra cushioning and sporty elements, PUMA shoes give your performance a boost and your look an edge. What does it take to bring out your best on the courts and tracks? Sportiness, precision and swiftness, all embodied in PUMA shoes, further elevated with innovative technologies to provide the best comfort to move with style.</p>
            <footer>Puma Philippines Official Website</footer>
            </blockquote>
        </div>
    </div>
</div>
</body>
</html>

