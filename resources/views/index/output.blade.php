<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <p>----- Output -----</p>
            <pre>{{ $sensitive_detect_msg }}</pre>
            <p>---------------------</p>
        </div>
    </body>
</html>
