@extends('website.layouts.layout-website')
@section('content')
<!-- Start Main Banner Area -->
<div class="main-banner">
      <div class="main-banner-item banner-item-three">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">
              <div class="main-banner-content">
                <span>مدونات</span>
                <h1>موقع فكرة لتبقى على تواصل بالعالم</h1>
                <p>نقدم لك مدونات متنوعة في شتى المجالات مع أمهر كاتبي المحتوى لتثقف نفسك ومن حولك</p>
                <div class="banner-btn">
                  <a href="#" class="default-btn">
                  تصفح المدونات
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-banner-shape">
        <div class="banner-bg-shape">
          <img data-cfsrc="{{asset('website-assets/img/main-banner/banner-bg-shape-1.png')}}" class="white-image" alt="image" style="display:none;visibility:hidden;">
          <noscript><img src="{{asset('website-assets/img/main-banner/banner-bg-shape-1.png')}}" class="white-image" alt="image"></noscript>
          <img data-cfsrc="{{asset('website-assets/img/main-banner/banner-bg-shape-1-dark.png')}}" class="black-image" alt="image" style="display:none;visibility:hidden;">
          <noscript><img src="{{asset('website-assets/img/main-banner/banner-bg-shape-1-dark.png')}}" class="black-image" alt="image"></noscript>
        </div>
        <div class="banner-bg-shape-2">
          <img data-cfsrc="{{asset('website-assets/img/main-banner/banner-bg-shape-2.png')}}" class="white-image" alt="image" style="display:none;visibility:hidden;">
          <noscript><img src="{{asset('website-assets/img/main-banner/banner-bg-shape-2.png')}}" class="white-image" alt="image"></noscript>
          <img data-cfsrc="{{asset('website-assets/img/main-banner/banner-bg-shape-2-dark.png')}}" class="black-image" alt="image" style="display:none;visibility:hidden;">
          <noscript><img src="{{asset('website-assets/img/main-banner/banner-bg-shape-2-dark.png')}}" class="black-image" alt="image"></noscript>
        </div>
        <div class="banner-child">
          <div class="child-1">
            <img data-cfsrc="{{asset('website-assets/img/main-banner/child-1.png')}}" alt="image" style="display:none;visibility:hidden;">
            <noscript><img src="{{asset('website-assets/img/main-banner/child-1.png')}}" alt="image"></noscript>
          </div>
          <div class="child-2">
            <img data-cfsrc="{{asset('website-assets/img/main-banner/child-2.png')}}" alt="image" style="display:none;visibility:hidden;">
            <noscript><img src="{{asset('website-assets/img/main-banner/child-2.png')}}" alt="image"></noscript>
          </div>
        </div>
      </div>
    </div>
    <!-- End Main Banner Area -->
    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-fun-fact">
              <h3>
                <span class="odometer" data-count="1200">00</span>
              </h3>
              <p>Students</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-fun-fact bg-1">
              <h3>
                <span class="odometer" data-count="305">00</span>
              </h3>
              <p>Teachers</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-fun-fact bg-2">
              <h3>
                <span class="odometer" data-count="48">00</span>
              </h3>
              <p>Classroom</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-fun-fact bg-3">
              <h3>
                <span class="odometer" data-count="50">00</span>
              </h3>
              <p>Bus</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Fun Facts Area -->
    <!-- Start Class Area -->
    <section class="class-area bg-fdf6ed pt-100 pb-70">
      <div class="container">
        <div class="section-title">
          <span>المدونات</span>
          <h2>أحدث المدونات</h2>
        </div>
        <div class="row">
            @foreach($posts as $post)
          <div class="col-lg-4 col-md-6">
            <div class="single-class">
              <div class="class-image">
                <a href="#">
                  <img data-cfsrc="{{asset('website-assets/img/class/class-1.jpg')}}" alt="image" style="display:none;visibility:hidden;">
                  <noscript><img src="{{asset('website-assets/img/class/class-1.jpg')}}" alt="image"></noscript>
                </a>
              </div>
              <div class="class-content">
                <div class="price">{{$post->category->name}}</div>
                <h3>
                  <a href="#">{{$post->title}}</a>
                </h3>
                <p>{!!Str::limit($post->details, 60)!!}</p>
                <ul class="class-list">
                  <li>
                    <span> تاريخ الإنشاء: </span> 
                    {{explode(' ', $post->created_at)[0]}}
                  </li>
                </ul>
                <div class="class-btn">
                  <a href="#" class="default-btn">التفاصيل</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="class-shape">
        <div class="shape-1">
          <img data-cfsrc="{{asset('website-assets/img/class/class-shape-1.png')}}" alt="image" style="display:none;visibility:hidden;">
          <noscript><img src="{{asset('website-assets/img/class/class-shape-1.png')}}" alt="image"></noscript>
        </div>
        <div class="shape-2">
          <img data-cfsrc="{{asset('website-assets/img/class/class-shape-2.png')}}" alt="image" style="display:none;visibility:hidden;">
          <noscript><img src="{{asset('website-assets/img/class/class-shape-2.png')}}" alt="image"></noscript>
        </div>
      </div>
    </section>
    <!-- End Class Area -->
    <!-- Start Gallery Area -->
    <div class="gallery-area pt-100 pb-70">
      <div class="container">
        <div class="section-title">
          <span>التواصل</span>
          <h2>نسعد بتواصلك معنا</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single-gallery-box">
              <img data-cfsrc="{{asset('website-assets/img/gallery/gallery-1.jpg')}}" alt="image" style="display:none;visibility:hidden;">
              <noscript><img src="{{asset('website-assets/img/gallery/gallery-1.jpg')}}" alt="image"></noscript>
              <a href="{{asset('website-assets/img/gallery/gallery-1.jpg')}}" class="gallery-btn" data-imagelightbox="popup-btn">
              <i class='bx bx-search-alt'></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-gallery-box">
              <img data-cfsrc="{{asset('website-assets/img/gallery/gallery-2.jpg')}}" alt="image" style="display:none;visibility:hidden;">
              <noscript><img src="{{asset('website-assets/img/gallery/gallery-2.jpg')}}" alt="image"></noscript>
              <a href="{{asset('website-assets/img/gallery/gallery-2.jpg')}}" class="gallery-btn" data-imagelightbox="popup-btn">
              <i class='bx bx-search-alt'></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-gallery-box">
              <img data-cfsrc="{{asset('website-assets/img/gallery/gallery-3.jpg')}}" alt="image" style="display:none;visibility:hidden;">
              <noscript><img src="{{asset('website-assets/img/gallery/gallery-3.jpg')}}" alt="image"></noscript>
              <a href="{{asset('website-assets/img/gallery/gallery-3.jpg')}}" class="gallery-btn" data-imagelightbox="popup-btn">
              <i class='bx bx-search-alt'></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-gallery-box">
              <img data-cfsrc="{{asset('website-assets/img/gallery/gallery-4.jpg')}}" alt="image" style="display:none;visibility:hidden;">
              <noscript><img src="{{asset('website-assets/img/gallery/gallery-4.jpg')}}" alt="image"></noscript>
              <a href="{{asset('website-assets/img/gallery/gallery-4.jpg')}}" class="gallery-btn" data-imagelightbox="popup-btn">
              <i class='bx bx-search-alt'></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-gallery-box">
              <img data-cfsrc="{{asset('website-assets/img/gallery/gallery-5.jpg')}}" alt="image" style="display:none;visibility:hidden;">
              <noscript><img src="{{asset('website-assets/img/gallery/gallery-5.jpg')}}" alt="image"></noscript>
              <a href="{{asset('website-assets/img/gallery/gallery-5.jpg')}}" class="gallery-btn" data-imagelightbox="popup-btn">
              <i class='bx bx-search-alt'></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-gallery-box">
              <img data-cfsrc="{{asset('website-assets/img/gallery/gallery-6.jpg')}}" alt="image" style="display:none;visibility:hidden;">
              <noscript><img src="{{asset('website-assets/img/gallery/gallery-6.jpg')}}" alt="image"></noscript>
              <a href="{{asset('website-assets/img/gallery/gallery-6.jpg')}}" class="gallery-btn" data-imagelightbox="popup-btn">
              <i class='bx bx-search-alt'></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Gallery Area -->
    <!-- Start Quote Area -->
    <section class="quote-area pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="quote-image"></div>
          </div>
          <div class="col-lg-6">
            <div class="quote-item">
              <div class="content">
                <h5>ادخل بيانات الاتصال</h5>
              </div>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="اسمك">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="بريدك الالكتروني">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="الموضوع">
                </div>
                <div class="form-group">
                  <textarea class="form-control pt-4"  placeholder="التفاصيل"></textarea>
                </div>
                <button type="submit" class="default-btn">
                ارسال
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Quote Area -->
@endsection