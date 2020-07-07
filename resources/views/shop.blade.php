@extends('layouts.app')

@section('page-title', 'Fashion Shop')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Size</th>
                            <th scope="col">Color</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dresses as $dress)
                            <tr>
                                <td>{{ $dress->id }}</td>
                                <td>{{ $dress->size }}</td>
                                <td>{{ $dress->color }}</td>
                                <td>{{ $dress->type }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
