@extends('layouts.master')

@section('contents')

<section class="banner-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2>Your Personal Document Manager</h2>
        <div class="left-content">
          <p>Getonatop. Developed by people who are bored by personal and household paperwork. Who hate spending time filing bills, policies or any other documents. Who would rather be out in the sun (or rain...) having good times with friends and family...</p>
          <p>...People who want to know they have taken care of EVERYTHING!</p>
        </div>
        <div class="app-stores">
          <a class="watch-vid" href="#">
            <span>Watch our video</span><i class="fa fa-play-circle"></i>
          </a>
          <div class="mobile-app-stores">
            <a class="apple-app" href="#"><img src="{{ asset('imgs/appstore.png') }}" alt="App store" class="m-right" /></a>
            <a href="android-app" href="#"><img src="{{ asset('imgs/playstore.png') }}" alt="Play store" /></a>
          </div>
          <p>Putting your paperwork in it’s place!</p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="phones">
          <div class="android-phone">
            <img src="{{ asset('imgs/android-phone.png') }}" alt="Android Phone" />
          </div>
          <div class="apple-phone">
            <img src="{{ asset('imgs/apple-phone.png') }}" alt="Apple Phone" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="featured-contents">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="new-idea">
          <img src="{{ asset('imgs/new-idea.png') }}" alt="New idea" />
          <h3>A new Idea</h3>
          <p>Getonatop apps give you centralised, shareable mobile storage with no clutter and no adverts, just fresh and intuitive screens that are suitable for all age groups. So simple, so fast, so versatile, so you can access everything that matters anytime, anywhere.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="sorted">
          <img src="{{ asset('imgs/sorted.png') }}" alt="Sorted" />
          <h3>Sorted</h3>
          <p>Organise your paperwork with minimal input thanks to comprehensive drop-down lists. (You don’t have to add much, but it will help you!) Upload photos or screenshots of documents in seconds. Find it all quickly and easily with little fuss.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="never-forget">
          <img src="{{ asset('imgs/never-forget.png') }}" alt="Sorted" />
          <h3>Never Forget</h3>
          <p>Getonatop will remind you when you can and should make a change.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="security">
          <img src="{{ asset('imgs/security.png') }}" alt="Sorted" />
          <h3>Bank-grade Security</h3>
          <p>Choose your own Getonatop login details and passcode.  Your data is uploaded to your free storage facility (not on your mobile device) with 128-bit AES security, transferred with 2048 bit SSL and stored using AES encryption. And rest assured.., your data is <strong>never</strong> sold on to third parties.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="vid-content text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/YykjpeuMNEk" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

<section class="feature-coming-soon text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img src="{{ asset('imgs/star.png') }}" alt="Feature Coming Soon" class="img-responsive i-block" />
        <h2>Features coming soon</h2>
        <p>Getonatop apps are getting even more great features very soon.  We are going to tell you when they are ready.., but keeping checking anyway. We know you are going to love them too!</p>
      </div>
    </div>
  </div>
</section>

<section class="app-btn text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Ready to get started?</h2>
        <p>Download the Get Onatop app today</p>
        <div class="app-cta">
          <a href="#"><img src="{{ asset('imgs/appstore-dark.png') }}" alt="Appstore" class="m-right" /></a>
          <a href="#"><img src="{{ asset('imgs/playstore-dark.png') }}" alt="Appstore" /></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img src="{{ asset('imgs/msg.png') }}" alt="Msg" />
        <p>If you would like to know more about Getonatop and why we have put it together for you, if you are interested in helping us grow, or if you want to invest, then please get in touch: <a href="mailto:info@getonatop.com">info@getonatop.com</a>. We would love to hear from you!</p>
      </div>
    </div>
  </div>
</section>

@stop
