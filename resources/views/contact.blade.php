@extends('layouts.index')

@section('content')


<div class="contact_info">
    <div class="container">
        <div class="row px-5">
           
            <div class="contact_info_item col d-flex flex-row align-items-center justify-content-start">
                <div class="contact_info_image">
                    <img src="{{ asset('storage/icons/phone.png') }}" alt="">
                </div>

                <div class="contact_info_content">
                    <div class="contact_info_title">Phone</div>
                    <div class="contact_info_text">+995 555 555 555</div>
                </div>
            </div>

            <div class="contact_info_item col d-flex flex-row align-items-center justify-content-start">
                <div class="contact_info_image">
                    <img src="{{ asset('storage/icons/mail.png') }}" alt="">
                </div>

                <div class="contact_info_content">
                    <div class="contact_info_title">Gmail</div>
                    <div class="contact_info_text">example@gmail.com</div>
                </div>
            </div>

            <div class="contact_info_item col d-flex flex-row align-items-center justify-content-start">
                <div class="contact_info_image">
                    <img src="{{ asset('storage/icons/whatsapp.png') }}" alt="">
                </div>

                <div class="contact_info_content">
                    <div class="contact_info_title">whatsapp</div>
                    <div class="contact_info_text">+995 555 555 555</div>
                </div>
            </div>
                
        </div>
    </div>
</div>


<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_form_container">
                    <div class="contact_form_title">Get In Touch</div>

                    <form action="#" id="contact_form">
                        <div class="contact_form_inputs d-flex flex-md-row flex-cokumn justify-content-between align-items-between">
                            <input type="text" id="contact_form_name" placeholder="Your Name" class="contact_form_name input_field">
                            <input type="text" id="contact_form_email" placeholder="Your Email" class="contact_form_name input_field">
                            <input type="text" id="contact_form_phone" placeholder="Your Phone Number" class="contact_form_name input_field">
                        </div>

                        <div class="contact_form_text">
                            <textarea name="" id="contact_form_message" placeholder="Message" cols="30" rows="10" class="text_field contact_form_message"></textarea>
                        </div>

                        <div class="contact_form_button"><button class="btn btn-primary">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection()