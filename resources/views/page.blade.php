@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $page->title }}</div>

                    <div class="panel-body">
                        {{ $page->content }}

                        <br/><br/>

                        {{ date("d.m.Y", strtotime($page->created_at)) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection