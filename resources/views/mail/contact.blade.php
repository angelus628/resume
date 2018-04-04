<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            color: #fff;
        }
        table table {
            border-collapse: collapse;
            max-width: 600px;
            min-width: 100px;
        }
        .light-blue {
            background-color: #70bbd9;
            color: #fff;
        }
        .dark-pink {
            background-color: #ee4c50;
        }
        table table img {
            width: 100%;
            display: block;
        }
        .content {
            padding: 3em 2.5em;
        }
        table table table {
            width: 100%;
        }
        .footer {
            padding: 3em 2.5em;
            color: #000;
            font-weight: bold;
            background-color: #70bbd9;
        }
        .important {
            color: #6ccdef;
            font-weight: bold;
        }
        a.link, a.link:visited, a.link:active {
            color: #fff;
        }
        a.link:hover {
            color: #fff;
            padding-left: -.2em;
        }
        .body {
            background-color: #222222;
            color: #fff;
        }
    </style>
</head>
<body>
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><img src="{{ $message->embed('img/mail-logo.png') }}" /></td>
                        <!--<td><img src="{{ asset('img/mail-logo.png') }}" /></td>-->
                    </tr>
                    <tr class="body">
                        <td class="content">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td><span class="important">{{ $name }}</span>, se ha contactado contigo, y dice:</td>
                                </tr>
                                <tr>
                                    <td>{{ $subject }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $content }}</td>
                                </tr>
                                <tr>
                                    <td><span class="important">Su correo es:</span></td>
                                </tr>
                                <tr>
                                    <td><a class="link" href="mailto:{{ $sender }}">{{ $sender }}</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="dark-pink">
                        <td class="footer">
                            &copy; Luis Agudelo, Bogotá Colombia {{ date('Y') }}<br />
                            Visitame en: <a class="link" href="{{ url('/') }}" target="_blank">{{ url('/') }}</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
