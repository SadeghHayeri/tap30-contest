@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">پنل مدیریتی</div>

                    <div class="panel-body">
                        <div class="list-group">
                            <a href="/admin/problem" class="list-group-item @if(Request::segment(2) == 'problem') active @endif">سوالات</a>
                            <a href="/admin/sample" class="list-group-item @if(Request::segment(2) == 'sample') active @endif">تست کیس ها</a>
                            <a href="/admin/user" class="list-group-item @if(Request::segment(2) == 'user') active @endif">تیم ها</a>
                            <a href="/admin/submit" class="list-group-item @if(Request::segment(2) == 'submit') active @endif">فایل های ارسالی</a>
                            <a href="/admin/timer" class="list-group-item @if(Request::segment(2) == 'timer') active @endif">زمان بندی</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                @yield('inner-content')
            </div>
        </div>
    </div>
@endsection
