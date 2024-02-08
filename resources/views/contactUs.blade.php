@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
    <main>
        <div class="container">
            <div class="background-image">
                <div class="background-overlay"></div>
                <div class="background-content">
                    <div class="introduction">
                        <h1>
                            Contact Us
                        </h1>
                        <h3>
                            We appreciate your interest in Rikkeisoft. Send us a question, and we’ll get back to you as soon
                            as
                            possible.
                        </h3>
                        <h3>
                            Follow us on our social media:
                        </h3>
                        <div class="media-logo">
                            <div class="logo"><a href="https://www.facebook.com/rikkeisoft/" class="logo-fb"><i
                                        class="fab fa-facebook"></i></a></div>
                            <div class="logo"><a href="https://www.youtube.com/c/Rikkeisoft" class="logo-yt"><i
                                        class="fab fa-youtube"></i></a></div>
                            <div class="logo"><a href="https://www.linkedin.com/company/rikkeisoft" class="logo-lin"><i
                                        class="fab fa-linkedin"></i></a></div>
                        </div>
                        <a class="connect-link" href="https://rikkeisoft.com/ja/contact-us-2/">Click here to connect with
                            Rikkeisoft Japan</a>
                    </div>
                </div>
            </div>
            <div class="company-information">
                <h1 class="country">Vietnam</h1>
                <div class="company-location">
                    <div class="company-branch">
                        <h3>Ha Noi</h3>
                        <div class="address-phone">
                            <p>21st Floor, Handico Tower, Pham Hung St., Nam Tu Liem District
                                Hanoi, Vietnam</p>
                            <p><i class="fas fa-phone"></i>(+84) 24 362 316 85</p>
                        </div>
                    </div>
                    <div class="company-branch">
                        <h3>Hochiminh City</h3>
                        <div class="address-phone">
                            <p>7th Floor, Maritime Safety South Building, 42 Tu Cuong St.,
                                Ward 4, Tan Binh Dist Hochiminh City, Vietnam</p>
                            <p><i class="fas fa-phone"></i>(+84) 28 225 380 04</p>
                        </div>
                    </div>
                    <div class="company-branch">
                        <h3>Danang</h3>
                        <div class="address-phone">
                            <p>11th Floor, VietNam News Agency Building, 81 Quang Trung St.,
                                Hai Chau Dist Danang, VietNam</p>
                            <p><i class="fas fa-phone"></i>(+84) 23 696 268 5</p>
                        </div>
                    </div>
                    <div class="company-branch">
                        <h3>Hue</h3>
                        <div class="address-phone">
                            <p>62 To Huu, Xuan Phu, Hue City</p>
                            <p><i class="fas fa-phone"></i>(+84) 28 225 380 04</p>
                        </div>
                    </div>
                </div>
                <div class="border-bottom"></div>
                {{-- --------------------------------------------------------------------- --}}
                <h1 class="country">Japan</h1>
                <div class="company-location">
                    <div class="company-branch">
                        <h3>Tokyo</h3>
                        <div class="address-phone">
                            <p>3rd Floor, Fujishima Building, Tamachi 16 Street, 4-13-4 Shiba, Minato-ku, Tokyo, Japan</p>
                            <p><i class="fas fa-phone"></i>(+81) 36 435 0754</p>
                        </div>
                    </div>
                    <div class="company-branch">
                        <h3>Osaka</h3>
                        <div class="address-phone">
                            <p>2nd Floor, Office’ Port Osaka, 3-5-10 Nishitenma, Kita-ku, Osaka, Japan</p>
                            <p><i class="fas fa-phone"></i>(+81) 36 435 0754</p>
                        </div>
                    </div>
                    <div class="company-branch">
                        <h3>Nagoya</h3>
                        <div class="address-phone">
                            <p>5th Floor, Ark Sakae Tokai Building, 2-9-5 Sakae, Naka-ku, Nagoya, Japan</p>
                            <p><i class="fas fa-phone"></i>(+81) 36 435 0754</p>
                        </div>
                    </div>
                    <div class="company-branch">
                        <h3>Fukuoka</h3>
                        <div class="address-phone">
                            <p>Hakata Suncity Building 507, Hakataekiminami 2-chōme−1−5, Hakata-ku, Fukuoka, Japan</p>
                            <p><i class="fas fa-phone"></i>(+81) 36 435 0754</p>
                        </div>
                    </div>
                </div>
                <div class="border-bottom"></div>
                {{-- --------------------------------------------------------------------- --}}
            </div>

        </div>
    </main>
@endsection
