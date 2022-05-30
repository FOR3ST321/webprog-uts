@extends('layout')

@section('content')
    <div class="card" style="margin-bottom:20px;box-shadow: 10px 11px 35px -7px rgba(0,0,0,0.41);">
        <div class="card-body">
            <h2>{{$book->title}}</h2>
        </div>
    </div>
    <div class="card" style="margin-bottom:20px;box-shadow: 10px 11px 35px -7px rgba(0,0,0,0.41);">
        <div class="container" style="margin-top:20px">
            <a href="{{ url()->previous() }}" class="btn btn-outline-danger">< Back</a>
        </div>
        <?php $detail = $book->detail ?>
        <div class="card-body">
            <div class="row">
                <div class="col-2"><strong>Title</strong></div>
                <div class="col-10">: {{$book->title}}</div>
            </div>
            <div class="row">
                <div class="col-2"><strong>Author</strong></div>
                <div class="col-10">: {{$detail->author}}</div>
            </div>
            <div class="row">
                <div class="col-2"><strong>Year</strong></div>
                <div class="col-10">: {{$detail->year}}</div>
            </div>
            <div class="row">
                <div class="col-2"><strong>Publisher</strong></div>
                <div class="col-10">: {{$detail->publisher}}</div>
            </div>

            <p><strong>Description:</strong><br>{{$detail->description}}</p>
        </div>
    </div>
@endsection
