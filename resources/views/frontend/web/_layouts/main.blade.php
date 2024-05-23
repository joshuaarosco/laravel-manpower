<!DOCTYPE html>
<html class="no-js">
<head>
    <title>@stack('title') | {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('frontend.web._includes.styles')
    <script src="{{asset('manpower/js/vendor/modernizr-2.6.2.min.js')}}"></script>


</head>
<body>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="widget widget_search">
			<form method="get" class="searchform form-inline" action="#">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
			@if($intro)
			@include('frontend.web._sections.intro')
			@endif

			@include('frontend.web._components.header')

			@stack('content')

			@include('frontend.web._components.footer')

			<section class="ds page_copyright table_section section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p>&copy; {{ config('app.name') }} | Created with <i class="rt-icon2-heart highlight"></i> <a href="#">by {{ config('app.name') }}</a></p>
						</div>
					</div>
				</div>
			</section>

		</div><!-- eof #box_wrapper -->
    </div><!-- eof #canvas -->

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>
    @include('frontend.web._includes.scripts')

    </body>
</html>