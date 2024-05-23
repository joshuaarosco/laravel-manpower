@extends('frontend.web._layouts.main',['intro' => false])

@push('title','Workforce')

@push('content')
<section class="page_breadcrumbs ds ms parallax section_padding_top_50 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="">Workforce</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('index') }}">
                            HomePage
                        </a>
                    </li>
                    <li class="active">Workforce</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls ms section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="row">

            <div class="col-sm-7 col-md-9 col-lg-9">
            
                <div class="store-sorting-results pull-left"><p>Showing 1–9 of 60 results</p></div>
                <div class="store-sorting-right clearfix pull-right">
                    
                    <!-- <form class="form-inline">
                        <div class="arr-for-select">
                            <i class="rt-icon2-chevron-down"></i>
                            <select>
                                <option>Your Name</option>
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
                                            ₱ <span class="amount amount-salary">{{ rand(500, 1500) }}.00</span>/day
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
                <div class="col-sm-12 text-left">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
            </div> <!--eof .col-sm-8 (main content)-->


            @include('frontend.web._components.filter')
        </div>
    </div>
</section>
@endpush

@push('js')
<script>
    $(".myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        console.log(value)
        $("#products li").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $('#filterButton').click(function() {
        var minSalary = parseInt($('#minSalary').val(), 10);
        var maxSalary = parseInt($('#maxSalary').val(), 10);

        $('#products li').each(function() {
            var salary = parseInt($(this).find('.amount-salary').text(), 10);
            //console.log('SALARY ===>>> '+$(this).find('.amount-salary').text());
            if ((isNaN(minSalary) || salary >= minSalary) && (isNaN(maxSalary) || salary <= maxSalary)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
</script>
@endpush

@push('css')
<style>
</style>
@endpush