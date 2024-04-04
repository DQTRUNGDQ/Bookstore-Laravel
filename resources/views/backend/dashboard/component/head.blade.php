    <base href="{{ env('APP_URL') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BookWorldAdmin | Dashboard </title>

    <link rel="shortcut icon" href="{{ asset('/upload/logo/favicon-32x32.png') }}" type="image/x-icon">

    <link href="temp/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="temp/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" />

    <link href="temp/css/animate.css" rel="stylesheet">

    @if (isset($config['css']) && is_array($config['css']))

        @foreach ($config['css'] as $key => $val)
            {!! '<link rel="stylesheet" href="' . $val . '">' !!}
        @endforeach

    @endif
    <link href="temp/css/style.css" rel="stylesheet">
    <link href="backend/css/customize.css" rel="stylesheet">
    <script src="temp/js/jquery-3.1.1.min.js"></script>
