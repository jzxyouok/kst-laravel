<!DOCTYPE html>
<html>
<head>
@extends('layouts.app')
@section('content')
 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>KESAVAPURAM SREEKRISHNASWAMY TEMPLE</title>
        <link rel="icon" href="{{asset('favicon.ico')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>



        <script>
        $(function() {
          $(".rslides").responsiveSlides();
        });
        </script>
    </head>
<body>
<div class="panel panel-info">
            <div class="panel-heading"><span class="glyphicon glyphicon-barcode">Admin-Logs</span></div>

            <div class="panel-body">
                <div class="well well-sm">
                    <th><a href="{{ URL::to('home/clearlogs') }}"><button class="btn btn-danger">Clear Logs</button></a></th>
                    <hr>
                    @foreach($logs as $log)
                        <p><b>#{{$log->id}}</b> {{ $log->name}} @if($log->actionval == 1)<span class="label label-success">{{$log->action}}</span>
                        @elseif($log->actionval == 2)
                            <span class="label label-warning">{{$log->action}}</span>
                        @elseif($log->action == "Cleared Logs")
                            <span class="label label-info">{{$log->action}}</span>
                        @else
                            <span class="label label-danger">{{$log->action}}</span>
                        @endif
                              {{ $log->created_at}}</p>
                    @endforeach
            </div>
            </div>
            </div>


                    <div class="panel panel-warning">
            <div class="panel-heading"><span class="glyphicon glyphicon-barcode">Newsfeed</span></div>

           <div class="panel-body">

           <form method="POST" action="/welcome" accept-charset="UTF-8" data-parsley-validate="" novalidate=""><input name="_token" value="2afnzBfEW6BFYT1AxgRARqIr5dOILhnWYMT3TKeM" type="hidden">
                
                                <label for="message">Description:</label>
                                <textarea class="form-control" required="" name="message" cols="50" rows="10" id="message"></textarea>
                                <input class="btn btn-success" style="margin-top:20px;" value="Announce!" type="submit">
                                </form>

            </div>


            </div>

</body>
@endsection
@include('layouts.footer')
        @include('layouts.audio')
        
        <script src="/js/app.js"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</html>
