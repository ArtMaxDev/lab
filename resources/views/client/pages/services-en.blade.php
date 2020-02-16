@extends('client.master')

@section('meta-title', 'Screening and early diagnosis')
@section('description', 'Screening and early diagnosis')
@section('keywords', 'Screening, early diagnosis, cancer, test, miR-TEST')

@section('content')

    <main class="ot-page" id="services">
        <div class="ot-page-title">Screening and early diagnosis</div>
        <div class="ot-container">
            <ul class="ot-breadcrumbs">
                <li><a href="{{URL::to('/')}}">@lang('main.title')</a></li>
                <li><a href="/#services-2">Services</a></li>
                <li>SCREENING AND EARLY DIAGNOSIS</li>
            </ul>
            <!-- /.breadcrumbs -->

            <article class="ot-news-article">
                <h1 class="ot-news-article-title">SCREENING AND EARLY DIAGNOSIS</h1>

                <h3 class="ot-text-xs-center">Do I have cancer? Where do I check for cancer?</h3>

                <blockquote>
                    Early diagnosis and screening of cancer are extremely important components in fighting neoplasms. The main task is to detect the disease in the earliest stages, to diagnose and start treatment without delay
                </blockquote>
                <blockquote>
                    When should screening be conducted? When questions arise: "Do I have cancer? Where to begin with my diagnosis? " When there are disturbing symptoms, when there is a family history of cancer and when you take care of your health and your family’s health
                </blockquote>
                <blockquote>
                    Cancer is a pathological process that can be detected even before certain clinical manifestations
                    That is why we have developed a unique comprehensive "ONCO Check-Up" program, which includes a comprehensive assessment of the health status: the analysis of epigenetic markers - miRNAs, extensive blood and urine tests, that, combined with genetic counseling, provides a systemic diagnostic approach
                </blockquote>

                <picture>
                    <source srcset="/client/assets/images/static/services/img-1_tablet.jpg" media="(max-width: 768px)">
                    <source srcset="/client/assets/images/static/services/img-1_mobile.jpg" media="(max-width: 576px)">
                    <img src="/client/assets/images/static/services/img-1.jpg" alt="ONCO Check-Up">
                </picture>

                <h2 class="ot-text-xs-center">ONCO Check-Up</h2>

                <b class="ot-text-xs-center" style="display: block; font-size: 24px">You need to</b>

                <ul>
                    <li>contact the clinic</li>
                    <li>schedule an appointment at a convenient time</li>
                    <li>come for a consultation with a geneticist and an oncologist</li>
                    <li>provide both blood and urine samples</li>
                </ul>

                <p>Test results are presented in a convenient form with a detailed description and the best recommendations!
                    <span class="ot-pink"><b>Test prices start from 3950 UAH</b></span>
                </p>
            </article>
            <ul class="ot-service-list ot-service-2">
                <li class="ot-item">
                    <a href="javascript:void(0)" class="ot-link">
                        <img class="ot-img" src="/client/assets/images/static/services/s5.png" alt="sensitive and specific methods">
                        <strong class="ot-sub-text-small">Applying most informative, sensitive and specific methods in clinical trials</strong>
                    </a>
                </li>
                <li class="ot-item">
                    <a href="javascript:void(0)" class="ot-link">
                        <img class="ot-img" src="/client/assets/images/static/services/s6.png" alt="health status">
                        <strong class="ot-sub-text-small">Using integrated approach to assess patient’s health status</strong>
                    </a>
                </li>
                <li class="ot-item">
                    <a href="javascript:void(0)" class="ot-link">
                        <img class="ot-img" src="/client/assets/images/static/services/s7.png" alt="European standards">
                        <strong class="ot-sub-text-small">Innovation and translational principles using European standards</strong>
                    </a>
                </li>
                <li class="ot-item">
                    <a href="javascript:void(0)" class="ot-link">
                        <img class="ot-img" src="/client/assets/images/static/services/s8.png" alt="safe clinical methods">
                        <strong class="ot-sub-text-small">Minimally invasive and safe clinical methods</strong>
                    </a>
                </li>
            </ul>
            <!-- /.container -->
            <article class="ot-news-article">
                <p><b>If you can not visit the clinic personally or you already have a genetic map and basic clinical test results, we offer another version of the screening study miR-TEST</b></p>

                <picture>
                    <source srcset="/client/assets/images/static/services/img-2_tablet.jpg" media="(max-width: 768px)">
                    <source srcset="/client/assets/images/static/services/img-2_mobile.jpg" media="(max-width: 576px)">
                    <img src="/client/assets/images/static/services/img-2.jpg" alt="miR-TEST">
                </picture>

                <h2 class="ot-text-xs-center">miR-TEST</h2>

                <p class="ot-text-xs-center" style="font-size: 24px"><b>miR-TEST is based on the <a href="#">miRNA</a> analysis</b></p>

                <ul>
                    <li>Estimating miRNA levels in plasma can determine the risk of developing neoplasms in most localizations and predict the risk of relapse.</li>
                    <li>Circulating miRNAs are stable, selective and specific to certain types of neoplasms.</li>
                    <li>At "Oncotheranostics" clinic, we can individually select the miR-TEST option depending on the client’s wishes, and form a personal miRNA panel based on the client’s health status and lifestyle.</li>
                    <li>Completion time – 5 to 10 working days</li>
                </ul>
            </article>

            <section class="ot-cards" id="service-list">
                <div class="ot-card ot-card-pink">
                    <h4 class="ot-header">miR-TEST "Lady"</h4>
                    <p class="ot-title">Risk assessment for:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">breast cancer</li>
                        <li class="ot-item">cervical cancer</li>
                        <li class="ot-item">ovarian cancer</li>
                    </ul>
                    <div class="ot-bottom">starting at 4200 UAH</div>
                </div>
                <!-- /.card -->
                <div class="ot-card ot-card-pink">
                    <h4 class="ot-header">miR-TEST "Lady+"</h4>
                    <p class="ot-title">Risk assessment for:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">breast cancer</li>
                        <li class="ot-item">cervical cancer</li>
                        <li class="ot-item">ovarian cancer</li>
                        <li class="ot-item">intestinal cancer</li>
                        <li class="ot-item">stomach cancer</li>
                        <li class="ot-item">thyroid cancer</li>
                    </ul>
                    <div class="ot-bottom">starting at 6600 UAH</div>
                </div>
                <!-- /.card -->
                <div class="ot-card ot-card-blue">
                    <h4 class="ot-header">miR-TEST "Mister"</h4>
                    <p class="ot-title">Risk assessment for:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">lung cancer</li>
                        <li class="ot-item">prostate cancer</li>
                        <li class="ot-item">stomach cancer</li>
                    </ul>
                    <div class="ot-bottom">starting at 4200 UAH</div>
                </div>
                <!-- /.card -->
                <div class="ot-card ot-card-blue">
                    <h4 class="ot-header">miR-TEST "Mister"</h4>
                    <p class="ot-title">Risk assessment for:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">lung cancer</li>
                        <li class="ot-item">prostate cancer</li>
                        <li class="ot-item">stomach cancer</li>
                        <li class="ot-item">intestinal cancer</li>
                        <li class="ot-item">bladder cancer</li>
                        <li class="ot-item">kidney cancer</li>
                    </ul>
                    <div class="ot-bottom">starting at 6600 UAH</div>
                </div>
                <!-- /.card -->
                <div class="ot-card">
                    <h4 class="ot-header">miR-TEST «MONO»</h4>
                    <p class="ot-title">Risk assessment for:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">any chosen localization</li>
                    </ul>
                    <div class="ot-bottom">starting at 3000 UAH</div>
                </div>
                <!-- /.card -->
                <div class="ot-card">
                    <h4 class="ot-header">miR-TEST «MAXI»</h4>
                    <p class="ot-title">Risk assessment for:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item"></li>
                        <li class="ot-item">intestinal cancer</li>
                        <li class="ot-item">stomach cancer</li>
                        <li class="ot-item">thyroid cancer</li>
                        <li class="ot-item">lung cancer</li>
                        <li class="ot-item">bladder cancer</li>
                        <li class="ot-item">kidney cancer</li>
                        <li class="ot-item">liver cancer</li>
                        <li class="ot-item">pancreatic cancer</li>
                        <li class="ot-item">breast cancer</li>
                        <li class="ot-item">cervical cancer</li>
                        <li class="ot-item">ovarian cancer</li>
                        <li class="ot-item">prostate cancer</li>
                    </ul>
                    <div class="ot-bottom">starting at 10800 UAH</div>
                </div>
                <!-- /.card -->
            </section>
        </div>
        <!-- /.container -->

        <div class="ot-order">
            <div class="ot-container">
                <div class="ot-inner">
                    <div style="flex: 0 0 auto;">
                        <img src="/client/assets/images/static/order.png" alt="contact us" class="ot-img" width="137px">
                    </div>
                    <p class="ot-text">If you have any questions, leave your phone number and email address. We will contact you soon and help choose the best option for you.</p>
                    <div>
                        <button class="ot-btn js-scroll" data-target="#footer">Submit</button>
                    </div>
                </div>
                <!-- /.order-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.order -->

        @include('client.components.rnk-' . $currentLocale)
    </main>
    <!-- /#team -->
@endsection
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/news-item.css', 'client')}}">
    <link rel="stylesheet" href="{{mix('/assets/pages/services.css', 'client')}}">
@endpush
