@extends('frontend.web._layouts.main',['intro' => false])

@push('title','Jobs')

@push('content')
<section class="page_breadcrumbs ds ms parallax section_padding_top_50 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="">Jobs</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('index') }}">
                            HomePage
                        </a>
                    </li>
                    <li class="active">Jobs</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls ms section_padding_top_100 section_padding_bottom_75 columns_padding_25">
	<div class="container">
		<div class="row">          
			<div class="col-sm-12 col-md-12 col-lg-12">
                @foreach(range(1,5) as $index)
                <article class="post format-small-image with_background">
                    <div class="side-item">
                        @php
                        $job = $jobTitles[rand(0, 14)];
                        @endphp
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item-media entry-thumbnail">
                                    <div class="entry-meta-corner">
                                        <span class="date">
                                            <time datetime="2016-08-01T15:05:23+00:00" class="entry-date">
                                                <strong>08</strong>
                                                Jan
                                            </time>
                                        </span>
                                        <span class="comments-link">
                                            <a href="{{ route('jobs.view', 1) }}?job={{ $job }}#comments">
                                                <i class="rt-icon2-bubble highlight"></i> 5
                                            </a>
                                        </span>
                                    </div>
                                    <img src="{{ asset('manpower/images/blog/blog-post-sm'.$index.'.jpg')}}" alt="">
                                    <div class="media-links">
                                        <a class="abs-link" title="" href="{{ route('jobs.view', 1) }}?job={{ $job }}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item-content padding30">
                                    <h4 class="entry-title topmargin_0">
                                        <a href="{{ route('jobs.view', 1) }}?job={{ $job }}" rel="bookmark">{!! explode(' : ',$job)[1] !!}</a>
                                    </h4>
                                    <div class="muted_background post-adds">
                                        <a href="#" class="theme_button">
                                            <i class="rt-icon2-arrow-forward-outline"></i>
                                        </a>
                                        <a href="#" class="theme_button inverse">
                                            <i class="rt-icon2-heart highlight"></i>
                                        </a>
                                        <span class="item-likes">
                                            35 likes
                                        </span>
                                        <span class="views-count main_bg_color pull-right">
                                            <strong>23573</strong> views
                                        </span>
                                    </div>
                                    <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duoolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus Lorem ipsum dolor sit amet.</p>
                                    <div class="topmargin_30">
                                        <span class="categories-links">
                                            <a rel="category" href="{{ route('jobs.view', 1) }}?job={{ $job }}" class="theme_button small_button transparent">View</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach

                <div class="row">
                    <div class="col-sm-12">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
			</div> <!--eof .col-sm-8 (main content)-->
		</div>
	</div>
</section>
@endpush