{{--
  Template Name: Frame About Template
--}}

@extends('layouts.base')

@section('content')
  <section class="about">
    <header class="row section-a">
      <div class="offset-lg-2 col-lg-7 offset-md-1 col-md-5 col-xl-5">
        <h1 class="main-title">Here's how it works:</h1>
      </div>
    </header>
    <section class="row section-b">
      <header class="col-md-6 offset-md-1 col-lg-5 offset-lg-2">
        <img src="https://www.tryfra.me/wp-content/uploads/2017/04/meh.png" alt="Take that first shot">
        <h1>When you<br>open <strong>FRAME,</strong></h1>
        <p>take that first shot. A transparent overlay of the image will appear.</p>
      </header>
      <div class="col-md-4 col-lg-3">
        <img class="iphone-preview" src="https://www.tryfra.me/wp-content/uploads/2017/04/iphone-first.png" alt="iPhone Preview (First Shot)">
      </div>
      <img src="https://www.tryfra.me/wp-content/uploads/2017/04/zigzag-between-a-b.png" alt="This is a decorative zigzag" class="zigzag-decoration">
      <img src="https://www.tryfra.me/wp-content/uploads/2017/04/big-circle-between-a-b.png" alt="This is a decorative circle" class="circle-decoration">
      <img src="https://www.tryfra.me/wp-content/uploads/2017/04/trigangle-section-a.png" alt="This is a decorative triangle" class="triangle-decoration">
    </section>
    <section class="row section-c">
      <div class="col-md-4 col-lg-3 offset-lg-2 offset-md-1">
        <img class="iphone-preview not-mobile" src="https://www.tryfra.me/wp-content/uploads/2017/04/iphone-ghost.png" alt="iPhone Preview (Ghost Feature)">
      </div>
      <header class="col-md-6 col-lg-5">
        <img src="https://www.tryfra.me/wp-content/uploads/2017/04/ah.png" alt="Use ghost!">
        <h1>Using<br>this <strong>ghost,</strong></h1>
        <p>you can easily align the size and position of your subject for the next frame. Continue taking snapshots, until you’ve captured your storyboard. Then, export your frames directly from the app into a gif, mp4, mov—whatever floats your file boat.</p>
      </header>
      <div class="col">
        <img class="iphone-preview mobile" src="https://www.tryfra.me/wp-content/uploads/2017/04/iphone-ghost.png" alt="iPhone Preview (Ghost Feature)">
      </div>
      <img src="https://www.tryfra.me/wp-content/uploads/2017/04/rect-section-b.png" alt="This is a decorative square" class="square-decoration">
      <img src="https://www.tryfra.me/wp-content/uploads/2017/04/down-caret-b.png" alt="This is a decorative caret" class="down-caret-decoration">
    </section>
    <section class="row section-d">
      <img class="zigzag-decoration" src="https://www.tryfra.me/wp-content/uploads/2017/04/zigzag-between-b-c.png" alt="This is just a decorative zigzag">
      <header class="col-md-6 offset-md-1 col-lg-5 offset-lg-2">
        <img src="https://www.tryfra.me/wp-content/uploads/2017/04/ahu.png" alt="The Result!">
        <h1>The <strong>result?</strong></h1>
        <p>A high-quality animation any content perfectionist could be proud of.</p>
      </header>
      <div class="col-lg-3 col-md-4">
        <img class="iphone-preview" src="https://www.tryfra.me/wp-content/uploads/2017/04/iphone-result.png" alt="iPhone Preview (Result)">
      </div>
      <img src="https://www.tryfra.me/wp-content/uploads/2017/04/side-triangle-section-d.png" alt="This is just some decorative image, pay no attention" class="side-caret-decoration">
    </section>
    <section class="row section-e">
      <img class="polygon-decoration" src="https://www.tryfra.me/wp-content/uploads/2017/04/polygon-section-d.png" alt="This is a decorative polygon">
      <img src="https://www.tryfra.me/wp-content/uploads/2017/04/big-circle-bet-c-d.png" alt="This is a decorative circle" class="circle-decoration">
      <img src="https://www.tryfra.me/wp-content/uploads/2017/04/down-triangle-top-sect-d.png" alt="This is a decorative triangle" class="triangle-decoration">
      <img src="https://www.tryfra.me/wp-content/uploads/2017/04/rect-section-d.png" alt="This is a decorative square" class="square-decoration">
      <img class="top-ih" src="https://www.tryfra.me/wp-content/uploads/2017/04/top-ih-section.png" alt="Another Decorative Image Here Goes">
      <div class="w-100"></div>
      <header class="offset-md-2 col-md-8">
        <h1 class="main-title">
          Meet <span class="ih-blue">In-House<br>International</span>
        </h1>
      </header>
      <div class="offset-md-3 col-md-6">
        <img class="ih-logo" src="http://www.weareinhouse.com/wp-content/themes/inHouse2/dist/images/full_logo.png" alt="In-House Logo">
        <p>Based in Austin, Texas, we’re a ragtag group of illustrators, branding nerds and UI/UX folk who think the world could use better design.</p>
        <p>We also like to solve problems and control for quality (hence Frame).</p>
        <button id="ih-trigger" class="btn btn-lg learn-more">Learn more about us</button>
      </div>
      <div class="w-100"></div>
      <img class="bottom-ih" src="https://www.tryfra.me/wp-content/uploads/2017/04/bottom-ih-section.png" alt="Decorative Image Here Goes">
    </section>
    <section class="row section-f">
      <img class="zigzag-decoration" src="https://www.tryfra.me/wp-content/uploads/2017/04/zigzag-section-e.png" alt="This is a decorative zigzag">
      <header class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">
        <h1 class="main-title">
          Subscribe
        </h1>
        <p>Sign up with your email address to receive news and updates.</p>
      </header>
      <div class="subscribe-form offset-lg-2 col-lg-8 offset-md-1 col-md-10">
        <div class="form-wrapper">
          {!! do_shortcode("[mc4wp_form id='128']") !!}
        </div>
        <p class="privacy">We "respect" your privacy.</p>
      </div>
    </section>
  </section>
@endsection
