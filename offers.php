<?php /* Template Name: Offer */

  get_header(); ?>
<section class="content">

    <div class="top-bg-offer"></div>
    <section class="data">
        <h1>العروض</h1>
        <div class="container">
             <p class="mb-0">
              <button class="btn btn-info" type="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                عروض الفنادق 
              </button>
              <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
               عروض الطيران 
              </button>
            </p>
            
            <div class="collapse show" id="collapseExample">
              <div class="card card-block">
                    <div class="row">
                        <div class="col-md-6 ">
                            <img src="http://placehold.it/400x300" style="max-width: 100%;min-width: 100%;">
                        </div>
                         <div class="col-md-6">
                            <h1 class="mt-5">احجز غرفتك مبكرا - ادفع أقل </h1>
                             <p>قمنا بتصميم عرض لك لتبقى معنا لفترة أطول. احجز 21 يوما مقدما واحصل على خصم 15٪ على أفضل سعر متوفر </p>
                             <div class="price">
                                <span class="apd">ابتداء من</span>
                                <span class="from"> 298</span>
                                <span class="currency">درهم اماراتى</span>
                             </div>

                                <div class="btn-group mt-5" data-toggle="buttons">
                                  <button id="book" class="btn btn-primary active">
                                    احجز الان 
                                  </button>
                                  <button id="moreinfo" class="btn btn-primary">
                                    اعرف أكثر 
                                  </button>

                                </div>

                        </div>

                    </div>
                  <div class="row">
                       
                         <div class="col-md-6">
                            <h1 class="mt-5">العرض الشهري الخاص</h1>
                             <p class="mt-5">قمنا بتصميم عرض لك لتبقى معنا لفترة أطول. احجز 21 يوما مقدما واحصل على خصم 15٪ على أفضل سعر متوفر </p>
                             <div class="price">
                                <span class="apd">ابتداء من</span>
                                <span class="from"> 298</span>
                                <span class="currency">درهم اماراتى</span>
                             </div>

                                <div class="btn-group mt-5" data-toggle="buttons">
                                  <button id="book" class="btn btn-primary active">
                                    احجز الان 
                                  </button>
                                  <button id="moreinfo" class="btn btn-primary">
                                    اعرف أكثر 
                                  </button>


                                </div>

                        </div>
                       <div class="col-md-6 ">
                            <img src="http://placehold.it/400x300" style="max-width: 100%;min-width: 100%;">
                        </div>

                    </div>
                   <div class="row">
                        <div class="col-md-6 ">
                            <img src="http://placehold.it/400x300" style="max-width: 100%;min-width: 100%;">
                        </div>
                         <div class="col-md-6 float-left">
                            <h1 class="mt-5">اقامة أطول... سعرأقل</h1>
                             <p>قمنا بتصميم عرض لك لتبقى معنا لفترة أطول. احجز 21 يوما مقدما واحصل على خصم 15٪ على أفضل سعر متوفر </p>
                             <div class="price">
                                <span class="apd">ابتداء من</span>
                                <span class="from"> 298</span>
                                <span class="currency">درهم اماراتى</span>
                             </div>

                                <div class="btn-group mt-5" data-toggle="buttons">
                                 <button id="book" class="btn btn-primary active">
                                    احجز الان 
                                  </button>
                                  <button id="moreinfo" class="btn btn-primary">
                                    اعرف أكثر 
                                  </button>


                                </div>

                        </div>

                    </div>
              </div>
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

