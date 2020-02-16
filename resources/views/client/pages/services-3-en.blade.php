@extends('client.master')

@section('title', 'Oncohematological studies')
@section('meta-title', 'Oncohematological studies')
@section('description', 'Oncohematological studies - Clinic for Personalized Diagnostics and Therapy Design')
@section('keywords', 'Oncohematological studies')
@section('content')

    <main class="ot-page" id="services">
        <div class="ot-page-title">Oncohematological studies</div>
        <div class="ot-container">
            <ul class="ot-breadcrumbs">
                <li><a href="{{URL::to('/')}}">@lang('main.title')</a></li>
                <li><a href="/#services-2">Services</a></li>
                <li>Oncohematological studies</li>
            </ul>
            <!-- /.breadcrumbs -->

            <article class="ot-news-article">
                <h1 class="ot-news-article-title">Oncohematological studies</h1>

                <picture>
                    <source srcset="/client/assets/images/static/s3-img-2_tablet-en.jpg" media="(max-width: 830px)">
                    <source srcset="/client/assets/images/static/s3-img-2_mobile-en.jpg" media="(max-width: 555px)">
                    <img src="/client/assets/images/static/s3-img-2-en.jpg" alt="Diagnosis of oncohematological diseases is achieved on the basis of a comprehensive study of peripheral blood and bone marrow specimens">
                </picture>
                <h2 class="ot-subtitle ot-pink">In accordance with the current WHO classification (2016), we carry out the diagnosis of the following oncohematological diseases:</h2>

                <ul>
                    <li>acute myeloid and lymphoblastic leukemia;</li>
                    <li>B-, T- and NK-cell lymphoproliferative diseases (B-cell chronic lymphocytic leukemia, B- and T-prolymphocytic leukemia, hairy cell leukemia, B-cell non-Hodgkin's lymphomas in leukemic phase);</li>
                    <li>myeloid neoplasms (chronic myelogenous leukemia, true polycythemia, primary myelofibrosis, essential thrombocythemia);</li>
                    <li>plasma cell tumors (multiple myeloma, etc.);</li>
                    <li>myelodysplastic syndromes;</li>
                    <li>myelodysplastic/myeloproliferative tumors;</li>
                    <li>tumors of histiocytes and dendritic cells.</li>
                </ul>

                <h3 class="ot-ul-title ot-blue">For diagnostics we use:</h3>

                <blockquote>
                    <div>Cytomorphological methods</div>
                </blockquote>
                <blockquote>
                    <div>Cytochemical methods</div>
                    <p>Also testing the activity of: myeloperoxidase, acid phosphatase, acid nonspecific esterase, naphthol-AS-D-chloroacetatesterase, alkaline phosphatase. Performing PAS-reaction to measure the glycogen content in the cells.</p>
                </blockquote>
                <blockquote>
                    <div>Immunophenotyping</div>
                    <p>Modern comprehensive study, which, due to the simultaneous registration of several parameters, provides greater accuracy in determining the nature of malignantly transformed hematopoietic and lymphoid cells and is the basis for effective treatment.</p>
                </blockquote>

                <picture>
                    <source srcset="/client/assets/images/static/s3-img_tablet.jpg" media="(max-width: 992px)">
                    <source srcset="/client/assets/images/static/s3-img_mobile.jpg" media="(max-width: 768px)">
                    <img style="margin: 60px 0" src="/client/assets/images/static/s3-img.jpg" alt="Diagnosis">
                </picture>
            </article>
        </div>
        <!-- /.container -->

    </main>
    <!-- /#team -->
@endsection
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/news-item.css', 'client')}}">
    <link rel="stylesheet" href="{{mix('/assets/pages/services-2.css', 'client')}}">
@endpush
