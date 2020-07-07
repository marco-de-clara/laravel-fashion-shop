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
                        @foreach ($dresses as $dresse)
                            <tr>
                                <td>{{ $dresse->id }}</td>
                                <td>{{ $dresse->size }}</td>
                                <td>{{ $dresse->color }}</td>
                                <td>{{ $dresse->type }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
