@extends('layouts.master')

@section('title', 'Contact')

@section('css')
    <link rel="stylesheet" href="{{ asset('sl3/css/contact.css') }}">
@endsection

@section('content')
    <div class="allContainer contact">
        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Me</p>
        </div>

        <div class="row row-cols-2" data-aos="fade-up" data-aos-duration="1000">
            <a href="https://www.google.com/maps/place/Rumah+Talenta+BCA/@-6.5886849,106.880192,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c7ff4c5bd601:0xbaf218b456b897e4!8m2!3d-6.5886902!4d106.8823807!16s%2Fg%2F11l0dmgc3q">
                <div class="col address">
                    <div class="rounded-circle">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="pack">
                        <h3>My Address</h3>
                        <p>Rumah Talenta BCA, Kabupaten Bogor, Jawa Barat 16810</p>
                    </div>
                </div>
            </a>
            <div class="col social">
                <div class="rounded-circle">
                    <i class="bi bi-share"></i>
                </div>
                <div class="pack">
                    <h3>Social Profiles</h3>
                    <div class="socialCart">
                        <a href="https://www.linkedin.com/in/nicole-felice-81aa171b6/">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://github.com/nicolefeliceee">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://www.instagram.com/nicolefelicee/">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
                <div class="col email">
                    <div class="rounded-circle">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="pack">
                        <h3>Email Me</h3>
                        <p>nicolefeliceee@gmail.com</p>
                    </div>
                </div>
            </a>
            <div class="col call">
                <div class="rounded-circle">
                    <i class="bi bi-telephone"></i>
                </div>
                <div class="pack">
                    <h3>Call Me</h3>
                    <p>+62 81994352967</p>
                </div>
            </div>
        </div>
    </div>
@endsection
