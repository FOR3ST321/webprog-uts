@extends('layout')

@section('content')
    <div class="card" style="margin-bottom:20px;box-shadow: 10px 11px 35px -7px rgba(0,0,0,0.41);">
        <div class="card-body">
            <h2>Book from category: {{$activeSubNav}}</h2>
        </div>
    </div>
    <div class="card" style="margin-bottom:20px;box-shadow: 10px 11px 35px -7px rgba(0,0,0,0.41);">
        <div class="card-body">
            <a href="/" class="btn btn-outline-danger" style="margin-top:10px;margin-bottom:20px">
                < Back to Home</a>
                    <table class="table table-hover table-light">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $item)
                                <tr>
                                    <td>
                                        <a href="/book/{{ $item->id }}">
                                            {{ $item->title }}
                                        </a>
                                    </td>
                                    <td>{{ $item->detail->author }}</td>
                                </tr>
                            @endforeach

                            @if (count($books) == 0)
                                <tr>
                                    <td colspan="2" class="text-danger">No books found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    {{ $books->links() }}
        </div>
    </div>
@endsection
