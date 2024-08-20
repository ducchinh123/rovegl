<!DOCTYPE html>
<html lang="en" itemscope="" itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('client.layouts.partials.css')

    <title>
        About Us - Rovegl.com </title>
</head>

<body class="presentation-page">

    @include('client.layouts.partials.header-nav')

    @if (!request()->routeIs('client.contact-us'))
        @include('client.layouts.partials.header')

        <section class="pt-5" id="count-stats">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 z-index-2 border-radius-xl mt-n20 mt-sm-n10 mx-auto py-3 blur shadow-blur">
                        <div class="row">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-info"><span id="state1"
                                            countto="2000">2,000</span>+
                                    </h1>
                                    <h5 class="mt-3">Pages and Groups</h5>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-info"> <span id="state2"
                                            countto="500">500</span>M+
                                    </h1>
                                    <h5 class="mt-3">Subscriber</h5>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-info"> <span id="state3" countto="5">5</span>B+
                                    </h1>
                                    <h5 class="mt-3">Views/month</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="row justify-content-center text-center mt-sm-5">
                        <div class="col-lg-6">
                            <h2 class="text-dark mb-0">Services</h2>
                            <p class="lead text-justify text-sm-center">Since 2017, we are always looking out for new
                                ways
                                to help our clients to maximize their potential with a 500 millions subscribers pages
                                system
                                to make sure your content travels around. We offer a wide range of services such as:</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-sm-5 mt-0">
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="info-horizontal bg-gradient-info border-radius-xl p-5">
                            <div class="description ps-5">
                                <h5 class="text-white">Boosting Video Views</h5>
                                <p class="text-white">Increase video views through a system of Fanpages on the Facebook
                                    platform</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  px-lg-1 mt-lg-0 mt-4">
                        <div class="info-horizontal bg-gradient-info border-radius-xl p-5">
                            <div class="description ps-5">
                                <h5 class="text-white">Monetizing Content Globally</h5>
                                <p class="text-white">Monetize content for creators in the international market, and
                                    maximize revenue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  mt-lg-0 mt-4">
                        <div class="info-horizontal bg-gradient-info border-radius-xl p-5">
                            <div class="description ps-5">
                                <h5 class="text-white">Buying content</h5>
                                <p class="text-white">We are always looking for quality content from all over the world
                                    to
                                    find them a worthy home</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif



    @yield('content')


    @include('client.layouts.partials.footer')


    @include('client.layouts.partials.js')

    @yield('script')

    <ddict-div></ddict-div>
</body>

</html>
