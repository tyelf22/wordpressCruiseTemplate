<footer>
    <div class="footWrapper">
        <div class="contact">
            <h2>Contact Us</h2>
            <p>
                <a href="https://goo.gl/maps/ro2NGJ2Yy4sc5ZPk6">
                    Cabot Cruises <br>
                    800 W University Pkwy <br>
                    Orem, UT 84058
                </a>
            </p>
            <p>
                <a href="tel:555-555-5555">
                    Phone: <br>
                    555-555-5555
                </a>
            </p>
            <p>
                Hours of Operation: <br>
                Monday - Friday 9am - 4pm
            </p>
        </div>
        <div class="news">
            <h2>Newsletter</h2>
            <p>Subscribe to our email list and stay up-to-date with 
                our hottest offers and latest specials.
            </p>
            <form action="#">
                <input type="text" placeholder="Email..." required>
                <button type="submit" class="subscribe"> Subscribe </button>
            </form>
            
        </div>
        <div class="why">
            <h2>Why Cabot Cruises</h2>
            <p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacations including discounted cruises. <br>
                We do not sell travel to residents of Delaware, Iowa, Florida, Hawaii and Washington state because those states are just wierd. If you are a resident one of these states, call your congressman and tell them to change the regulations.
            </p>
        </div>
    </div>
</footer>
<!-- socials -->
<div class="socials">
    <a class="facebook fa fa-facebook-square fa-3x"></a>
    <a class="fa fa-youtube-square fa-3x"></a>
    <a class="fa fa-instagram fa-3x"></a>
    <a class="fa fa-pinterest-square fa-3x"></a>
    <a class="fa fa-twitter-square fa-3x"></a>
</div>
<!-- myInfo -->
<div class="myInfo">
    <p>&copy; Tyson Elfors &#9679; tysonelfors.com &#9679; Admin <a href="http://dgm3740.tysonelfors.com/WordPress/wp-admin/">Login</a> </p>
</div>

</div>
<!--Scripts-->
<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EntertainmentBusiness",
            "name": "Cabot Cruises",
            "telephone": "555-555-5555",
            "openingHours": "Mo,Tu,We,Th 09:00-12:00",
            "image": "https://images.pexels.com/photos/813011/pexels-photo-813011.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "800 W University Pkwy",
            "addressLocality": "Orem",
            "addressRegion": "UT",
            "postalCode": "84058",
            "addressCountry": "US"
            } 
        }
    </script>

    <script src="<?php echo get_template_directory_uri() ?>/menuToggle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/slick/slick.min.js"></script>
    
    <script>

        $(document).ready(function(){
            $('.mySlider').slick({
                autoplay: true,
                dots: true,
                arrows: false,
                cssEase: 'ease-out',
                speed: 2000,
                autoplaySpeed: 5000
            })
        })
    </script>
    
</body>
</html>