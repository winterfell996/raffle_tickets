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
    .background {
        display: block;
        width: 100vw;
        height: 100vh;
    }

    .backgroundM {
        display: none;
        width: 100vw;
        height: 100vh;
    }

    .containerA {
        position: absolute;
        left: 0;
        right: 0;
        top: 0%;
    }

    .play88Logo {
        max-width: 450px;
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    .title {
        display: block;
        max-width: 790px;
        width: 100%;
        height: auto;
        object-fit: contain;
        margin: 10px;
    }

    .titleM {
        display: none;
    }

    .prize {
        background-image: url('images/big_box.webp');
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: contain;
        color: red;
        width: 320px;
        height: 320px;
        padding: 20px;
        margin: 10px;
        text-align: center;
    }

    .prizeContainer {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        align-content: center;
    }

    .msgText {
        display: flex;
        justify-content: center;
        align-content: center;
        align-items: center;
    }

    @media only screen and (max-width: 600px) {
        .background {
            width: 100vw;
            height: 100vh;
            display: none;
        }

        .backgroundM {
            width: 100vw;
            height: 100vh;
            display: block;
        }

        .play88Logo {
            max-width: 700px;
            width: 100%;
            height: auto;
            object-fit: contain;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .title {
            display: none;
            max-width: 1200px;
            width: 100%;
            height: auto;
            object-fit: contain;
            margin: 10px;
        }

        .titleM {
            display: block;
            max-width: 300px;
            width: 100%;
            height: auto;
            object-fit: contain;
            margin: 10px;
        }

        .prize {
            background-image: url('images/big_box.webp');
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: contain;
            color: red;
            width: 300px;
            height: 140px;
            padding: 15px;
            margin: 5px;
            text-align: center;
            font-size: 20px;
        }

        .prizeContainer {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            align-content: center;
        }
    }
</style>

<body>
    <div>
        <img id="background" class="background" src="{{ asset('images/background.webp') }}" width="100%">
        <img id="background" class="backgroundM" src="{{ asset('images/background_mobile.webp') }}" width="100%">
        <div class="containerA">
            <div class="d-flex justify-content-center">
                <img id="play88Logo" class="play88Logo" src="{{ asset('images/slot_logo.webp') }}">
            </div>
            <div class="d-flex justify-content-center">
                <img id="title" class="title" src="{{ asset('images/title.webp') }}">
                <img id="title" class="titleM" src="{{ asset('images/title_mobile.webp') }}">
            </div>
            <div class="prizeContainer">
                <div class="prize">
                    <div id="msgText" class="msgText">
                        <h4>Sorry, the username you entered does not exist!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>