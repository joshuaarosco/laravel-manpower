<form class="form" action="#" method="POST">
    {{csrf_field()}}
    @if($job)
    <input type="hidden" name="id" value="{{ $job->id }}" class="form-control">
    <input type="hidden" name="details" value="{{ $job->details }}" class="form-control">
    @endif
    <div class="box-body">
        <div class="row">
            <div class="form-group {{$errors->has('name')?'error':null}}">
                <label class="form-label">Job Title <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{old('name',$job?$job->name:'')}}" class="form-control" placeholder="Job Title">
                @if($errors->has('name'))
                <div class="help-block"><ul role="alert"><li>{{$errors->first('name')}}</li></ul></div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group {{$errors->has('category_id')?'error':null}}">
                <label class="form-label">Job Category <span class="text-danger">*</span></label>
                <select name="category_id" class="form-control">
                    <option value="">--Choose A Category--</option>
                    @foreach($categories as $index => $category)
                    @if($category == old('category_id') OR ($job?$job->category_id:''))
                    <option value="{{ $index }}" selected>{{ $category }}</option>
                    @else
                    <option value="{{ $index }}">{{ $category }}</option>
                    @endif
                    @endforeach
                </select>
                @if($errors->has('category_id'))
                <div class="help-block"><ul role="alert"><li>{{$errors->first('category_id')}}</li></ul></div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group {{$errors->has('details')?'error':null}}">
                <label class="form-label">Details <span class="text-danger">*</span></label>
                <textarea rows="3" name="details" id="editor1" class="textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" placeholder="Event Details">{{old('details',$job?$job->details:'')}}</textarea>
                @if($errors->has('details'))
                <div class="help-block"><ul role="alert"><li>{{$errors->first('details')}}</li></ul></div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{$errors->has('start')?'error':null}} start-date">
                    <label class="form-label">Start <span class="text-danger">*</span></label>
                    <input type="datetime-local" name="start" min="{{date('Y-m-d')}}" id="start" value="{{old('start',$job?date('Y-m-d\TH:i', strtotime($job->start)):'')}}" class="form-control" placeholder="Date">
                    @if($errors->has('start'))
                    <div class="help-block"><ul role="alert"><li>{{$errors->first('start')}}</li></ul></div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group {{$errors->has('end')?'error':null}} end-date">
                    <label class="form-label">End <span class="text-danger">*</span></label>
                    <input type="datetime-local" name="end" min="{{date('Y-m-d')}}" id="end" value="{{old('end',$job?date('Y-m-d\TH:i',strtotime($job->end)):'')}}" class="form-control" placeholder="End Date">
                    @if($errors->has('end'))
                    <div class="help-block"><ul role="alert"><li>{{$errors->first('end')}}</li></ul></div>
                    @endif
                </div>
            </div>
        </div>
        
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-end">
        <a href="{{route('backoffice.jobs.index')}}" class="btn waves-effect waves-light btn btn-outline btn-warning me-1">
            <i class="fa fa-sign-out" style="font-size:24px"></i> Exit
        </a>
        <button type="submit" class="btn waves-effect waves-light btn btn-outline btn-primary ">
            <i class="ti-save-alt"></i> Save
        </button>
    </div>  
</form>