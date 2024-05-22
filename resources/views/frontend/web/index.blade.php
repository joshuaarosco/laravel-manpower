@extends('frontend.web._layouts.main',['intro' => true])

@push('title','Home')

@push('content')

@include('frontend.web._sections.services')
{{--@include('frontend.web._sections.experience')
@include('frontend.web._sections.types')--}}

<section class="ls ms section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="heading-b mb-50">
            <h2>Workforce</h2>
        </div>
        <div class="row">
            <div class="col-sm-7 col-md-9 col-lg-9">
                <div class="store-sorting-results pull-left"><p>Showing 1–9 of 60 results</p></div>
                <div class="store-sorting-right clearfix pull-right">
                    <!-- <form class="form-inline">
                        <div class="arr-for-select">
                            <i class="rt-icon2-chevron-down"></i>
                            <select>
                                <option>Rating</option>
                                <option>Your Name 2</option>
                                <option>Your Name 3</option>
                            </select>
                        </div>
                    </form> -->
                </div>
                <div class="columns-3">
                    <ul id="products" class="products list-unstyled grid-view">
                        @foreach(range(1,9) as $index)
                        <li class="product type-product">
                            <div class="side-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="item-media">
                                            <a href="#">
                                                <img src="{{asset('manpower/images/people/'.$index.'.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        @php
                                        $job = $jobTitles[rand(0, 14)];
                                        @endphp
                                        <div class="category-shop-item">
                                            <span class="amount">{{ explode(' : ',$job)[0] }}</span><i class="rt-icon2-heart-outline"></i>
                                        </div>
                                        <h3>
                                            <a href="#">{!! explode(' : ',$job)[1] !!}</a>
                                        </h3>
                                        <span class="price">
                                            <span class="amount">₱ 550.00/day</span>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item-content">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                
                </div> <!-- eof .columns-* -->
                <!-- <div class="col-sm-12 text-left">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div> -->
                <div class="col-sm-12 text-left">
                    <a href="#" class="btn btn-view-more">View More</a>
                </div>
            </div> <!--eof .col-sm-8 (main content)-->


            @include('frontend.web._components.filter')
        </div>
    </div>
</section>

@include('frontend.web._sections.stats')
@endpush

@push('css')
<style>
    .btn-view-more{
        height: 40px!important;
        line-height: 5px!important;
    }
</style>
@endpush
