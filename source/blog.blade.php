@extends('_layouts.main')

@section('body')
@include('_partials.components.vertical-lines')
<div class="blog-side-launcher" data-id="blog-side">
    <ion-icon name="chevron-back-outline" class="blog_side_launcher_icon"></ion-icon>
</div>
<div class="blog-side panel-overlay-from-right-blog blog-side-launch"></div>
<div class="blog-side panel-from-left-blog">
    {{-- blog sidebar wrapper start --}}
    <div class="blog-sidebar-wrapper">
        {{-- blog search bar start --}}
        <div class="blog-search">
            <form action="#" class="">
                <input name="search" id="search" type="text" class="search" placeholder="Type and hit enter" value="">
                <button id="submit-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </form>
        </div>
        {{-- blog search bar end --}}
        {{-- divider start --}}
        <div class="inner-divider-half"></div>
        {{-- divider end --}}
        {{-- blog recent posts start --}}
        <div class="blog-side-heading">
            <h3>
                Recent <span>Posts</span>
            </h3>
        </div>
        {{-- divider start --}}
        <div class="blog_side_inner-divider-50"></div>
        {{-- divider end --}}
        <div class="blog-side-text-wrapper">
            <div class="blog-side-text">
                <a href="news-01.html">
                Simplicity is Complex
                </a>
            </div>
        </div>
        <div class="blog-side-text-wrapper">
            <div class="blog-side-text">
                <a href="news-02.html">
                Design is a Process
                </a>
            </div>
        </div>
        <div class="blog-side-text-wrapper">
            <div class="blog-side-text">
                <a href="news-03.html">
                Aesthetic is a Decision
                </a>
            </div>
        </div>
        <div class="blog-side-text-wrapper">
            <div class="blog-side-text">
                <a href="news-04.html">
                Style is Everything
                </a>
            </div>
        </div>
        {{-- blog recent posts end --}}
        {{-- divider start --}}
        <div class="inner-divider-half"></div>
        {{-- divider end --}}
        {{-- blog recent comments start --}}
        <div class="blog-side-heading">
            <h3>
                Recent <span>Comments</span>
            </h3>
        </div>
        {{-- divider start --}}
        <div class="blog_side_inner-divider-50"></div>
        {{-- divider end --}}
        <div class="blog-side-text-wrapper">
            <div class="blog-side-text">
                <a href="news-01.html">
                John Ex on Simplicity is Complex
                </a>
            </div>
        </div>
        <div class="blog-side-text-wrapper">
            <div class="blog-side-text">
                <a href="news-02.html">
                Jane Ex on Design is a Process
                </a>
            </div>
        </div>
        <div class="blog-side-text-wrapper">
            <div class="blog-side-text">
                <a href="news-03.html">
                John Ex on Aesthetic is a Decision
                </a>
            </div>
        </div>
        <div class="blog-side-text-wrapper">
            <div class="blog-side-text">
                <a href="news-04.html">
                Jane Ex on Style is Everything
                </a>
            </div>
        </div>
        {{-- blog recent comments end --}}
    </div>
    {{-- blog sidebar wrapper end --}}
