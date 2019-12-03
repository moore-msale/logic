@component('mail::message')
    <html>
    <body>
    <div class="TTBold" style="padding:7%; border:4px #EFBB42 solid;">
        <br>
        <span class="TTBold" style="font-size:40px; color:#EFBB42">Logic</span>
        <br>
        <h2 class="TTMedium"><strong>Новая заявка с сайта</strong></h2>
        <br>
        Информация о клиенте
        <br>
        <br>
        <strong class="TTLight">Имя:</strong> {{ $formData['name'] }}<br>
        <strong class="TTLight">E-mail:</strong> {{ $formData['email'] }}<br>
        <strong class="TTLight">Телефон:</strong> {{ $formData['phone'] }}<br>
        <strong class="TTLight">Сообщение:</strong> {{ $formData['message'] }}<br>
        <br>
    </div>
    {{--<img src="" style="width:50px; height:60px;" alt="">--}}

    </body>
    </html>
@endcomponent
