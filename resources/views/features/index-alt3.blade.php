@extends('layout')
@section('content')
    <section id="featured">
      <!-- start slider -->
      <div id="da-slider" class="da-slider">
        <div class="da-slide">
          <h2>Easy management</h2>
          <p>
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
          </p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img">
            <img src="{{ asset('Flattern/img/slides/parallax/1.png') }}" alt="image01" />
          </div>
        </div>
        <div class="da-slide">
          <h2>Revolution</h2>
          <p>
            A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
          </p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img">
            <div class="video-container">
              <iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">
					</iframe>
            </div>
          </div>
        </div>
        <div class="da-slide">
          <h2>Warm welcome</h2>
          <p>
            When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.
          </p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img">
            <img src="{{ asset('Flattern/img/slides/parallax/2.png') }}" alt="image01" />
          </div>
        </div>
        <div class="da-slide">
          <h2>Quality Control</h2>
          <p>
            Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
          </p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img">
            <img src="{{ asset('Flattern/img/slides/parallax/4.png') }}" alt="image01" />
          </div>
        </div>
        <nav class="da-arrows">
          <span class="da-arrows-prev"></span>
          <span class="da-arrows-next"></span>
        </nav>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>We've created more than <span class="highlight"><strong>5000 websites</strong></span> this year!</h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="#">Request a quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Corporate business</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Responsive theme</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Coded carefully</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Sit and enjoy</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12">
            <h4 class="heading">Some of recent <strong>works</strong></h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="{{ asset('Flattern/img/works/full/image-01-full.jpg') }}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{ asset('Flattern/img/works/thumbs/image-01.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="{{ asset('Flattern/img/works/full/image-02-full.jpg') }}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{ asset('Flattern/img/works/thumbs/image-02.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="{{ asset('Flattern/img/works/full/image-03-full.jpg') }}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{ asset('Flattern/img/works/thumbs/image-03.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="{{ asset('Flattern/img/works/full/image-04-full.jpg') }}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{ asset('Flattern/img/works/thumbs/image-04.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="{{ asset('Flattern/img/works/full/image-05-full.jpg') }}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{ asset('Flattern/img/works/thumbs/image-05.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-5" data-type="icon">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="{{ asset('Flattern/img/works/full/image-06-full.jpg') }}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{ asset('Flattern/img/works/thumbs/image-06.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="{{ asset('Flattern/img/works/full/image-07-full.jpg') }}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{ asset('Flattern/img/works/thumbs/image-07.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="{{ asset('Flattern/img/works/full/image-08-full.jpg') }}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{ asset('Flattern/img/works/thumbs/image-08.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                </ul>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span12">
            <h4>Very satisfied <strong>clients</strong></h4>
            <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client1.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client2.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client3.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client4.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client5.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client6.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client1.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client2.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client3.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client4.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client5.png') }}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{ asset('Flattern/img/dummies/clients/client6.png') }}" class="client-logo" alt="" />
					</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
@endsection