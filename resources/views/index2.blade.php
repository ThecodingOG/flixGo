<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">

	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index.blade.php" class="header__logo">
								<img src="img/logo.svg" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">
										<li><a href="/home">Home slideshow bg</a></li>
										<li><a href="/home">Home static bg</a></li>
									</ul>
								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="/catalogue" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<li><a href="/catalogue">Catalog Grid</a></li>
										<li><a href="/catalogue">Catalog List</a></li>
									</ul>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a href="/details" class="header__nav-link">Details</a>
								</li>

								<li class="header__nav-item">
									<a href="/faq" class="header__nav-link">Help</a>
								</li>

                                <li class="header__nav-item">
                                    <a href="/about" class="header__nav-link">about</a>
                                </li>

							</ul>
							<!-- end header nav -->

                            <!-- header auth -->
                            <div class="header__auth">

                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Signed In</a>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline icon ion-ios-log-in header__sign-in">Log in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline icon ion-ios-log-in header__sign-in">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                            <!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->

	<!-- home -->
	<section class="home home--bg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
                        @foreach($movies->all() as $movie)
						<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="storage/{{$movie->picture}}" alt="{{$movie->title}}">
									<a href="/videos/{{$movie->video}}" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">{{$movie->title}}</a></h3>
									<span class="card__category">
										<a href="#">{{$movie->genre}}</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>{{$movie->rating}}</span>
                                    <br>
                                    <a href="/rate/{{$movie->id}}"><button class="btn btn-primary">Rate this movie</button></a>

								</div>
							</div>
							<!-- end card -->
						</div>
                        @endforeach

                    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Genres</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">ACTION</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Drama</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Horror</a>
							</li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">Thriller</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-6" role="tab" aria-controls="tab-6" aria-selected="false">Science Fiction</a>
                            </li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="New items">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Action</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Drama</a></li>

									<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Horror</a></li>
									<li class="nav-item"><a class="nav-link" id="5-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-5" aria-selected="false">Thriller</a></li>
									<li class="nav-item"><a class="nav-link" id="6-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-6" aria-selected="false">Science Fiction</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- card -->
                        @foreach($movies->all() as $movie)
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
                                            <img src="storage/{{$movie->picture}}" alt="{{$movie->title}}">
                                            <a href="/videos/{{$movie->video}}" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">{{$movie->title}}</a></h3>
											<span class="card__category">
												<a href="#">{{$movie->genre}}</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>{{$movie->rating}}</span>

												<ul class="card__list">
													<li>HD</li>
													<li>{{$movie->agerating}}</li>
												</ul>
											</div>

											<div class="card__description">
                                                <p>Published by {{$movie->publisher}}</p>
                                                <p>Produced by {{$movie->producer}}</p>
												<p>{{$movie->description}}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    @endforeach
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">
						<!-- card -->
                        <p class="d-none">{{$genre = \App\Models\Movies::where('genre','Action')->get()}}</p>

                        @foreach($genre as $genre)
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
                                    <img src="storage/{{$genre->picture}}" alt="{{$genre->title}}">
                                    <a href="/videos/{{$genre->video}}" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">{{$genre->title}}</a></h3>
									<span class="card__category">
										<a href="#">{{$genre->genre}}</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>{{$genre->rating}}</span>
								</div>
							</div>
						</div>
                    @endforeach
						<!-- end card -->


					</div>
				</div>

                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
                    <div class="row">
                        <!-- card -->
                        <p class="d-none">{{$genre = \App\Models\Movies::where('genre','Drama')->get()}}</p>

                        @foreach($genre as $genre)
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="storage/{{$genre->picture}}" alt="{{$genre->title}}">
                                        <a href="/videos/{{$genre->video}}" class="card__play">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="#">{{$genre->title}}</a></h3>
                                        <span class="card__category">
										<a href="#">{{$genre->genre}}</a>
									</span>
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>{{$genre->rating}}</span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- end card -->


                    </div>
                </div>

                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
                    <div class="row">
                        <!-- card -->
                        <p class="d-none">{{$genre = \App\Models\Movies::where('genre','Horror')->get()}}</p>

                        @foreach($genre as $genre)
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="storage/{{$genre->picture}}" alt="{{$genre->title}}">
                                        <a href="/videos/{{$genre->video}}" class="card__play">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="#">{{$genre->title}}</a></h3>
                                        <span class="card__category">
										<a href="#">{{$genre->genre}}</a>
									</span>
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>{{$genre->rating}}</span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- end card -->


                    </div>
                </div>

                <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="5-tab">
                    <div class="row">
                        <!-- card -->
                        <p class="d-none">{{$genre = \App\Models\Movies::where('genre','Thriller')->get()}}</p>

                        @foreach($genre as $genre)
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="storage/{{$genre->picture}}" alt="{{$genre->title}}">
                                        <a href="/videos/{{$genre->video}}" class="card__play">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="#">{{$genre->title}}</a></h3>
                                        <span class="card__category">
										<a href="#">{{$genre->genre}}</a>
									</span>
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>{{$genre->rating}}</span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- end card -->


                    </div>
                </div>

                <div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="6-tab">
                    <div class="row">
                        <!-- card -->
                        <p class="d-none">{{$genre = \App\Models\Movies::where('genre','Science Fiction')->get()}}</p>

                        @foreach($genre as $genre)
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="storage/{{$genre->picture}}" alt="{{$genre->title}}">
                                        <a href="/videos/{{$genre->video}}" class="card__play">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="#">{{$genre->title}}</a></h3>
                                        <span class="card__category">
										<a href="#">{{$genre->genre}}</a>
									</span>
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>{{$genre->rating}}</span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- end card -->


                    </div>
                </div>
			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->

	<!-- expected premiere -->
	<section class="section section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">Expected premiere</h2>
				</div>
				<!-- end section title -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/covers/cover.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/covers/cover3.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Benched</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/covers/cover2.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Whitney</a></h3>
							<span class="card__category">
								<a href="#">Romance</a>
								<a href="#">Drama</a>
								<a href="#">Music</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/covers/cover6.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Blindspotting</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
								<a href="#">Drama</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/covers/cover4.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/covers/cover5.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Benched</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- section btn -->
				<div class="col-12">
					<a href="#" class="section__btn">Show more</a>
				</div>
				<!-- end section btn -->
			</div>
		</div>
	</section>
	<!-- end expected premiere -->

	<!-- partners -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--no-margin">Our Partners</h2>
				</div>
				<!-- end section title -->

				<!-- section text -->
				<div class="col-12">
					<p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				</div>
				<!-- end section text -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/themeforest-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/audiojungle-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/codecanyon-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/photodune-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/activeden-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/3docean-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->
			</div>
		</div>
	</section>
	<!-- end partners -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<!-- footer list -->
				<div class="col-12 col-md-3">
					<h6 class="footer__title">Download Our App</h6>
					<ul class="footer__app">
						<li><a href="#"><img src="img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
						<li><a href="#"><img src="img/google-play-badge.png" alt=""></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Resources</h6>
					<ul class="footer__list">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Pricing Plan</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Legal</h6>
					<ul class="footer__list">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Security</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-12 col-sm-4 col-md-3">
					<ul class="footer__social">
						<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
						<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
						<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
						<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer copyright -->
				<div class="col-12">
					<div class="footer__copyright">

						<ul>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<!-- end footer copyright -->
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
