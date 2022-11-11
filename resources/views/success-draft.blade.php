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

    #title {
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        width: 70%;
    }

    @media only screen and (max-width: 600px) {
        #play88Logo {
            top: 2%;
            width: 95%;
        }

        #title {
            top: 30%;
        }

        #prizeBigBox {
            position: absolute;
            top: 48%;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
        }

        #roundText {
            position: absolute;
            top: 25%;       
            left: 25%;
        }

        #grandPrizeBigBox {
            position: absolute;
            bottom: 15%;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
        }

        #grandPrizeText {
            position: absolute;
            bottom: 5%;
            left: 24%;
        }
    }

    @media only screen and (min-width: 601px) {
        #play88Logo {
            top: 4%;
            width: 40%;
        }

        #title {
            top: 35%;
        }

        .row {
            position: absolute;
            bottom: 28%;
            left: 0;
            right: 0;
            /* margin-top: -31%; */
            margin-left: auto;
            margin-right: auto;
            width: 70%;
        }

        #roundText {
            position: absolute;
            bottom: 25%;       
            left: 15%;
        }

        #grandPrizeText {
            position: absolute;
            bottom: 25%;
            right: 15%;
        }

        p {
            font-size: x-large;
        }
    }

    @media only screen and (min-width: 1920px) {
        #roundText {
            bottom: 30%;
            left: 18%;
        }

        #grandPrizeText {
            bottom: 30%;
            right: 18%;
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
        <div class="row">
            <div class="col">
                <img id="prize" class="prize" src="{{ asset('images/big_box.webp') }}" width="100%">
                <div id="roundText" class="roundText">
                    <h1 class="text-center">Round 1</h1>
                    @foreach($raffle_tickets as $raffle_ticket)
                    <p>You have {{ $raffle_ticket->raffle_tickets }} tickets</p>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <img id="grandPrize" class="grandPrize" src="{{ asset('images/big_box.webp') }}" width="100%">
                <div id="grandPrizeText" class="grandPrizeText">
                    <h1 class="text-center">Grand Prize</h1>
                    @foreach($grand_prize_raffle_tickets as $grand_prize_raffle_ticket)
                    <p>You have {{ $grand_prize_raffle_ticket->raffle_tickets }} tickets</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-md-none d-lg-none d-xl-none d-xxl-none">
        <img id="title" class="title" src="{{ asset('images/title_mobile.webp') }}">
        <div id="prizeBigBox" class="prizeBigBox">
            <img id="prize" class="prize" src="{{ asset('images/big_box.webp') }}" width="100%">
            <div id="roundText" class="roundText">
                <h1 class="text-center">Round 1</h1>
                @foreach($raffle_tickets as $raffle_ticket)
                <p>You have {{ $raffle_ticket->raffle_tickets }} tickets</p>
                @endforeach
            </div>
        </div>
        <div id="grandPrizeBigBox" class="grandPrizeBigBox">
            <img id="grandPrize" class="grandPrize" src="{{ asset('images/big_box.webp') }}" width="100%">
            <div id="grandPrizeText" class="grandPrizeText">
                <h1 class="text-center">Grand Prize</h1>
                @foreach($grand_prize_raffle_tickets as $grand_prize_raffle_ticket)
                <p>You have {{ $grand_prize_raffle_ticket->raffle_tickets }} tickets</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>

</html>
