@extends('masters.homepageMaster')
@section('main')



    <style>
        body {
            background-image: url('../images/istockphoto-1224826528-640x640.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        h1{
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        h2{
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        h3{
            padding-bottom: 50px;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/elecstyle.css')}}">


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/aaa.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/bbb.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/ccc.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container pt-5">


        <h1 class="pb-5" style="padding-top: 100px">
            Who are we?
        </h1>

        <h3 style="padding-bottom: 200px">
            We are the company that everyone trust. With quality products and excellent customer service, we guarantee to bring you the best feeling when purchase products from us
        </h3>



        <div class="row">
            <img class="col-6 pb-5" height="500px" src="{{asset('images/work.jpg')}}" alt="" >

            <div class="col-6 pb-5">
                <h1 class="pb-5">
                    How we work?
                </h1>
                <h3>
                    Welcome to Harvel Electric, your number one source for all things electrics. We're dedicated to giving you the very best of electronic devices, with a focus on dependability, customer service and uniqueness.
                </h3>
                <h3>
                    Founded in 2022 by Harvel, Harvel Electric has come a long way from its beginnings in a small group of people in Vietnam.
                </h3>
{{--                <h3>--}}
{{--                    We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.--}}
{{--                </h3>--}}
            </div>

        </div>


        <h1 class="pb-5" style="padding-top: 100px">
            Our products
        </h1>

        <h2 class="" style="padding-bottom: 200px">
            In Harvel Electrics, we sell: camera, cell phones, laptop, GPS & finder, headphones, television & video. All of our products came from famous brand like; Canon, Samsung, Apple,...
        </h2>

        <div class="row " style="padding-bottom: 50px">

            <img class="col-4 " height="300px" src="{{asset('images/Project Web/Camera/Canon/EOS M50 Mark II/M50MII_Black_FrontSlantLeft_M15-45.jpg')}}" >
            <div class="col-4 ">
                <h2 class="pb-5">
                    <b>
                        Camera
                    </b>

                </h2>
                <h3 style="text-align: center">
                    A camera is an optical instrument that captures a visual image. 	At a basic level, cameras consist of sealed boxes, with a small hole that 	allows light through to capture an image on a light-sensitive surface
                </h3>
            </div>

            <img class="col-4 " height="300px" src="{{asset('images/Project Web/Camera/Nikon/D850/1585_D850_left.png')}}" >

        </div>


        <div class="row" style="padding-bottom: 50px">

            <img class="col-4 center" height="300px" src="{{asset('images/Project Web/Cell Phones/Apple/iPhone 13 Pro/apple-iphone-13-pro-max-1.jpg')}}" >
            <div class="col-4">
                <h2 class="pb-5">
                    <b>
                        Cell Phones
                    </b>
                </h2>
                <h3>
                    Cell phone shortened to simply mobile, cell or just phone,
                    is a portable telephone that can make and receive calls over a radio frequency
                    link while the user is moving within a telephone service area. The radio
                    frequency link establishes a connection to the switching systems of a mobile
                    phone operator, which provides access to the public switched telephone network.
                </h3>
            </div>
            <img class="col-4 center" height="300px" src="{{asset('images/Project Web/Cell Phones/Samsung/S22 Ultra/B0-02-group-kv-basic-configurator-MB-720x540.jpg')}}" >
        </div>

        {{--    <h3>--}}
        {{--        Cell phone shortened to simply mobile, cell or just phone,--}}
        {{--        is a portable telephone that can make and receive calls over a radio frequency--}}
        {{--        link while the user is moving within a telephone service area. The radio--}}
        {{--        frequency link establishes a connection to the switching systems of a mobile--}}
        {{--        phone operator, which provides access to the public switched telephone network.--}}
        {{--    </h3>--}}
        <div class="row" style="padding-bottom: 50px">
            <img class="col-4 center" height="300px" src="{{asset('images/Project Web/Laptop/Apple/MacBook Pro/laptopapplemacbookprom1-1-org.jpg')}}" >
            <div class="col-4">
                <h2 class="pb-5">
                    <b>
                        Laptop
                    </b>

                </h2>
                <h3>
                    A laptop is a personal computer that makes it easy to carry around
                    and work in different locations and terrains. Laptops have been designed to be
                    fully functional like a desktop computer, which means they can run the same
                    software and open the same files as a desktop computer.
                </h3>
            </div>
            <img class="col-4 center" height="300px" src="{{asset('images/Project Web/Laptop/Lenovo/Legion 7 Gen 6/ml2ro2cfjcesty67hrh4s9lo3jc73g265697.png')}}" >
        </div>

        {{--    <h3>--}}
        {{--        A laptop is a personal computer that makes it easy to carry around--}}
        {{--        and work in different locations and terrains. Laptops have been designed to be--}}
        {{--        fully functional like a desktop computer, which means they can run the same--}}
        {{--        software and open the same files as a desktop computer.--}}
        {{--    </h3>--}}

        <div class="row">
            <img class="col-4" height="300px" src="{{asset('images/Picture4.1.3.jpg')}}">
            <div class="col-8">
                <h2 class="pb-5">
                    <b>
                        GPS & Finder
                    </b>
                </h2>
                <h3 >
                    Full GPS is the Global Positioning System which is a global
                    positioning system developed and owned by the United States of America. GPS
                    can provide the most accurate information about the position of everything 	on the Earth surface at all times of the day, under all weather conditions,
                    and is completely free to all users around the world
                </h3>
            </div>

        </div>

        <div class="row">
            <div class="col-8">
                <h2 class="pb-5">
                    <b>
                        Headphone
                    </b>
                </h2>
                <h3 >
                    Headphone is the term used to name headphones in general,
                    with many different designs such as In-ear, On-ear, Over-ear. These names
                    are agreed by the manufacturers to use their own design. However, in general,
                    they are all just different variations of Headphone.
                </h3>
            </div>
            <img class="col-4" height="300px" src="{{asset('images/Picture5.3.1.jpg')}}">


        </div>


        <img class="center" height="300px" src="{{asset('images/Picture6.2.1.jpg')}}">

        <h2 class="pb-5">
            <b>
                Television
            </b>
        </h2>
        <h3>
            Television is an electronic and telecommunications
            system capable of receiving wave and radio or wire signals to be converted
            into images and sounds and is a type of television transmitter that transmits
            content primarily with vivid images and accompanying audio. A television is a
            machine that receives those signals and emits images.
        </h3>
    </div>
@endsection