</div>
<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all post-spacing">
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- divider start --}}
                    <div class="inner-divider"></div>
                    {{-- divider end --}}
                    {{-- line start --}}
                    <div class="the-line"></div>
                    {{-- line end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- section title start --}}
                    <h1 class="blog_main_title main-title-all">
                        Simplicity<br>
                        <span>is complex</span>
                    </h1>
                    {{-- section title end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                    {{-- section title start --}}
                    <div class="subtitle subtitle-news">April 1, 2023</div>
                    {{-- section title end --}}
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                    {{-- line start --}}
                    <div class="the-line"></div>
                    {{-- line end --}}
                    {{-- divider start --}}
                    <div class="inner-divider"></div>
                    {{-- divider end --}}
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container container-fix">
        <div class="extra-margin-all post-spacing">
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    <div class="post-spacing-3">
                        {{-- section txt start --}}
                        <div class="intro">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            <span>ever since the 1500s</span>.                            
                        </div>
                        {{-- section txt end --}}
                        {{-- divider start --}}
                        <div class="inner-divider-half"></div>
                        {{-- divider end --}}
                        {{-- section txt start --}}
                        <div class="section-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            {{-- divider start --}}
                            <div class="inner-divider-half"></div>
                            {{-- divider end --}}
                            <div class="blog-quote">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                            {{-- divider start --}}
                            <div class="inner-divider-half"></div>
                            {{-- divider end --}}
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        {{-- section txt end --}}
                    </div>
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- divider start --}}
            <div class="inner-divider"></div>
            {{-- divider end --}}
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all">
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12 popup-photo-gallery">
                    {{-- showcase start --}}
                    <div class="showcase showcase-all">
                        <div class="showcase-img-right">
                            <img src="/assets/build/img/blog/blog_right_img.jpg" alt="right photo">
                        </div>
                    </div>
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            <div class="inner-divider"></div>
        </div>
        <div class="extra-margin-all">
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12 popup-photo-gallery">
                    {{-- showcase start --}}
                    <div class="showcase showcase-all">
                        <div class="showcase-img-left">
                            <img src="assets/build/img/blog/blog_left_img.jpg" alt="left photo">
                        </div>
                    </div>
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            <div class="inner-divider"></div>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container container-fix">
        <div class="extra-margin-all post-spacing">
            {{-- divider start --}}
            <div class="inner-divider"></div>
            {{-- divider end --}}
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- section title start --}}
                    <div class="subtitle subtitle-light">The Context</div>
                    {{-- section title end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                    <div class="post-spacing-3">
                        {{-- section txt start --}}
                        <div class="intro">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            <span>ever since the 1500s</span>.                            
                        </div>
                        {{-- section txt end --}}
                        {{-- divider start --}}
                        <div class="inner-divider-half"></div>
                        {{-- divider end --}}
                        {{-- section txt start --}}
                        <div class="section-txt">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s.                                                                
                            </p>
                        </div>
                        {{-- section txt end --}}
                    </div>
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- divider start --}}
            <div class="inner-divider"></div>
            {{-- divider end --}}
        </div>
    </div>
</div>

