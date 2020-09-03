@extends('layouts.app')

@section('title')
    Laravel | About Us
@endsection

@section('content')
    <section hidden id="our-office">

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

    <section>
        <img id="corona" class="zoom alignnone wp-image-1993 aligncenter"
             src="https://teamconsultancy.co.uk/wp-content/uploads/2020/05/90500947_1346217302254710_7166083586834038784_o-300x158.png"
             alt="" width="100%" height="424"/>
        <div class="kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q">
            <br>
            <h2 dir="auto" style="text-align: center;">COVID-19 Updates:</h2>
            <br>
        </div>
        <div class="o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q">
            <h5 dir="auto">TEAM Consultancy UK is committed to the welfare of its clients and staff during this
                difficult and challenging time.</h5>
        </div>
        <div dir="auto">As the Coronavirus situation continues to evolve, our thoughts go out to all who have been
            impacted or infected. We hope you are safe and well. We are taking all the necessary precautions and closely
            monitoring Government guidance and will take any steps recommended to minimise disruption.
        </div>
        <div dir="auto">Our mission is to ensure our services continue as normal. We have prepared business continuity
            plans and following Government advice we are in the process of enabling our employees to work from home
            where they can.
        </div>
        <div dir="auto">We are not arranging any more one to one consultation in our Bangladesh regional offices (Sylhet
            and Moulvibazar) including our head office in Birmingham, United Kingdom until further notice. However, we
            will remain accessible to you 24/7 via emails, Skype and our Facebook live chatroom. If you need any
            assistance, please contact one of our members of staff who will be happy to assist you with your queries.
        </div>
        <div dir="auto">As the spread of Covid-19 increases, please be assured that we are doing everything possible to
            continue to provide all vital services for our clients in regards to their higher education matters in the
            UK.
        </div>
        <div dir="auto">Please stay at home and maintain personal hygiene as instructed by health authorities.</div>
        <div class="o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q">
            <h5 dir="auto">Once again, we would like to thank you all for your continuous support.</h5>
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

<style>
    .zoom {
        transition: transform .2s; /* Animation */
        margin: 0 auto;
    }

    .zoom:hover {
        transform: scale(1.1);
    }
</style>
