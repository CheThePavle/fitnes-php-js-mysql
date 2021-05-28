<?php require_once('header.php'); ?>

    <hr>

    <div class="slider">
        <input type="radio" name="switch1" id="slide1" checked>
        <input type="radio" name="switch1" id="slide2">
        <input type="radio" name="switch1" id="slide3">
        <input type="radio" name="switch1" id="slide4">
        <input type="radio" name="switch1" id="slide5">
    <div class="slide__hidden">
      <div class="slides">
        <div>
            <img src="img/ban1.jpg" alt="">
        </div>
        <div>
            <img src="img/ban2.jpg" alt="">
        </div>
        <div>
            <img src="img/ban3.jpg" alt="">
        </div>
        <div>
            <img src="img/ban4.jpg" alt="">
        </div>
        <div>
            <img src="img/ban5.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="switch">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
      <label for="slide5"></label>
    </div>
  </div>

    <div class="btn">
        <input type="submit" value="СПИСОК УСЛУГ">
        <a href="calculator"><input type="submit" value="КЛУБНАЯ КАРТА"></a>
    </div>
  
<?php require_once('footer.php') ?>