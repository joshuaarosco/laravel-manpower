@extends('backoffice._layout.main')

@push('title','Workforce List')

@push('css')
<style type="text/css">
    .overflow-visible { 
        overflow: visible;
    }
</style>
<link class="main-stylesheet" href="{{asset('pages/css/chat.css')}}" rel="stylesheet" type="text/css" />
<style>
    .col-xs-2 {
        width: 16.66666667%;
    }
    .col-xs-6 {
        width: 50%;
    }
    .col-xs-10 {
        width: 83.33333333%;
    }
    /* #1dbfc1 */
    .fc-event-past{
        background: #608ad2!important;
    }
    .box-past{
        background: #608ad2;
        height : 15px;
        width : 15px;
        float: left;
        margin-right: 5px;
    }
    .box-future{
        background: #1dbfc1;
        height : 15px;
        width : 15px;
        float: left;
        margin-right: 5px;
    }
    .fc-day-past {
        background-color: #c5c5c5;
    }
    .box-current-date{
        background: #fffadf;
        height : 15px;
        width : 15px;
        float: left;
        margin-right: 5px;
    }
    .box-past-date{
        background: #c5c5c5;
        height : 15px;
        width : 15px;
        float: left;
        margin-right: 5px;
    }
    .event-date{
        padding: 5px;
        border: 2px solid;
        line-height: 20px;
        border-radius: 5px;
        width: 60px;
    }
    .event-day{
        font-size: 30px;
        font-weight: 500;
    }
    .event-month{
        font-size: 15px;
        font-weight: 300;
    }
    .workforce-img{
        height: 75px!important;
        width: 75px!important;
        border-radius: 50%;
    }
</style>
@endpush

@push('content')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->	  
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Workforce</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('backoffice.index') }}"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Workforce List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12"> 
                    @include('backoffice._components.session_notif')
                    <div class="box no-border no-shadow">
                        <div class="box-body overflow-auto">
                            <!-- the events -->
                            <div id="external-events">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="fw-300">Workforce</h3>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="" class="mt-10"><strong>Salary:</strong></label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="number" id="minSalary" class="form-control" placeholder="Min">
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="number" id="maxSalary" class="form-control" placeholder="Max">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button id="filterButton" class="btn btn-success btn-md">Filter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" id="myInput" class="form-control pull-right mt-10" placeholder="Search for Job Title or Schedule...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <table class="table border-no" id="myTable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th style="width: 10%"></th>
                                            <th style="width: 20%">Name</th>
                                            <th style="width: 30%">Job Title</th>
                                            <th style="width: 30%">Salary | ₱/day</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse(range(1,8) as $index => $event)
                                        @php
                                        $salary = rand(500, 1500);
                                        @endphp
                                        <tr class="hover-primary myData" data-salary="{{ $salary }}">
                                            <th>{{$index+=1}}</th>
                                            <td>
                                                <img src="{{asset('manpower/images/people/'.$index.'.jpg')}}" alt="img-{{$index}}" class="workforce-img">
                                            </td>
                                            <td>
                                                <strong>{!! $names[$index] !!}</strong>
                                            </td>
                                            <td>
                                                {!! $jobTitles[rand(0,14)] !!}
                                            </td>
                                            <td>
                                                {{ number_format($salary, 2) }}
                                            </td>
                                            <td>												
                                                <div class="btn-group">
                                                    <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                    <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="hover-primary">
                                            <td colspan="2" class="text-center">No job post yet...</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @if(auth()->check())
                    <a href="{{ route('backoffice.jobs.create') }}" class="btn btn-primary">
                        <i class="ti-calendar"></i> Create Job
                    </a>
                    @endif
                </div> 
            </div>
        </section>
        <!-- /.content -->
    </div>	  
    
</div>

@if(auth()->user()->type == 'patient')
@include('commons.chatbot')
@endif
@endpush

@push('js')
<script src="{{asset('vet-clinic/main/js/vendors.min.js')}}"></script>
<script src="{{asset('vet-clinic/main/js/pages/chat-popup.js')}}"></script>
<script src="{{asset('vet-clinic/assets/icons/feather-icons/feather.min.js')}}"></script>	
<script src="{{asset('vet-clinic/assets/vendor_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('vet-clinic/assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('vet-clinic/assets/vendor_components/fullcalendar/lib/moment.min.js')}}"></script>

<!-- Rhythm Admin App -->
<script src="{{asset('vet-clinic/main/js/template.js')}}"></script>
<script src="{{asset('vet-clinic/main/js/fullcalendar.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        $('#filterButton').click(function() {
            var minSalary = parseInt($('#minSalary').val(), 10);
            var maxSalary = parseInt($('#maxSalary').val(), 10);

            $('#myTable tbody tr').each(function() {
                var salary = parseInt($(this).find('td').eq(3).text(), 10);
                console.log(salary);
                if ((isNaN(minSalary) || salary >= minSalary) && (isNaN(maxSalary) || salary <= maxSalary)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

<script src="{{asset('pages/js/moment.js')}}"></script>
@endpush