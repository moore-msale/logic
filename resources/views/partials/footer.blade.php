<?php
    $contact2 = \App\Contact::all()->first();
?>
<div class="container-fluid footer" id="contacts" style="background-color: #f6f6f6; margin-top: 7%;">
    <div class="container">
    <div class="row py-5">
        <div class="col-lg-3 col-12 px-0">
            <h2 class="title-section open-sans font-weight-bold text-uppercase">
                <span class="green-letter">К</span>онтакт<span class="green-letter">ы</span>
            </h2>
            <p class="footer-title font-weight-bold mt-4 mb-0">
                Адрес офиса:
            </p>
            <p class="footer-text" style="padding-right:25%;">
                <a href="https://go.2gis.com/9hz41" class="text-dark">{{ $contact2->address }}</a>
            </p>
            <p class="footer-title font-weight-bold mt-4 mb-0">
                Телефон:
            </p>
            <p class="footer-text" style="padding-right:25%;">
                <a href="tel: {{$contact2->phone}}" class="text-dark">{{ $contact2->phone }}</a>
            </p>
            <p class="footer-title font-weight-bold mt-4 mb-0">
                Почта:
            </p>
            <p class="footer-text" style="padding-right:25%;">
                <a href="mailto:{{ $contact2->email }}" class="text-dark">{{ $contact2->email }}</a>
            </p>
        </div>
        <div class="col-lg-5 col-12 py-lg-0 py-4 px-lg-2 px-0">
            <div class="bg h-100" style="background-image: url({{ asset('images/footer-img.png') }}); padding: 15% 10%;">
                <h2 class="title-section open-sans font-weight-bold text-uppercase text-white">
                    Реквизиты компании «Logic»
                </h2>
                <div class="mt-5 translateY-1">
                    <a href="{{asset('files/Контакты_реквизиты_Logic.docx')}}" class="nectar-button second-style-button magger text-white " style="background:none!important; border-radius:20px!important;border: 1px solid #fefefe; padding-left:26px; padding-top:10px; padding-bottom:10px; padding-right:53px;" download><span>Подробнее</span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <h2 class="title-section open-sans font-weight-bold text-uppercase">
                <span class="green-letter">Р</span>еквизит<span class="green-letter">ы</span>
            </h2>
            <p class="footer-text mt-3">
                {!! $contact2->about !!}

            </p>
        </div>
    </div>
    </div>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1595.6950063247584!2d74.62241857572126!3d42.819679015370916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb7db2a79d8d9%3A0xd2319fc72d11134b!2z0J7QkNCeIMKr0JvQvtC00LbQuNC6wrsgKExvZ2ljIE9KU0Mp!5e0!3m2!1sru!2skg!4v1574760309955!5m2!1sru!2skg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>
<div class="container-fluid d-lg-block d-none" style="background-color: #fefefe;">
<div class="container">
    <div class="row py-3">
        <div class="footer-area" style="width:20%;">
            <img src="{{ asset('images/footer-logo.svg') }}" alt="">
        </div>
        <div class="footer-area d-flex px-2 justify-content-between align-items-center" style="width:20%;">
            <img style="height: 70%;" src="{{ asset('images/footer-location.png') }}" alt=""><p class="ml-2 mb-0 font-weight-bold" style="font-size: 13px; line-height: 100%;">
                <a href="https://go.2gis.com/9hz41" style="text-decoration: none;color: #000;">{{ $contact2->address }}</a></p>
        </div>
        <div class="footer-area d-flex px-2 align-items-center" style="width:20%;">
            <img style="height: 50%;" src="{{ asset('images/footer-phone.png') }}" alt=""><p class="ml-2 mb-0 font-weight-bold" style="font-size: 13px; line-height: 100%;"> <a href="tel:{{$contact2->phone}}" style="text-decoration: none;color: #000;">{{ $contact2->phone }}</a>
            </p>

        </div>
        <div class="footer-area d-flex px-2 align-items-center" style="width:20%;">
            <img style="height: 50%;" src="{{ asset('images/footer-mail.png') }}" alt=""><a href="mailto:{{$contact2->email}}" class="text-dark"><p class="ml-2 mb-0 font-weight-bold" style="font-size: 13px; line-height: 100%;">
                {{ $contact2->email }}
            </p></a>
        </div>
        <div class="footer-area d-flex px-2 align-items-center" style="width:20%;">
            <p class="ml-2 mb-0 font-weight-bold" style="font-size: 13px; line-height: 100%;">© copyright 2019
            </p>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="callModal" tabindex="15" role="form"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content feedback-content" style="background: #fefefe;">
            <div>
                <div class="modal-body p-5 text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="mb-5" style="font-size: 25px; line-height: 120%; color: #000000;">
                        Оставьте нам свою заявку
                    </h2>
                    <form id="callForm">
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="name" type="text" id="form-name2"
                                   placeholder="Ваше имя*" required>
                        </div>
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="phone" type="tel" id="form-phone2"
                                   placeholder="Ваш номер телефона*" required>
                        </div>
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="company" type="text" id="form-company2"
                                   placeholder="Организация*" required>
                        </div>
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="email" type="email" id="form-email2"
                                   placeholder="Введите E-mail*" required>
                        </div>
                        <div class="form-group">
                            <textarea class="w-100 mb-2 p-2" name="message" type="message" id="form-message2"
                                      placeholder="Сообщение*" required></textarea>
                        </div>
                        <div class="form-group">
                            <span id="ajax-message2" class="btn w-100" href="#" style="border-radius: 2px !important;background: #005b52;border: 1px solid #005b52;background-image: linear-gradient(#00423c,#005b52); color: #fff;">Отправить</span>
                        </div>
                    </form>
                    <div class="send-success-mail2 p-2 d-none" style="background-color: #eaeaea;">
                        <i class="fas fa-check-circle" style="color:#00d920;"></i><span class="pl-2 text-fut-bold" style="color:#000000;">Заявка успешно отправлена!</span>
                    </div>
                    <div class="send-error-mail2 p-2 d-none" style="background-color: #eaeaea;">
                        <i class="fas fa-exclamation-circle text-fut-bold text-white" style="color:#00d920;"></i><span
                                class="pl-2" style="color:#000000;">Отзыв не был отправлен!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>