<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play88 Play2Win Raffle Tickets Checker</title>
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.webp') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
</head>

<style>
    #container {
        position: relative;
    }

    #play88Logo {
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
    }

    #enText, #cnText {
        color: #eba72b;
        position: absolute;
    }

    #title {
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        width: 70%;
    }

    #usr, #usr:active {
        background: linear-gradient(to right, #fcd457 0%, #faec97 100%);
        clip-path: polygon(10% 1%, 90% 0, 100% 50%, 90% 100%, 10% 100%, 0% 50%);
        border: none;
        outline: none;
        font-family: 'FuturaBlack BT', sans-serif;
        padding-left: 15%;
        padding-right: 15%;
    }

    #submit {
        background: linear-gradient(to bottom, #f1a410 0%, #f3bd18 100%);
        clip-path: polygon(10% 1%, 90% 0, 100% 50%, 90% 100%, 10% 100%, 0% 50%);
        border: none;
        font-family: 'FuturaBlack BT', sans-serif;
    }

    #msgText {
        color: red;
    }

    #link {
        color: #8a423b;
        text-decoration: underline;
    }

    @media only screen and (max-width: 600px) {
        #play88Logo {
            top: 2%;
            width: 95%;
        }

        #enText, #cnText {
            font-size: small;
            right: 1%;
        }

        #enText {
            top: 6%;
        }

        #cnText {
            top: 8%;
        }

        #title {
            top: 28%;
        }

        #usr {
            position: absolute;
            top: 45%;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            width: 55%;
        }

        #submit {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
        }

        #msgText {
            font-size: xx-small;
            margin-top: -65%;
        }

        #signUpNowBtn {
            padding-top: 5%;
            width: 35%;
        }

        #link {
            font-size: xx-small;
        }
    }

    @media only screen and (min-width: 601px) {
        #play88Logo {
            top: 4%;
            width: 40%;
        }

        #enText, #cnText {
            font-size: xx-large;
            right: 3%;
        }

        #enText {
            top: 20%;
        }

        #cnText {
            top: 25%;
        }

        #title {
            top: 45%;
        }

        #row {
            position: absolute;
            top: 65%;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            padding-left: 35%;
            padding-right: 35%;
        }

        #usr {
            font-size: x-large;
            width: 100%;
            height: 200%;
        }

        #submit {
            font-size: x-large;
            width: 200%;
            height: 200%;
        }

        #msgText {
            margin-top: -23%;
        }

        #signUpNowBtn {
            padding-top: 2%;
        }
    }

    @media only screen and (min-width: 1920px) {
        #title {
            top: 50%;
        }
    }
</style>

<body>
    <div id="container">
        <div class="d-none d-md-block d-lg-block d-xl-block d-xxl-block">
            <img id="background" class="background" src="{{ asset('images/background.webp') }}" width="100%">
        </div>
        <div class="d-block d-md-none d-lg-none d-xl-none d-xxl-none">
            <img id="background" class="background" src="{{ asset('images/background_mobile.webp') }}" width="100%">
        </div>
        <img id="play88Logo" class="play88Logo" src="{{ asset('images/slot_logo.webp') }}">
        <a href="https://play88gb029.xyz/">
            <p id="enText" class="enText d-flex justify-content-end">EN</p>
        </a>
        <a href="https://play88gb030.xyz/">
            <p id="cnText" class="cnText d-flex justify-content-end">CN</p>
        </a>
        <div class="d-none d-md-block d-lg-block d-xl-block d-xxl-block">
            <img id="title" class="title" src="{{ asset('images/title.webp') }}">
            <form action="{{ route('action')}}" method="POST" enctype="multipart/form-data" class="d-flex justify-content-center">
            @csrf
                <div id="row" class="row">
                    <div class="col-9 d-flex justify-content-end">
                        <input type="text" id="usr" name="usr" required>
                    </div>
                    <div class="col-3 d-flex justify-content-start">
                        <input type="submit" id="submit" class="submit" name="submit" value="CHECK">
                    </div>
                </div>
            </form>
        </div>
        <div class="d-block d-md-none d-lg-none d-xl-none d-xxl-none">
            <img id="title" class="title" src="{{ asset('images/title_mobile.webp') }}">
            <form action="{{ route('action')}}" method="POST" enctype="multipart/form-data" class="d-flex justify-content-center">
            @csrf
                <input type="text" id="usr" name="usr" required>
                <input type="submit" id="submit" class="submit" name="submit" value="CHECK">
            </form>
        </div>
        <p id="msgText" class="msgText text-center">Raffle tickets will be updated on every Wed / Thurs</p>
        <a href="https://www.play88gb008.xyz/">
            <img id="signUpNowBtn" class="signUpNowBtn mx-auto d-flex" src="{{ asset('images/sign_up_button.webp') }}">
        </a>
        <a href="https://www.play88gb008.xyz/">
            <p id="link" class="link text-center">Find Out More About<br>PLAY2WIN Lucky Draw Event Here!</p>
        </a>
    </div>
</body>
</html>
