


<?php
      if (isset($_SESSION['userId'])) {
            echo '
                <div class="ContainerSlide">
                      <h2>Les trois Marche vers un petit bout de bonheur</h2>
                      <br/>       
                      <img class="slideIcon" src="../img/img6.jpg" >
                      <br/>        
                      <div class="jumboSlide" style="max-width:400px">            
                      <img class="mySlides styleSlide" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZI81SSd6_aZY4-F5R08pfOU0VZGfGVQxQha5yR7a1lLjj9ksQiA"/>
                      <img class="mySlides styleSlide" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSorn3L2nZMx6LRpyOB23HgPivXSLtWA9ES9FIOvcQ_ZvQhsEw"/>
                      <img class="mySlides styleSlide" src="https://thumbs.dreamstime.com/t/pile-d-herbe-fra%C3%AEchement-coup%C3%A9e-79081853.jpg"/>
                      <img class="mySlides styleSlide" src="https://www.advantaseeds.be/wp-content/uploads/2017/04/Intro-gazonproducten-beginbeeld.jpg"/>
                </div>
                </div>
            ';
    }
            else {
                echo '
                <div class="ContainerSlide">
                      <h2>Les trois Marche vers un petit bout de bonheur</h2>
                      <br/>
                      <img class="slideIcon" src="img/img6.jpg" >
                      <br/>
                      <div class="jumboSlide" style="max-width:400px">            
                            <img class="mySlides styleSlide" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZI81SSd6_aZY4-F5R08pfOU0VZGfGVQxQha5yR7a1lLjj9ksQiA"/>
                            <img class="mySlides styleSlide" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSorn3L2nZMx6LRpyOB23HgPivXSLtWA9ES9FIOvcQ_ZvQhsEw"/>
                            <img class="mySlides styleSlide" src="https://thumbs.dreamstime.com/t/pile-d-herbe-fra%C3%AEchement-coup%C3%A9e-79081853.jpg"/>
                            <img class="mySlides styleSlide" src="https://www.advantaseeds.be/wp-content/uploads/2017/04/Intro-gazonproducten-beginbeeld.jpg"/>
                      </div>
                </div>
            ';
    }
?>