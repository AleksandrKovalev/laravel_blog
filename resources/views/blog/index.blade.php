@extends('layouts.master')

@section('content')

    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Title</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($page as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('blog', $item->slug) }}">{{ $item->title }}</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $page->render() !!} </div>
    </div>

@endsection
