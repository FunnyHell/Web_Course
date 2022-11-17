@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Welcome, {{$user['name']}}</h1>
                        @if($user['role'] == 'admin')
                        <form method="post" action="/home/add" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="text" placeholder="name" name="name">
                            <textarea placeholder="description" name="description"></textarea>
                            <input type="number" placeholder="cost" name="cost">
                            <input type="file" name="img">
                            <input type="submit">
                        </form>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