<div class="bg-light pb-5">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all">
            <div class="works-section">
                <div class="container-fluid no-mrg-pdg">
                    <div class="row no-gutter">
                        <div class="col-md-12">
                            {{-- item start --}}
                            <div class="box-img">
                                {{-- item IMG start --}}
                                <div class="img-fullwidth-all">
                                    <img alt="Img" src="assets/build/img/blog/blog_full_img.jpg">
                                </div>
                                {{-- item IMG end --}}
                            </div>
                            {{-- item end --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="bg-light mt-5 pt-5">
    <div class="container container-fix">
        <div class="extra-margin-all post-spacing">
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    <div class="post-spacing-3">
                        {{-- section txt start --}}
                        <div class="intro">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            <span>ever since the 1500s</span>.                            
                        </div>
                        {{-- section txt end --}}
                        {{-- divider start --}}
                        <div class="inner-divider-half"></div>
                        {{-- divider end --}}
                        {{-- section txt start --}}
                        <div class="section-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            {{-- divider start --}}
                            <div class="inner-divider-half"></div>
                            {{-- divider end --}}
                            <div class="blog-quote">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                            {{-- divider start --}}
                            <div class="inner-divider-half"></div>
                            {{-- divider end --}}
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        {{-- section txt end --}}
                    </div>
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- divider start --}}
            <div class="inner-divider"></div>
            {{-- divider end --}}
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container container-fix">
        <div class="extra-margin-all post-spacing">
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    <div class="post-spacing-3">
                        {{-- section subtitle start --}}
                        <div class="intro">
                            Recent comments
                        </div>
                        {{-- section subtitle end --}}
                        {{-- divider start --}}
                        <div class="inner-divider-half"></div>
                        {{-- divider end --}}
                        {{-- blog comments start --}}
                        <div class="blog-comments">
                            <div class="comments">
                                {{-- blog comment start --}}
                                <article>
                                    <h4>
                                        <a class="comment-name" href="#">John Ex</a>
                                        <span class="comment-time"> · April 1, 2023</span>
                                    </h4>
                                    {{-- divider start --}}
                                    <div class="inner-divider-half"></div>
                                    {{-- divider end --}}
                                    <div class="profile-photo">
                                        <img src="assets/build/img/blog/profile_pic1.jpg" alt="Img">
                                    </div>
                                    {{-- divider start --}}
                                    <div class="inner-divider-half"></div>
                                    {{-- divider end --}}
                                    <p>
                                        Thank you for visiting all the way from New York. This is just a test to determine if the Twitter API is working as it should. You should see
                                        your profile image and your username at the very top that links to your account. You should also see that I wrote in a thank you introduction
                                        with your location.
                                    </p>
                                </article>
                                {{-- blog comment end --}}
                                {{-- divider start --}}
                                <div class="inner-divider-half"></div>
                                {{-- divider end --}}
                                {{-- blog comment responce start --}}
                                <article class="comment-responce">
                                    <h4>
                                        <a class="comment-name" href="#">Jane Ex</a>
                                        <span class="comment-time"> · April 1, 2023</span>
                                    </h4>
                                    {{-- divider start --}}
                                    <div class="inner-divider-half"></div>
                                    {{-- divider end --}}
                                    <div class="profile-photo">
                                        <img src="assets/build/img/blog/profile_pic2.jpg" alt="Img">
                                    </div>
                                    {{-- divider start --}}
                                    <div class="inner-divider-half"></div>
                                    {{-- divider end --}}
                                    <p>
                                        Thank you for visiting all the way from New York. This is just a test to determine if the Twitter API is working as it should. You should see
                                        your profile image and your username at the very top that links to your account. You should also see that I wrote in a thank you introduction
                                        with your location.
                                    </p>
                                </article>
                                {{-- blog comment responce end --}}
                            </div>
                        </div>
                        {{-- blog comments end --}}
                    </div>
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- divider start --}}
            <div class="inner-divider"></div>
            {{-- divider end --}}
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container container-fix">
        <div class="extra-margin-all post-spacing">
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div>
                    <div>
                        {{-- section subtitle start --}}
                        <div class="intro intro-last">
                            Leave a comment
                        </div>
                        {{-- section subtitle end --}}
                        {{-- divider start --}}
                        <div class="inner-divider-half"></div>
                        {{-- divider end --}}
                        {{-- contact form start --}}
                        <div id="contact-form-2">
                            <form action="contact.php" id="form" method="post" name="send">
                                <div class="row">
                                    {{-- col start --}}
                                <div class="d-flex col-sm-6 col-md-6 col-lg-6">
                                    <input class="requiredField name" id="name" name="name" placeholder="Name" type="text">
                                </div>
                                {{-- col end --}}
                                {{-- col start --}}
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <input class="requiredField email" id="email" name="email" placeholder="Email" type="text">
                                </div>
                                {{-- col end --}}
                                {{-- col start --}}
                                <div class="col-12 mt-2">
                                    <textarea class="requiredField message" id="message" name="message" placeholder="Comment"></textarea>
                                </div>
                                </div>
                                {{-- col end --}}
                                <div>
                                    {{-- button start --}}
                                    <div class="more-wraper-center more-wraper-center-form">
                                        <button class="button button-effect">
                                            <i class="pulse"></i>
                                            <div class="more-button-txt-center more-button-txt-center-form">
                                                <span>Submit</span>                                                                        
                                            </div>
                                        </button>
                                    </div>
                                    {{-- button end --}}
                                </div>
                            </form>
                        </div>
                        {{-- contact form end --}}
                    </div>
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all post-spacing">
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- divider start --}}
                    <div class="inner-divider"></div>
                    {{-- divider end --}}
                    {{-- line start --}}
                    <div class="the-line"></div>
                    {{-- line end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- section title start --}}
                    <div class="subtitle subtitle-light">Next Entry</div>
                    {{-- section title end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                    {{-- section title start --}}
                    <h1 class="main-title main-title-all">
                        <a href="news-02.html">
                        Design is<br>
                        <span>a process</span>
                        </a>
                    </h1>
                    {{-- section title end --}}
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                    {{-- line start --}}
                    <div class="the-line"></div>
                    {{-- line end --}}
                    {{-- divider start --}}
                    <div class="inner-divider inner-divider-last"></div>
                    {{-- divider end --}}
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
        </div>
    </div>
</div>
@endsection