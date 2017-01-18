@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <b>You are logged in!</b>
                    <br><br>
                    @foreach($response->getDecodedBody()['data'] as $item)
                        @foreach($item as $key => $value)
                            @if ($key == 'full_picture')
                                <img src="{{$value}}">
                                <br>
                            @elseif($key == 'created_time')
                                {{date('F jS, Y h:i:s', strtotime($value))}}
                                <br>
                            @else
                                {{$key}}: {{$value}}
                                <br>
                            @endif
                        @endforeach
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
