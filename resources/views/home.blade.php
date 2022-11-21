@extends('layouts.app')
<div style="display: none">{{$cnt = 1}}</div>

@section('content')
    <div class="container" style="min-height: 800px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Welcome, {{$user['name']}}</h1>
                        @if($user['role'] == 'admin')
                            <form method="post" action="/home/add" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-8">
                                        <input class="form-control" type="text" placeholder="Name" name="name" required>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="number" placeholder="Cost" name="cost"
                                               required><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" rows="3" name="description"></textarea>
                                </div>
                                <br>
                                <div class="custom-file drop-zone" class="drop-zone">
                                    <label class="custom-file-label" for="customFile">Add photo of a product:</label>
                                    <input type="file" class="custom-file-input" id="customFile" name="img">
                                </div>
                                <br>
                                <input type="submit" class="btn btn-primary mb-2" id="submit-but">
                            </form>
                        @else
                            @if($history == null)
                                <h2>You didn't buy something yet <a href="/">Go to shopping</a></h2>
                            @endif
                            @foreach($history as $item)
                                <hr>
                                <div class="row history-card">
                                    <div class="col">
                                        <h3>
                                            {{$cnt++.') '.$item[0]->title}}
                                        </h3>
                                        <h4>
                                            {{$item[0]->cost}} $
                                        </h4>
                                        <p>{{$item[0]->description}}</p>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{asset('storage').$item[0]->image}}">
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
@endsection
