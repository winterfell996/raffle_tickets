<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play88 Play2Win Raffle Tickets Checker</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.webp') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
</head>

<style>
    body {
        font-family: 'FuturaBlack BT', sans-serif;
    }

    #play88Logo {
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
    }

    #title {
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        width: 70%;
    }

    #msgBigBox {
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
    }

    #msgText {
        position: absolute;
        left: 14%;
    }

    @media only screen and (max-width: 600px) {
        #play88Logo {
            top: 2%;
            width: 95%;
        }

        #title {
            top: 30%;
        }

        #msgBigBox {
            top: 50%;
            width: 70%;
        }

        p {
            font-size: large;
        }

        #msgText {
            bottom: 18%;       
        }
    }

    @media only screen and (min-width: 601px) {
        #play88Logo {
            top: 4%;
            width: 40%;
        }

        #title {
            top: 45%;
        }

        #msgBigBox {
            top: 63%;
            width: 33%;
        }

        p {
            font-size: x-large;
        }

        #msgText {
            bottom: 38%;
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
    <div class="d-none d-md-block d-lg-block d-xl-block d-xxl-block">
        <img id="title" class="title" src="{{ asset('images/title.webp') }}">
    </div>
    <div class="d-block d-md-none d-lg-none d-xl-none d-xxl-none">
        <img id="title" class="title" src="{{ asset('images/title_mobile.webp') }}">
    </div>
    <div id="msgBigBox" class="prizeBigBox">
            <img id="msg" class="msg" src="{{ asset('images/big_box.webp') }}" width="100%">
            <div id="msgText" class="msgText">
                <p>Sorry, the username you entered does not exist!</p>
            </div>
        </div>
</body>

</html>