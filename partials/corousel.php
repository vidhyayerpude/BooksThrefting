<!--corausel-->
<?php $var= rand(1,3);?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo "img/books[".$var."].jpg";?>" class="d-block w-100" alt="..." width="800" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bookstore</h5>
        <p>The place for Bookworms..</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo "img/Bookstagram[".$var."].jpg";?>" class="d-block w-100" alt="..." width="800" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>“I declare after all there is no enjoyment like reading! How much sooner one tires of any thing than of a book! -- When I have a house of my own, I shall be miserable if I have not an excellent library.”</h5>
        <p>-Jane Austen</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo "img/Image[".$var."].avif";?>" class="d-block w-100" alt="..." width="800" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>“The person, be it gentleman or lady, who has not pleasure in a good novel, must be intolerably stupid</h5>
        <p>Pride and Prejudice</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--end-->