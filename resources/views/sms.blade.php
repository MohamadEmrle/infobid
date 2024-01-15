<html>
    <head>
        <title>sms</title>
    </head>
    <body>
        <form action="{{ route('sms.store') }}" method="POST">
            @csrf
            <input type="text" name="number" placeholder="number">
            <input type="text" name="message" placeholder="message">
            <input type="submit" value="send">
        </form>
    </body>
</html>
