@extends('layouts.frontend.master')
@section('title', 'Contact')
@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">
        @include('layouts.frontend._slider')
    </div>

    <br><br>
    <!-- Contact -->
    <section id="contact">
        <div class="inner-width">

            <div class="contact-info">
                <div class="item">
                    <i class="fas fa-mobile-alt"></i>
                     <p style="font-size: 13px">
                        01749969029, 01713-493050
                     </p>
                </div>

                <div class="item">
                    <i class="fas fa-envelope"></i>
                    <p style="font-size: 13px">
                        info@daffodilvarsity.edu.bd
                    </p>
                </div>

                <div class="item">
                    <a href="#maps" style="color: white;">
                        <i class="fas fa-map-marker-alt"></i>
                        <p style="font-size: 13px">Daffodil Internatinal University, Ashulia, Dhaka</p>
                    </a>
                </div>
            </div>

            <form class="contact-form">
                <input type="text" class="nameZone" placeholder="DIU ID" required>
                <input type="email" class="emailZone" placeholder="DIU Email" required>
                <input type="text" class="subjectZone" placeholder="Subject" required>
                <textarea class="messageZone" placeholder="Message" required></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </div>
        <br>
        <div class="map" style="text-align: center;" id="maps" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d116728.71958798803!2d90.34433529965821!3d23.89768504376733!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a707416b7fb3c64!2zRGFmZm9kaWwgSW50ZXJuYXRpb25hbCBVbml2ZXJzaXR5IOCmoeCnjeCmr-CmvuCmq-Cni-CmoeCmv-CmsiDgpobgpqjgp43gpqTgprDgp43gppzgpr7gpqTgpr_gppUg4Kas4Ka_4Ka24KeN4Kas4Kas4Ka_4Kam4KeN4Kav4Ka-4Kay4Kav4Ka8!5e0!3m2!1sen!2sbd!4v1601286570459!5m2!1sen!2sbd" width="1225" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
    <br>
@endsection
