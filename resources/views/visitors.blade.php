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
    body {
        overflow-x: hidden;
        width: 100%;
        padding: 0;
        margin: 0;
    }

    .background {
        width: 100vw;
        height: 100vh;
        display: block;
    }

    .backgroundM {
        width: 100vw;
        height: 100vh;
        display: none;
    }

    .containerA {
        position: absolute;
        left: 0;
        right: 0;
        top: 0%;
    }

    .logo {
        max-width: 480px;
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    .title {
        display: block;
        max-width: 850px;
        ;
        margin: 1% 2% 2% 2%;
    }

    .titleM {
        display: none;
    }

    .rowContainer {
        display: flex;
        justify-content: center;
        flex-direction: row;
    }

    .msgText {
        text-align: center;
        font-size: 10px;
        color: red;
        padding: 5px;
    }

    #usr,
    #usr:active {
        background: linear-gradient(to right, #fcd457 0%, #faec97 100%);
        clip-path: polygon(10% 1%, 90% 0, 100% 50%, 90% 100%, 10% 100%, 0% 50%);
        border: none;
        outline: none;
        font-family: 'FuturaBlack BT', sans-serif;
        padding-left: 15%;
        padding-right: 15%;
        max-width: 340px;
        height: 50px;
    }

    #submit {
        background: linear-gradient(to bottom, #f1a410 0%, #f3bd18 100%);
        clip-path: polygon(10% 1%, 90% 0, 100% 50%, 90% 100%, 10% 100%, 0% 50%);
        border: none;
        font-family: 'FuturaBlack BT', sans-serif;
        width: 200px;
        font-size: 18px;
    }

    .signUpBtn {
        max-width: 200px;
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    .langContainer {
        position: absolute;
        right: 0;
        top: 0;
        display: flex;
        z-index: 999;
    }

    .langContainerM {
        display: none;
        justify-content: center;
        flex-direction: row;
    }

    .langBox {
        background-color: white;
        margin: 5px;
        border-radius: 10px;
    }

    @media only screen and (max-width: 1280px) {
        .logo {
            max-width: 500px;
            width: 100% height:auto;
            object-fit: contain;
        }

        .title {
            max-width: 900px;
            width: 100%;
            height: auto;
            object-fit: contain;
            margin: 2% 2% 2% 2%;
        }

        .msgText {
            text-align: center;
            font-size: 12px;
            color: red;
        }

        .formContainer {
            margin: 2% 0 0 0;
            display: flex;
            justify-content: center;
        }

        #usr,
        #usr:active {
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
            width: 200px;
        }
    }


    @media only screen and (min-width: 1700px) {
        .logo {
            max-width: 700px;
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .title {
            max-width: 1200px;
            width: 100%;
            height: auto;
            object-fit: contain;
            margin: 2% 2% 2% 2%;
        }

        .msgText {
            text-align: center;
            font-size: 14px;
            color: red;
            margin: 1% 0;
        }

        .formContainer {
            margin: 2% 0 0 0 0;
        }

        #usr,
        #usr:active {
            background: linear-gradient(to right, #fcd457 0%, #faec97 100%);
            clip-path: polygon(10% 1%, 90% 0, 100% 50%, 90% 100%, 10% 100%, 0% 50%);
            border: none;
            outline: none;
            font-family: 'FuturaBlack BT', sans-serif;
            padding-left: 15%;
            padding-right: 15%;
            max-width: 540px;
            width: 100%;
            height: 50px;
        }

        #submit {
            background: linear-gradient(to bottom, #f1a410 0%, #f3bd18 100%);
            clip-path: polygon(10% 1%, 90% 0, 100% 50%, 90% 100%, 10% 100%, 0% 50%);
            border: none;
            font-family: 'FuturaBlack BT', sans-serif;
            width: 200px;
            font-size: 18px;
        }

        .signUpBtn {
            max-width: 200px;
            width: 100%;
            height: auto;
            object-fit: contain;
            margin: 10px;
        }

    }


    @media only screen and (max-width: 600px) {
        body {
            overflow-x: hidden;
        }

        .background {
            width: 100vw;
            height: 100vh;
            display: none;
        }

        .backgroundM {
            width: 100vw;
            height: 100vh;
            display: block;
            overflow-y: hidden;
        }

        .logo {
            max-width: 500px;
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .title {
            display: none;

        }

        .titleM {
            display: block;
            max-width: 300px;
            margin: 15px 0px 15px 0px;
        }

        .rowContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            flex-direction: column;
        }

        #submit {
            background: linear-gradient(to bottom, #f1a410 0%, #f3bd18 100%);
            clip-path: polygon(10% 1%, 90% 0, 100% 50%, 90% 100%, 10% 100%, 0% 50%);
            border: none;
            font-family: 'FuturaBlack BT', sans-serif;
            width: 100px;
            font-size: 18px;
            margin: 10px;
        }

        .signUpBtn {
            max-width: 200px;
            width: 100%;
            height: auto;
            object-fit: contain;
            margin: 10px;
        }

        .langContainer {
            display: none;
        }


        .langContainerM {
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
    }
</style>

<body>
    <div>
        <img id="background" class="background" src="{{ asset('images/background.webp') }}" width="100%">
        <img id="backgroundM" class="backgroundM" src="{{ asset('images/background_mobile.webp') }}" width="100%">
        <div class="langContainer">
            <a href="https://play88gb029.xyz/">
                <p id="enText" class="langBox" style="padding:5px;">EN</p>
            </a>
            <a href="https://play88gb030.xyz/">
                <p id="cnText" class="langBox" style="padding:5px;">CN</p>
            </a>
        </div>
        <div class="d-flex justify-content-center containerA">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <img id="" class="logo" src="{{ asset('images/slot_logo.webp') }}">
                </div>
                <div class="d-flex justify-content-center">
                    <img id="title" class="title" style=";" src="{{ asset('images/title.webp') }}">
                    <img id="title" class="titleM" src="{{ asset('images/title_mobile.webp') }}">
                </div>
                <div class=" formContainer">
                    <form action="{{ route('action') }}" method="POST" enctype="multipart/form-data"
                        class="d-flex justify-content-center">
                        @csrf
                        <div id="" class="rowContainer">
                            <input type="text" id="usr" name="usr" required>
                            <input type="submit" id="submit" class="submit" name="submit" value="CHECK">
                        </div>
                    </form>
                </div>
                <p id="" class="msgText">Raffle tickets will be updated on every Wed / Thurs</p>
                <a href="https://www.play88gb008.xyz/" class="d-flex justify-content-center">
                    <img id="" class="signUpBtn" src="{{ asset('images/sign_up_button.webp') }}">
                </a>
                <a href="https://www.play88gb008.xyz/">
                    <p id="link" class="link text-center">Find Out More About<br>PLAY2WIN Lucky Event Here!</p>
                </a>
                <div class="langContainerM">
                    <a href="https://play88gb029.xyz/">
                        <p id="enText" class="langBox" style="padding:5px;">EN</p>
                    </a>
                    <a href="https://play88gb030.xyz/">
                        <p id="cnText" class="langBox" style="padding:5px;">CN</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>