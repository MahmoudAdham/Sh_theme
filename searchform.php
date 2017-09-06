
<div class="container">
    <div class="search" id="search">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#flight" role="tab">الرحلات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">الفنادق</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="flight" role="tabpanel">
                <h3>أين تريد أن تذهب ؟</h3>

                <form action="">
                    <div class="row no-gutters">
                        <div class="col-md-3 mr-l-form">
                            <input type="text" class="form-control" placeholder="المكان المراد زيارته" >
                        </div>
                        <div class="col-md-2 mr-l-form">
                            <select class="form-control custom-select">
                                <option>من</option>
                                <option>فلسطين</option>
                                <option>مصر</option>
                                <option>السعودية</option>
                            </select>
                        </div>
                        <div class="col-md-2 mr-l-form">
                            <select class="form-control custom-select">
                                <option>إلى</option>
                                <option>فلسطين</option>
                                <option>مصر</option>
                                <option>السعودية</option>
                            </select>
                        </div>
                        <div class="col-md-2 mr-l-form">
                            <select class="form-control custom-select">
                                <option>نوع الرحلة</option>
                                <option>ثقافية</option>
                                <option>ترفيهية</option>
                                <option>شهر عسل</option>
                            </select>
                        </div>
                        <div class="col-md-2 mr-l-form">
                            <input type="text" class="form-control" placeholder="الحد الأقصى للميزانية" >
                        </div>

                        <button class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel">
                <h3>أبحث عن الفندق المناسب</h3>
                <form action="">
                    <div class="row no-gutters">
                        <div class="col-md-3 mr-l-form">
                            <input type="text" class="form-control" placeholder="اسم الفندق" >
                        </div>
                        <div class="col-md-2 mr-l-form">
                            <div class="input-group date">
                                <input type="text" id="datepicker" class="form-control" placeholder="تاريخ الوصول" >
                            </div>
                        </div>
                        <div class="col-md-2 mr-l-form">
                            <div class="input-group date">
                                <input type="text" id="datepicker2" class="form-control" placeholder="تاريخ المغادرة" >
                            </div>
                        </div>
                        <div class="col-md-2 mr-l-form">
                            <select class="form-control custom-select">
                                <option>1 الغرف</option>
                                <option>2 الغرف</option>
                                <option>3 الغرف</option>
                                <option>4 الغرف</option>
                            </select>
                        </div>
                        <div class="col-md-2 mr-l-form">
                            <select class="form-control custom-select">
                                <option>1 الضيوف</option>
                                <option>2 الضيوف</option>
                                <option>3 الضيوف</option>
                                <option>4 الضيوف</option>
                            </select>
                        </div>

                        <button class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>