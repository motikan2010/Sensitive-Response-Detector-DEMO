<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <div style="margin: 30px;">
            <form action="{{ route('output') }}">
                <label><input name="sensitive_detect_msg" value="Sample Text" /></label>
                <input type="submit" />
            </form>

            <form action="{{ route('output') }}">
                <label for="ipv4">IPv4</label><br/>
                <input id="ipv4" name="sensitive_detect_msg" value="192.168.1.1" />
                <input type="submit" />
            </form>

            <form action="{{ route('output') }}">
                <label for="email">Email Address</label><br/>
                <input id="email" name="sensitive_detect_msg" value="info@example.com" />
                <input type="submit" />
            </form>

            <form action="{{ route('output') }}">
                <label for="card">Visa Card Number</label><br/>
                <input id="card" name="sensitive_detect_msg" value="4563-7568-5698-4587" />
                <input type="submit" />
            </form>

        </div>
    </body>
</html>
