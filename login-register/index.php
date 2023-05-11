<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HOTEL </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span>A6zHotels</span>
                </div>
                <div class = "site-nav">
                    <p>WELCOME </p>
                    
                </div>
            </div>

            <div class = "head-bottom flex">
                <h2>NICE AND COMFORTABLE PLACE TO STAY</h2>
                <p>Welcome to our hotel's booking system! We're excited to offer you a convenient way to book your stay with us. With just a few clicks, you can find available rooms, select your dates, and secure your reservation. Our hotel is committed to providing you with a comfortable and enjoyable stay, and our booking system is designed to make the process as easy and hassle-free as possible. Thank you for considering us for your upcoming travels.</p>
               
            </div>
        </header>
        <!-- end of header -->

       

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h2>services</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>Indulge in a culinary experience like no other at our hotel! Our talented chefs use only the freshest ingredients to craft dishes that are sure to tantalize your taste buds. From our savory breakfast options to our delectable dinner offerings, our food services are designed to provide you with an unforgettable dining experience. Our menus feature a variety of international and local cuisine, as well as vegetarian and gluten-free options. We also offer in-room dining and catering for events, so you can enjoy our delicious fare from the comfort of your own room or during your special occasions. Join us for a meal and savor the flavors of our hotel's cuisine.</p>
                       
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Refreshment</h2>
                        <p>We want your stay at our hotel to be as comfortable and enjoyable as possible, which is why we offer a selection of refreshing drinks and snacks for your convenience. Our refreshment options include a variety of hot and cold beverages, such as coffee, tea, and juice, as well as light snacks like pastries, fruit, and granola bars. These items are available for purchase in our lobby or in vending machines located throughout the property, making it easy to grab a quick bite or drink on-the-go. We know that travel can be tiring, so we invite you to take a moment to relax and recharge with our selection of refreshing treats.</p>
                       
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>We understand that a clean and comfortable guest room is essential to a great hotel experience, and our housekeeping team is dedicated to ensuring just that. Our staff is trained to provide exceptional service, and they take pride in maintaining a high standard of cleanliness throughout our property. We use eco-friendly cleaning products to minimize our environmental impact, and our housekeeping services include daily room cleaning, fresh linens, and towel replacement. If you prefer to limit housekeeping service during your stay, simply let us know and we will accommodate your request. We are committed to providing you with a comfortable and hygienic environment, and we look forward to making your stay with us a memorable one.</p>
                      
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Room Security</h2>
                        <p>At our hotel, we take your safety and security very seriously. All of our guest rooms feature state-of-the-art locking systems, ensuring that only you and authorized hotel staff have access to your room. In addition, our property is equipped with a comprehensive security system that includes CCTV cameras, motion sensors, and round-the-clock security personnel to monitor and respond to any issues that may arise. We also provide in-room safes for your valuables, giving you added peace of mind during your stay. Rest assured that your safety is our top priority, and we are committed to providing you with a secure and comfortable experience at our hotel.</p>
                       
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>

        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h2>rooms</h2>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img1.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Family Fun Suite</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                stunning
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                panoramic
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                serene
                            </li>
                        </ul>
                        <p> If you're traveling with your family, our Family Fun Suite is the perfect choice. This suite has two separate bedrooms, each with a comfortable queen-size bed, a flat-screen TV, and a private bathroom. The suite also features a spacious living room with a sofa bed, a dining area, a well-equipped kitchenette, and a private balcony with a city view. Guests can enjoy complimentary high-speed Wi-Fi, daily housekeeping, and access to our fitness center and swimming pool. We also offer a variety of family-friendly amenities, such as board games, toys, and children's books.</p>
                        <p class = "rate">
                            <span>$99.00 /</span> Per Night
                        </p>
                       
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img2.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Executive Business Suite</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                luxurious
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                sapcious
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                professional
                            </li>
                        </ul>
                        <p> Our Executive Business Suite is designed for business travelers who need a comfortable and functional space to work and rest. The suite features a king-size bed, a large work desk with an ergonomic chair, a lounge area with a sofa, a flat-screen TV, and a private bathroom with a walk-in shower. Guests can take advantage of the complimentary high-speed Wi-Fi, 24-hour room service, and access to our business center and meeting rooms.</p>
                        <p class = "rate">
                            <span>$99.00 /</span> Per Night
                        </p>
                        
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img3.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Deluxe Ocean View Suite</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                spohisticated
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                functional
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                breathtaking
                            </li>
                        </ul>
                        <p>Experience luxury at its finest in our Deluxe Ocean View Suite. With a stunning view of the ocean, this suite is perfect for couples or families looking for a memorable and relaxing stay. The suite features a king-size bed, a spacious living room with a comfortable sofa, a flat-screen TV, a private balcony, and a well-equipped kitchenette. Guests can enjoy complimentary high-speed Wi-Fi, daily housekeeping, and room service.</p>
                        <p class = "rate">
                            <span>$99.00 /</span> Per Night
                        </p>
                        
                    </div>
                </article>
                <!-- end of single room -->
            </div>
        </section>


        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>customers</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>"We had an amazing family stay at this hotel! The staff was incredibly friendly and attentive, and the rooms were spacious and comfortable. The hotel's location was perfect for exploring the city, and the amenities provided kept everyone entertained. We highly recommend this hotel for a wonderful family vacation!"</p>
                        <img src = "images/cus1.jpg" alt = "customer image">
                        <span>smith family, United States</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>"This hotel exceeded my expectations! The service was top-notch, and the staff was professional and accommodating. The room was well-appointed and had all the amenities I needed for a productive and comfortable stay. The hotel's central location and efficient business center made it convenient for my work meetings. I highly recommend this hotel for any business traveler."</p>
                        <img src = "images/cus2.jpg" alt = "customer image">
                        <span>Mr Allan Astler, Country</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>
"I had an incredible stay at this hotel! The staff was friendly and attentive, and the room was beautifully decorated and comfortable. The hotel's amenities were top-notch, including the spa and fitness center. The location was convenient for exploring the city and the nearby attractions. I would definitely stay here again for a relaxing and enjoyable getaway."</p>
                        <img src = "images/cus3.jpg" alt = "customer image">
                        <span>Aliyah Campbell, Country</span>
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Welcome to our hotel! We are a premier destination for travelers looking for exceptional service, luxurious accommodations, and a memorable experience. Our hotel is located in the heart of the city, providing easy access to popular tourist attractions, shopping districts, and entertainment venues.
                        Our mission is to provide each guest with an unparalleled level of comfort and hospitality. From our friendly and knowledgeable staff to our meticulously maintained rooms and facilities, we strive to exceed expectations in every way possible.</p>
              
                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            203 Fake St.Mountain View, San Francisco, California, USA
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +447382736489
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            info@domain.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="script.js"></script>
    
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>