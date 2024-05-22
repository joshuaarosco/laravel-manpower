@extends('frontend.web._layouts.main',['intro' => false])

@push('title','Job Detail')

@push('content')
<section class="page_breadcrumbs ds ms parallax section_padding_top_50 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="">Job Detail</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('index') }}">
                            HomePage
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('jobs.index') }}">
                            Jobs
                        </a>
                    </li>
                    <li class="active">Job Detail</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls ms section_padding_top_100 section_padding_bottom_100">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
				<article>
                    <div class="entry-thumbnail bottommargin_40">
                        <div class="entry-meta-corner">
                                <span class="date">
                                    <time datetime="2016-08-01T15:05:23+00:00" class="entry-date">
                                        <strong>08</strong>
                                        Jan
                                    </time>
                                </span>
                                <span class="comments-link">
                                    <a href="#comments">
                                        <i class="rt-icon2-bubble highlight"></i> 5
                                    </a>
                                </span>
                            </div>
                        <img src="{{ asset('manpower/images/blog/blog-post.jpg') }}" alt="">
                    </div>
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <a href="#" rel="bookmark">{!! Input::has('job')?Input::get('job'):'Construction : <strong>Mason</strong>' !!}</a>
                        </h1>
                        <div class="with_background post-adds">
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
                            <span class="comments-link greylinks pull-right">
                                <a href="#comments">
                                    5 Comments
                                </a>
                            </span>
                        </div>
                    </header>
                    <!-- .entry-header -->
                    <div class="entry-content">
                        <p class="big-first-letter">
                            O Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.
                        </p>
                        <p>
                            Justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.
                             erat, sed diam voluptua. At vero eos et accusam et justo duo dolo
                        </p>
                        <div id="blog-more" class="blog-more collapse">
                            <blockquote>
                                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, consetetur sadipscing.
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#"> 
                                            <img class="media-object" src="{{ asset('manpower/images/team/03.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body media-middle"> 
                                        <strong class="highlight">Whitney Anderson</strong> Housewife
                                    </div>
                                </div>
                            </blockquote>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            </p>
                            <ul class="list2">
                                <li>Eaque blanditiis nemo</li>
                                <li>Amet, consectetur adipisicing</li>
                                <li>Blanditiis nemo quaerat</li>
                            </ul>
                            <p>
                                <img class="alignleft" alt="" src="{{ asset('manpower/images/side-image.jpg') }}">
                                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. 
                            </p>
                            <p>
                                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor.
                                sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                            </p>
                            <p>
                                At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                            </p>
                            <footer class="bottom-entry-meta">
                                <div class="entry-tags">
                                    <a rel="tag" href="#" class="theme_button small_button transparent">Graphic</a>,
                                    <a rel="tag" href="#" class="theme_button small_button transparent"> Design</a>
                                            
                                    <!-- 
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="tags-links">
                                                <a rel="tag" href="#">Graphic Design</a>, 
                                                <a rel="tag" href="#">Photography</a>
                                            </span>
                                        </div>
                                        <div class="col-sm-6">  
                                            <span class='st_facebook_hcount'></span>
                                            <span class='st_twitter_hcount'></span>
                                            <span class='st_googleplus_hcount'></span>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </footer>
                        </div> <!-- eof blog-more -->
                        <div class="darklinks text-center">
                            <a class="blog-more-toggle collapsed" data-toggle="collapse" href="#blog-more" aria-expanded="false" aria-controls="blog-more">
                                <span class="blog-more-hidden">More</span>
                                <span class="blog-more-visible">Hide</span>
                            </a>
                        </div>
                    </div>
                </article>
                <div class="comment-respond" id="respond">
                    <form class="comment-form" id="commentform" method="post" action="{{ route('index') }}">
                        <div class="row columns_padding_5">
                            <div class="col-md-4">
                                <p class="comment-form-author">
                                    <!-- <i class="rt-icon2-user-outline"></i> -->
                                    <input type="text" aria-required="true" size="30" value="" name="author" id="author" class="form-control" placeholder="Full Name">
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p class="comment-form-email">
                                    <!-- <i class="rt-icon2-mail2"></i> -->
                                    <input type="email" aria-required="true" size="30" value="" name="comment_email" id="comment_email" class="form-control" placeholder="Emain Address">
                                </p>
                            </div>
                             <div class="col-md-4">
                                <p class="comment-form-website">
                                    <!-- <i class="rt-icon2-mail2"></i> -->
                                    <input type="text" aria-required="true" size="30" value="" name="comment_website" id="comment_website" class="form-control" placeholder="Website">
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="comment-form-chat">
                                    <!-- <i class="rt-icon2-pencil3"></i> -->
                                    <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment" class="form-control" placeholder="Message..."></textarea>
                                </p>
                            </div>
                        </div>
                        <div class="send-button-center">
                            <p class="form-submit">
                                <button type="submit" id="submit" name="submit" class="theme_button round-icon round-icon-big colormain2">Send Comment<i class="rt-icon2-tick-outline"></i></button>
                            </p>
                        </div>
                    </form>
                </div>
                <!-- #respond -->

                <div class="comments-area" id="comments">
                    <ol class="comment-list">
                        <li class="comment even thread-even depth-1 parent">
                            <article class="comment-body media">
                                <div class="media-left">
                                    <img class="media-object" alt="" src="{{ asset('manpower/images/team/05.jpg') }}">
                                </div>
                                <div class="media-body">
                                    <span class="reply">
                                        <a class="theme_button" href="#respond"></a>
                                    </span>
                                    <div class="comment-meta">
                                        <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                        <span class="comment-date">
                                            <time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
                                        </span>
                                    </div>                              
                                    <p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                </div>
                            </article>
                            <!-- .comment-body -->

                            <ol class="children">
                                <li class="comment byuser odd alt depth-2 parent">
                                    <article class="comment-body media">
                                        <div class="media-left">
                                            <img class="media-object" alt="" src="{{ asset('manpower/images/team/03.jpg') }}">
                                        </div>
                                        <div class="media-body">
                                            <span class="reply">
                                                <a class="theme_button" href="#respond"></a>
                                            </span>
                                            <div class="comment-meta">
                                                <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                                <span class="comment-date">
                                                    <time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
                                                </span>
                                            </div>                              
                                            <p>Second Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                        </div>
                                    </article>
                                    <!-- .comment-body -->

                                    <ol class="children">
                                        <li class="comment byuser even depth-3">
                                            <article class="comment-body media">
                                                <div class="media-left">
                                                    <img class="media-object" alt="" src="{{ asset('manpower/images/team/01.jpg') }}">
                                                </div>
                                                <div class="media-body">
                                                    <span class="reply">
                                                        <a class="theme_button" href="#respond"></a>
                                                    </span>
                                                    <div class="comment-meta">
                                                        <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                                        <span class="comment-date">
                                                            <time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
                                                        </span>
                                                    </div>                              
                                                    <p>Third Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                </div>
                                            </article>
                                            <!-- .comment-body --> 
                                        </li>
                                        <!-- #comment-## -->
                                    </ol>
                                    <!-- .children --> 
                                </li>
                                <!-- #comment-## -->
                            </ol>
                            <!-- .children --> 
                        </li>
                        <!-- #comment-## -->

                        <li class="comment byuser odd alt thread-odd thread-alt depth-1">
                            <article class="comment-body media">
                                <div class="media-left">
                                    <img class="media-object" alt="" src="{{ asset('manpower/images/team/02.jpg') }}">
                                </div>
                                <div class="media-body">
                                    <span class="reply">
                                        <a class="theme_button" href="#respond"></a>
                                    </span>
                                    <div class="comment-meta">
                                        <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                        <span class="comment-date">
                                            <time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
                                        </span>
                                    </div>                              
                                    <p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                </div>
                            </article>
                            <!-- .comment-body --> 
                        </li>
                        <!-- #comment-## -->

                        <li class="comment byuser even thread-even depth-1">
                            <article class="comment-body media">
                                <div class="media-left">
                                    <img class="media-object" alt="" src="{{ asset('manpower/images/team/04.jpg') }}">
                                </div>
                                <div class="media-body">
                                    <span class="reply">
                                        <a class="theme_button" href="#respond"></a>
                                    </span>
                                    <div class="comment-meta">
                                        <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                        <span class="comment-date">
                                            <time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
                                        </span>
                                    </div>                              
                                    <p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                </div>
                            </article>
                            <!-- .comment-body --> 
                        </li>
                        <!-- #comment-## -->
                    </ol>
                    <!-- .comment-list -->
                </div>
                <!-- #comments -->
			</div> <!--eof .col-sm-8 (main content)-->
		</div>
	</div>
</section>
@endpush