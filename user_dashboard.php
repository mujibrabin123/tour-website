<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


require('db_connection.php');



// Fetch user-specific data if needed
$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Rabin Tour Agency</title>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>T</span>RAVEL</a>
    <nav class="navbar">
        <a href="user_profile.php">my account</a>
        <a href="#home">home</a>
        <a href="#book">Book</a>
        <a href="#packages">Packages</a>
        <a href="#services">Services</a>
        <a href="#gallery">Gallery</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
    </div>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="Search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>

<section class="user-details">
    <h2>Welcome, <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'User'; ?></h2>
    <!-- Additional user-specific details or greetings -->
</section>

<!-- Include other sections based on your requirements -->


<section class="home" id="home">

    <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>discover new things with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>


    <div class="controls">
        <span class="vid-btn active" data-src="videos/vid-1.mov"></span>
        <span class="vid-btn" data-src="videos/vid-2.mp4"></span>
        <span class="vid-btn" data-src="videos/vid-3.mp4"></span>
        <span class="vid-btn" data-src="image/vid-4.mp4"></span>
        <span class="vid-btn" data-src="image/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="videos/vid-1.mov" id="video-slider" loop autoplay muted></video>
    </div>
</section>

<!-- Example: Booking Section -->
<<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
       
        <div class="image">
            <img src="image/image1.png" alt="">
        </div>
        <form action="booking.php" method="post">
            <div class="inputBox">
               <h3>where to</h3>
               <input type="text" name="place_name" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" name="number_of_guests" placeholder="number of guests">
             </div>
             <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date" name="arrival_date" >
             </div>
             <div class="inputBox">
                <h3>leaving</h3>
                <input type="date" name="leaving_date" >
            </div>
            <input type="submit" class="btn" value="book now">
            
        </form>
    </div>
</section>
    <!-- Add booking-related content here -->
    <p>This is your booking section content.</p>
</section>

<!--packages section start-->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/p-image2.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>Messina</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, amet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>    
                </div>
                <div class="price">  $100.00 <span>$200.00</span> </div>
                <a href="#book" class="btn">book now</a>

            </div>
        </div>

        <div class="box">
            <img src="image/P-image3.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>toarmina</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, amet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>    
                </div>
                <div class="price">  $100.00 <span>$200.00</span> </div>
                <a href="#" class="btn">book now</a>

            </div>
        </div>

        <div class="box">
            <img src="image/P-image4.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>palermo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, amet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>    
                </div>
                <div class="price">  $100.00 <span>$200.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/P-image5.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>catania</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, amet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>    
                </div>
                <div class="price">  $100.00 <span>$200.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/P-image6.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>Naples</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, amet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>    
                </div>
                <div class="price">  $100.00 <span>$200.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>


        <div class="box">
            <img src="image/P-image7.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>Rome</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, amet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>    
                </div>
                <div class="price">  $100.00 <span>$200.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

    </div>

</section>     

<!--packages section ends-->

<!--service section starts-->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <div class="box-container">


        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, ipsa optio. Tempora, accusantium iusto accusamus ratione quae fuga illo voluptates!</p>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drink</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, ipsa optio. Tempora, accusantium iusto accusamus ratione quae fuga illo voluptates!</p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safety guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, ipsa optio. Tempora, accusantium iusto accusamus ratione quae fuga illo voluptates!</p>
        </div>


        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, ipsa optio. Tempora, accusantium iusto accusamus ratione quae fuga illo voluptates!</p>
        </div>

        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, ipsa optio. Tempora, accusantium iusto accusamus ratione quae fuga illo voluptates!</p>
        </div>

        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, ipsa optio. Tempora, accusantium iusto accusamus ratione quae fuga illo voluptates!</p>
        </div>

    </div>
</section>

<!--service section ends-->

<!--gallery section starts-->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <img src="image/g-1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, a.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>


        <div class="box">
            <img src="image/g-2.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, a.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>


        <div class="box">
            <img src="image/g-3.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, a.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>


        <div class="box">
            <img src="image/g-4.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, a.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>



        <div class="box">
            <img src="image/g-5.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, a.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>


        <div class="box">
            <img src="image/g-6.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, a.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>



        <div class="box">
            <img src="image/g-7.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, a.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>


        <div class="box">
            <img src="image/g-8.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, a.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        
        <div class="box">
            <img src="image/g-9.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, a.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>


    </div>


</section>

<!--gallery section ends-->


<!--review section starts-->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

     <div class="swiper mySwiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="image/r-1.jpg" alt="">
                    <h3>mujtaba bawar</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt velit nam exercitationem laudantium dolorum. Earum recusandae, voluptates soluta voluptas libero rerum nihil voluptate, beatae incidunt eum esse labore, quos nesciunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>  
            

            <div class="swiper-slide">
                <div class="box">
                    <img src="image/r-2.jpg" alt="">
                    <h3>mujib rabin</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt velit nam exercitationem laudantium dolorum. Earum recusandae, voluptates soluta voluptas libero rerum nihil voluptate, beatae incidunt eum esse labore, quos nesciunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div> 


            <div class="swiper-slide">
                <div class="box">
                    <img src="image/r-3.jpg" alt="">
                    <h3>arya khosravirad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt velit nam exercitationem laudantium dolorum. Earum recusandae, voluptates soluta voluptas libero rerum nihil voluptate, beatae incidunt eum esse labore, quos nesciunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div> 

            <div class="swiper-slide">
                <div class="box">
                    <img src="image/r-4.jpg" alt="">
                    <h3>adeeb hamidi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt velit nam exercitationem laudantium dolorum. Earum recusandae, voluptates soluta voluptas libero rerum nihil voluptate, beatae incidunt eum esse labore, quos nesciunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div> 

        </div>

     </div>

</section>

<!--review section ends-->

<!--contact section starts-->

<section class="contact" id="contact"> 

    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="image/c-1.png" alt="">
        </div>

        <form action="process_contact.php" method="post">
            <div class="inputBox">
                <input type="text" name="name" placeholder="name">
                <input type="email"  name="email" placeholder="email">
            </div>

            <div class="inputBox">
                <input type="number" name="phone" placeholder="number">
                <input type="text" name="subject" placeholder="subject">
            </div>

            <textarea  placeholder="massage" name="message" id=""></textarea>
            <input type="submit" class="btn" value="send massage">

        </form>
      
    </div>
    
</section>
<!--contact section ends-->
<!-- Footer Section -->
<!--footer section starts-->

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>welcome to the travel agency, our agency have been working since 2015, we are glad to provide with good services to the clients.</p>
        </div>

        <div class="box">
            <h3>branch location</h3>
            <a href="#">italy</a>
            <a href="#">USA</a>
            <a href="#">Afghanistan</a>
            <a href="#">germany</a>
            <a href="#">france</a>      
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#package">package</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a> 
            <a href="#contact">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">instagram</a>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="https://www.linkedin.com/in/mujibullah-rabin-33869b296/">linkdin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span>mujibullah rabin</span> made for university exam project</h1>

</section>

<!--footer section ends-->


<!--custom js file link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script2.js"></script>

</body>
</html>