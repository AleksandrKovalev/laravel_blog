@extends('layouts.master')

@section('content')

    <h1>Page</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Slug</th><th>Status</th><th>Title</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $page->id }}</td> <td> {{ $page->slug }} </td><td> {{ $page->status }} </td><td> {{ $page->title }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection