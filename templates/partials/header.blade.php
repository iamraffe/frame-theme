<header class="banner">
  <nav class="navbar navbar-inverse navbar-toggleable-md">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbarCenter" aria-controls="containerNavbarCenter" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/"><img src="https://www.tryfra.me/wp-content/uploads/2017/04/Frame-WebsiteUIV3-1.png" alt=""></a>

    <div class="navbar-collapse collapse" id="containerNavbarCenter" aria-expanded="false" style="">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav justify-content-end']) !!}
      @endif
    </div>

  </nav>
</header>
