@extends('layouts.user_app')

@section('user_content')

<div class="mail">
    <div class="container">
        <h3>Написать</h3>
        <div class="agile_mail_grids">
            <div class="col-md-5 contact-left">
                <h4>Адрес</h4>
                <p>
                    <span>Карла Маркса,8Б
                        Днепр</span></p>
                <ul>
                    <li>Телефон :+380935469981</li>
                    <li><a href="mailto:info@gmail.com">info@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-md-7 contact-left">
                <h4>Контактная Форма</h4>
                <form action="#" method="post">
                    <input type="text" name="Name" placeholder="Имя" required="">
                    <input type="email" name="Email" placeholder="Email" required="">
                    <input type="text" name="Telephone" placeholder="Телефон" required="">
                    <textarea name="message" placeholder="Сообщение..." required=""></textarea>
                    <input type="submit" value="Отправить" >
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="contact-bottom">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.2031062933443!2d35.06822451575367!3d48.45263243714385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2d4ac712317%3A0x2ed2a7bfe8fe732c!2z0L_RgNC-0YHQv9C10LrRgiDQlNC80LjRgtGA0LAg0K_QstC-0YDQvdC40YbRjNC60L7Qs9C-LCA4LCDQlNC90ZbQv9GA0L7MgSwg0JTQvdGW0L_RgNC-0L_QtdGC0YDQvtCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0LjQvdCw!5e0!3m2!1sru!2sru!4v1506794832646" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- //mail -->
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="col-md-6 w3agile_newsletter_left">
            <h3>Новости</h3>

        </div>
        <div class="col-md-6 w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Email" required="">
                <input type="submit" value="" />
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

@endsection
