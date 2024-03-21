    <base href="{{ env('APP_URL') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BookWorldAdmin | Dashboard </title>

    <link href="temp/css/bootstrap.min.css" rel="stylesheet">
    <link href="temp/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="temp/css/animate.css" rel="stylesheet">

    @if(isset($config['css']) && is_array($config['css']))

        @foreach($config['css'] as $key => $val)
            {!! '<link rel="stylesheet" href="'.$val.'">' !!}
        @endforeach

    @endif
    <link href="temp/css/style.css" rel="stylesheet">
    <link href="backend/css/customize.css" rel="stylesheet">
    <script src="temp/js/jquery-3.1.1.min.js"></script>