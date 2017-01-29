@extends('admin.timer.base')

@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
@endsection

@section('main-content')
    @if($timer->id == null)
        <h3>ایجاد تایمر</h3>

    @else
        <h3>ویرایش تایمر</h3>
    @endif

    @if (count($errors) > 0)cd
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if($timer->id==NULL)
        {{Form::open(array('url' => '/admin/timer', 'method' => 'post', 'files'=>true , 'class' => 'form-horizontal ls_form'))}}
    @else
        {{Form::model($timer, array('url' => '/admin/timer/'. $timer->id, 'method' => 'put' ,'files' => true, 'class' => 'form-horizontal ls_form'))}}
    @endif
    <div class="row ls_divider last">
        <div class="form-group form-padding">
            <div class="row padding">
                <label class="col-md-2 control-label">زمان شروع</label>
                <div class="col-md-10">
                    {{ Form::text('starts_at', old('starts_at'), ['placeholder' => 'ورودی','id' => 'start-date', "class" => 'form-control start-date']) }}
                </div>
            </div>

            <div class="row padding">
                <label class="col-md-2 control-label">زمان پایان</label>
                <div class="col-md-10">
                    {{ Form::text('ends_at', old('ends_at'), ['placeholder' => 'خروجی','id' => 'end-date' ,"class" => 'form-control end-date']) }}
                </div>
            </div>

            <div class="col-md-2 pull-right  top-padding">
                <button class="btn btn-success btn-block" type="submit">ذخیره</button>
            </div>
        </div>
    </div>
    {{ Form::close() }}

@endsection


@section('js')
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#start-date" ).datepicker();
        });
        $(function() {
            $( "#end-date" ).datepicker();
        });
    </script>
@endsection