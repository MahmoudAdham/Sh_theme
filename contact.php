<?php /* Template Name: Contact Us */

  get_header(); ?>
<section class="content">
        <h3 class="mb-5 text-center">تواصل معنا</h3>

       
    <section>
        <div class="container text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14951018.198501412!2d36.05718690758982!3d23.813231543245788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi+Arabia!5e0!3m2!1sen!2s!4v1505076570379" width="1000" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>    
    <section class="data">
        <div class="container">


        <div class="form text-center">
            <h4 class="mb-5">
                ارسل لنا رسالة
            </h4>

            <form class="row">
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" placeholder="الاسم" required>
                </div>
                <div class="form-group col-sm-6">
                    <input type="email" class="form-control" placeholder="البريد الالكترونى" required>
                </div>
                <div class="form-group col-sm-12">
                    <textarea class="form-control" placeholder="الرسالة" required></textarea>
                </div>
                <button type="submit" class="btn">
                    ارسال
                </button>
            </form>
        </div>
    </div>
    </section>



</section>


<?php get_footer(); ?>
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

