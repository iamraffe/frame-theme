{{--
  Template Name: Frame Home Template
--}}

@extends('layouts.base')

@section('content')
  <section class="home">
    <header class="row section-a">
      <header class="col">
        <h1 id="main-title" class="main-title">FRAME</h1>
      </header>
      <div class="w-100"></div>
      <div class="col-md-6 offset-md-3 tagline">
        <h1>{!! get_field("home_main_tagline") !!}</h1>
        <p>{!! get_field("home_secondary_tagline") !!}</p>
        <button type="button" class="btn btn-danger btn-lg">Try it out!</button>
      </div>
    </header>
    <section class="row section-b">
      <div class="col-md-10 offset-md-1 masonry-wrapper">
        {!! do_shortcode("[wmls name='Frame Section A Grid' id='1']") !!}
      </div>
    </section>
  </section>
@endsection
