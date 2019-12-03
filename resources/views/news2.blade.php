@extends('layouts.app')
@push('styles')
    <style>
        body
        {
            overflow-x: hidden;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid" style="padding-top: 10%; padding-bottom: 1%;">
        <div class="container">
            <div class="pt-lg-0 pt-5">
                <div class="sand-step d-lg-flex d-none align-items-center justify-content-center" data-aos="fade-up">
                </div>
                <div class="mt-4 text-center">
                    <p class="title-section open-sans font-weight-bold" data-aos="fade-up">
                        Наилучшее серверное решение для Вашего бизнеса
                    </p>
                    <div class="row justify-content-center pt-3">
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;">
                            Цифровая трансформация бизнеса захлестнула как большие так и маленькие предприятия.  Для того, чтобы ИТ стала успешной и приносила доход необходима инфраструктура типа Hybrid IT для обеспечения правильного сочетания инфраструктуры и услуг, для разработки приложений на постоянной основе и привлечению внимания к принятию решений на основе данных. Для тех ИТ руководителей, которые должны определить правильное сочетание Hybrid IT в локальных средах с выделенными и облачными средами, с размещением облачных вычислений, необходим новый вычислительный опыт для получения облачной экономики и гибкости для обеспечения безопасности локальных дата центров.
                        </p>
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">HPE ProLiant Gen10 серверы</span>созданы для упрощения гибридного ИТ, чтобы обеспечить гибкость современных инфраструктур, защиту цифровых активов, и предоставить экономический контроль оплаты только за то, что было использовано.</p>

                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">Гибкость в достижении результатов в бизнесе.</span> Лучший способ достичь результатов на базе программной инфраструктуры, которая обеспечивает интеллектуальную автоматизацию и высокую производительность, – это сокращение операционных сложностей для традиционных приложений одновременно с увеличением скорости создания новых.</p>
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">Безопасность для защиты цифровых активов.</span> Лучший способ защитить бизнесы и их важные данные – это использовать инфраструктуру со встроенной защитой.</p>
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">Экономический контроль над прибылью.</span>Лучший способ потребления ИТ, которая позволит своим клиентам платить только за то, что они используют, - это масштабирование по требованию без завышения и экспоненициального увеличения расходов.</p>
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">Стоечные HPE ProLiant Gen10 серверы</span>Семейство Gen10 DL являются наиболее гибкими, надежными и производительно-оптимизированными ProLiant стоечными серверами.</p>
                        <img class="img-fluid" data-aos="fade-up" src="{{asset('images/proliant.jpg')}}" alt="">
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;">Пакет ProLiant Gen10, интегрированный с упрощенным и комплексным пакетом управления и поддержкой, являющейся лидером в отрасли, предлагает более надежное, быстрое и безопасное решение для инфраструктуры, помогает повысить производительность ИТ-персонала и ускоряет доставку услуг. Кроме того, портфель стоечных серверов оптимизирован для работы с несколькими приложениями, что значительно увеличивает скорость ИТ-операций и позволяет ИТ быстрее реагировать на потребности бизнеса любого размера.</p>
                        <img class="img-fluid" data-aos="fade-up" src="{{asset('images/hpe.jpg')}}" alt="">
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">Сервер HPE ProLiant DL360 Gen10 </span>поддерживает масштабируемое семейство процессоров Intel® Xeon® с коэффициентом усиления до 71% и возможностью увеличения на 27% в ядрах2(cores2), плюс 2666 МТ/с HPE DDR4 SmartMemory с поддержкой до 3.0 ТВ3 с увеличением производительности до 66%.  Благодаря добавленной производительности, которая обеспечивается с помощью 12 NVDIMM и 10 NVMe, HPE ProLiant DL360 Gen10 означает бизнес! Легко развернуть, обновить, контролировать и поддерживать автоматизируя наиболее важные задачи по управлению жизненным циклом сервера с помощью HPE OneView и HPE iLO5.</p>
                        <img class="img-fluid"  data-aos="fade-up" src="{{asset('images/dl380.jpg')}}" alt="">
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">Сервер HPE ProLiant DL380 Gen10</span> надежно разработан для снижения затрат и сложности. Он поддерживает 12 Гбит / с SAS и до 20 накопителей NVMe, а также широкий спектр вариантов вычисления. HPE Persistent Memory оптимизированная на серверах HPE ProLiant, обеспечивает беспрецедентный уровень производительности для баз данных и аналитических рабочих нагрузок. На DL380 Gen10 клиенты могут запускать все, от самых простых до критически важных приложений, и с уверенностью их развертывать.</p>
                        <img  class="img-fluid" data-aos="fade-up" src="{{asset('images/dl380.jpg')}}" alt="">
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">Сервер HPE ProLiant DL560 Gen10</span> - это высокопроизводительный, 4P-сервер с высокой производительностью, масштабируемостью и надежностью, и все в шасси 2U. Поддерживая процессоры Intel® Xeon® с масштабированием до 68%, сервер HPE ProLiant DL560 Gen10 обеспечивает большую вычислительную мощность, до 3 ТБ более быстрой памяти, ввод-вывод до восьми слотов PCIe 3.0, а также разумное и простое автоматизированное управление с помощью HPE OneView и HPE iLO5. Сервер HPE ProLiant DL560 Gen10 является идеальным сервером для критически важных бизнес-задач, виртуализации, консолидации серверов, базы данных, бизнес-обработки и общих приложений с интенсивным использованием данных 4P, где пространство дата центров и правильная производительность имеют первостепенное значение.</p>
                        <p class="title-section text-center" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">HPE ProLiant Gen10 + Microsoft Windows Server ROK</span></p>
                        <img class="img-fluid" data-aos="fade-up" src="{{asset('images/dlMicrosoft.png')}}" alt="">
                        <p class="news-desc-desc text-center" data-aos="fade-up" style="max-width: 950px;"><span class="open-sans font-weight-bold">Hewlett Packard Enterprise</span> и <span class="open-sans font-weight-bold">Microsoft</span> объединяют ведущие мировые серверно-аппаратные и программные инновации, приложения, ресурсы и поддержку. Чтобы клиенты покупали нужный им сервер HPE ProLiant с правильными выпусками Microsoft® Windows Server®, компания HPE разработала HPE OEM Microsoft Windows Server Reseller Option Kit (ROK). ROK предлагает разумную цену, гибкий выбор, единый заказ и поддержку с одного источника, чтобы помочь клиентам быть более продуктивными, добиваться большего с их инвестициями и обеспечивать бесперебойную работу своего бизнеса. Реселлеры HPE могут предустановить операционную систему Windows Server, которую выбрали клиенты как решение, и которая полностью адаптирована для их ИТ-потребностей, и готовая к немедленному пользованию.</p>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
            </div>
        </div>
    </div>
@endsection
