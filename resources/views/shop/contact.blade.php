@extends('shop.layouts.main')

@section('content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="bstore-breadcrumb">
                        <a href="/">TRANG CHỦ</a>
                        <span><i class="fa fa-caret-right	"></i></span>
                        <span>LIÊN HỆ</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page-title contant-page-title">Dịch vụ chăm sóc khách hàng</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4797113121435!2d105.80918711472444!3d21.013483193676034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7aba3cad95%3A0x7abbb4b806e8073d!2zVknhu4ZOIEPDlE5HIE5HSOG7hiBWw4AgxJDDgE8gVOG6oE8gREVWTUFTVEVS!5e0!3m2!1svi!2s!4v1624623576284!5m2!1svi!2s" width="1144" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- CONTACT-US-FORM START -->
                    <div class="contact-us-form">
                        <div class="contact-form-center">
                            <!-- CONTACT-FORM START -->
                            <form class="contact-form" id="contactForm" method="post" action="{{ route('shop.postContact') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="form-group primary-form-group">
                                            <label>Họ Tên</label>
                                            <input type="text" class="form-control input-feild" id="name" name="name" value="">
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control input-feild" id="email" name="email" value="">
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <label>Điện Thoại</label>
                                            <input type="text" class="form-control input-feild" id="phone" name="phone" value="">
                                        </div>
                                        <br>
                                        <button type="submit" name="submit" id="sendMessage" class="send-message main-btn">Gửi <i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="type-of-text">
                                            <div class="form-group primary-form-group">
                                                <label>Message</label>
                                                <textarea class="contact-text" name="content"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- CONTACT-FORM END -->
                        </div>
                    </div>
                    <!-- CONTACT-US-FORM END -->
                </div>
            </div>
        </div>
    </section>
@endsection
