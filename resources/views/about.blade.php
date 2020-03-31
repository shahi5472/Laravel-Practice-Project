@extends('layouts.app')

@section('title')
    Laravel | About Us
@endsection

@section('content')
    <section id="our-office">

        <div id="main-div-offcie">
            <div>
                <h1 class="head-text">GET IN TOUCH!</h1>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <h2 class="office-location">Head Office</h2>
                    <h2 class="office-name"><b>Birmingham</b></h2>
                    <p>Spaces, 156 Great Charles St, Queensway, Birmingham B3 3HN<br>
                        <strong>Email:</strong>&nbsp;<a href="mailto:admission@teamconsultancy.co.uk">admission@teamconsultancy.co.uk</a><br>
                        <strong>Phone:</strong> <a href="tel:+4403301330180">+4403301330180</a><br>
                        <strong>WhatsApp:</strong> <a target="_blank"
                                                      href="https://api.whatsapp.com/send?phone=+447903015422">+447903015422</a>
                    </p>
                </div>

                <div class="col-md-3">
                    <h2 class="office-location">Bangladesh</h2>
                    <h2 class="office-name"><b>Moulvibazar</b></h2>
                    <p>Rahman Market, Court Road, College Gate, Moulvibazar-3200<br>
                        <strong>Email:</strong>&nbsp;<a href="mailto:admission@teamconsultancy.co.uk">admission@teamconsultancy.co.uk</a><br>
                        <strong>Phone:</strong> <a href="tel:+880130148313">+880130148313</a><br>
                        <strong>WhatsApp:</strong> <a target="_blank"
                                                      href="https://api.whatsapp.com/send?phone=+447903015422">+447903015422</a>
                </div>

                <div class="col-md-3">
                    <h2 class="office-location">Bangladesh</h2>
                    <h2 class="office-name"><b>Sylhet</b></h2>
                    <p>Millennium Tower, Room 604, 6th floor (Lift 7), Sylhet-3100<br>
                        <strong>Email:</strong>&nbsp;<a href="mailto:admission@teamconsultancy.co.uk">admission@teamconsultancy.co.uk</a><br>
                        <strong>Phone:</strong> <a href="tel:+880130148313">+880130148313</a><br>
                        <strong>WhatsApp:</strong> <a target="_blank"
                                                      href="https://api.whatsapp.com/send?phone=+447903015422">+447903015422</a>
                </div>

                <div class="col-md-3">
                    <h2 class="office-location">Nigeria</h2>
                    <h2 class="office-name"><b>Abuja</b></h2>
                    <p>Ext. E, Suite 58, 3rd Floor, Efab Mall, Area 11, Garki, Abuja, Nigeria.<br>
                        <strong>Email:</strong>&nbsp;<a href="mailto:admission@teamconsultancy.co.uk">admission@teamconsultancy.co.uk</a><br>
                        <strong>Phone:</strong> <a href="tel:+2348057157133">+2348057157133</a><br>
                        <strong>WhatsApp:</strong> <a target="_blank"
                                                      href="https://api.whatsapp.com/send?phone=+2348038048206">+2348038048206</a>
                </div>
            </div>
        </div>

    </section>
@endsection

<style>
    .head-text {
        color: red;
    }

    .office-name {
        color: red;
    }

    .head-text {
        text-align: center;
        font-size: 45px;
        font-weight: 900;
        margin-bottom: 15px;
    }
</style>
