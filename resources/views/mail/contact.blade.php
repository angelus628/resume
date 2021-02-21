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
        .footer div {
            float: left;
            display: inline-block;
            margin: 0 0.2rem;
        }
        div.copy {
            width: 65%;
            max-width: 65%;
        }
        div.social {
            width: 25%;
            max-width: 25%;
        }
        img.social-icon {
            width: 15%;
            max-width: 15%;
            padding: .06rem;
            float: left;
            display: inline-block;
            border-radius: .25rem;
        }
    </style>
</head>
<body>
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><img src="{{ $message->embed('img/mail-logo.png') }}"  alt="Logo"/></td>
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
                    <tr>
                        <td class="footer">
                            <div class="copy">
                                &copy; Luis Agudelo, Bogotá Colombia {{ date('Y') }}<br />
                                Visitame en: <a class="link" href="{{ url('/') }}" target="_blank">{{ url('/') }}</a>
                            </div>

                            <div class="social">
                                <!-- -->
                                <div>
                                <a href="https://github.com/angelus628"><img class="social-icon" src="{{ $message->embed('img/github-icon.png') }}" /></a>
                                <a href="https://www.linkedin.com/in/luis-%C3%A1ngel-agudelo-pajoy-68342086/"><img class="social-icon" src="{{ $message->embed('img/linkedin-icon.png') }}" /></a>
                                <a href="https://twitter.com/luzzodijopipe"><img class="social-icon" src="{{ $message->embed('img/twitter-icon.png') }}" /></a>
                                <a href="https://www.instagram.com/luzzodijopipe/"><img class="social-icon" src="{{ $message->embed('img/instagram-icon.png') }}" /></a>
                                <a href="https://www.facebook.com/luzzodijopipe"><img class="social-icon" src="{{ $message->embed('img/facebook-icon.png') }}" /></a>
                                </div>
                                <!-- -->
                                <!--
                                <a href="https://github.com/angelus628"><img class="rounded float-left" src="{{ asset('img/github-icon.png') }}" /></a>
                                <a href="https://www.linkedin.com/in/luis-%C3%A1ngel-agudelo-pajoy-68342086/"><img class="rounded float-left" src="{{ asset('img/linkedin-icon.png') }}" /></a>
                                <a href="https://twitter.com/luzzodijopipe"><img class="rounded float-left" src="{{ asset('img/twitter-icon.png') }}" /></a>
                                <a href="https://www.instagram.com/luzzodijopipe/"><img class="rounded float-left" src="{{ asset('img/instagram-icon.png') }}" /></a>
                                <a href="https://www.facebook.com/luzzodijopipe"><img class="rounded float-left" src="{{ asset('img/facebook-icon.png') }}" /></a>
                            -->
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
