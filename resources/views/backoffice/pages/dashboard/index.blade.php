@extends('backoffice._layout.main')

@push('title','Dashboard')

@push('css')
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
    .modal-content{
        max-width: 750px!important;
    }
    .feather-50{
        width: 50px;
        height: 50px;
    }
    .feather-16{
        width: 16px;
        height: 16px;
    }
</style>
@endpush

@push('content')
 
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-2 col-md-2 col-2">
                    <div class="box">
                        <div class="box-body text-center">
                            <div class="bg-warning-light rounded10 p-20 mx-auto w-100 h-100">
                                <h1 class="text-default"><i data-feather="users" class="text-dark feather-50"></i></h1>
                            </div>
                            <p class="text-fade mt-15 mb-5">Workforce</p>
                            <h2 class="mt-0">158</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-2 col-2">
                    <div class="box">
                        <div class="box-body text-center">
                            <div class="bg-primary-light rounded10 p-20 mx-auto w-100 h-100">
                                <h1 class="text-default"><i data-feather="briefcase" class="text-dark feather-50"></i></h1>
                            </div>
                            <p class="text-fade mt-15 mb-5">Jobs</p>
                            <h2 class="mt-0">121</h2>
                        </div>
                    </div>
                </div>
            </div>	
      </section>
      <!-- /.content -->
    </div>
</div>

<!-- /.content-wrapper -->
@if(auth()->user()->type == 'patient')
@include('commons.chatbot')
@endif
@endpush

@push('js')
<!-- Vendor JS -->
<script src="{{asset('vet-clinic/main/js/vendors.min.js')}}"></script>
<script src="{{asset('vet-clinic/main/js/pages/chat-popup.js')}}"></script>
<script src="{{asset('vet-clinic/assets/icons/feather-icons/feather.min.js')}}"></script>

<script src="{{asset('vet-clinic/assets/vendor_components/date-paginator/moment.min.js')}}"></script>
<script src="{{asset('vet-clinic/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('vet-clinic/assets/vendor_components/date-paginator/bootstrap-datepaginator.min.js')}}"></script>

<!-- Rhythm Admin App -->
<script src="{{asset('vet-clinic/main/js/template.js')}}"></script>
<script src="{{asset('vet-clinic/main/js/pages/dashboard.js')}}"></script>

<script src="{{asset('pages/js/moment.js')}}"></script>
<script src="{{asset('pages/js/chat.js')}}"></script>
<script>
</script>
@endpush
