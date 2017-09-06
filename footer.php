
<footer>
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        عن الشركة
                    </h3>
                    <p>
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                    </p>
                    <a href="" class="facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="" class="pinterest">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                    </a>
                    <a href="" class="google">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                    <a href="" class="twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="" class="linkedin">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-md-6">
                    <h3>
                        الاتصال بالشركة
                    </h3>
                    <ul class="contact-us list-unstyled">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            الامارات العربية المتحدة في منطقة بن راشد
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            2&nbsp;0101010101+
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            email@domain.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <p>
            جميع الحقوق محفوظة
        </p>
    </div>
</footer>

<!-- jQuery file -->
<?php  wp_footer(); ?>

<script>

    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqgEcKPivfnQ3sYeTgWqJSgvXa_KG_8A8&callback=initMap"
        async defer></script>
</body>
</html>