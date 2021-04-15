<?php
    echo 
        '<div class="slideshow">
            <div class="gallery_container">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                    <a href="products_lighting.html"><img src="images/IMG_0.jpg" alt="Products_Page_01"
                            style="max-width:800px; height:768.5px;"></a>
                    </div>

                    <div class="mySlides fade">
                    <a href="products_lighting.html"><img src="images/IMG_1.jpg" alt="Products_Page_02"
                            style="max-width:800px; height:768.5px;"></a>
                    </div>

                    <div class="mySlides fade">
                    <a href="products_flooring.html"><img src="images/IMG_2.jpg" alt="Products_Page_01"
                            style="max-width:800px; height:768.5px;"></a>
                    </div>

                    <div class="mySlides fade">
                    <a href="products_tooling.html"><img src="images/IMG_3.jpg" alt="Products_Page_01"
                            style="max-width:800px; height:768.5px;"></a>
                    </div>

                    <div class="mySlides fade">
                    <a href="products_painting.html"><img src="images/IMG_4.jpg" alt="Products_Page_01"
                            style="max-width:800px; height:768.5px;"></a>
                    </div>
                </div>
                <!-- Next and previous buttons -->
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
                <!--dots -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>
            </div>
        </div>';
?>