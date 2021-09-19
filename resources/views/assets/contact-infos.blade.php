<div class="top-nav-contents-container d-flex flex-row justify-content-center">
    <div class="top-nav-content-item">
        <a href="{{ isset($data->facebook) ? $data->facebook : '' }}" target="_blank">
            <img src="{{ asset('storage/icons/facebook.svg') }}" alt="">
        </a>
    </div>

    <div class="top-nav-content-item">
        <a href="{{ isset($data->instagram) ? $data->instagram : '' }}" target="_blank">
            <img src="{{ asset('storage/icons/instagram.svg') }}" alt="">
        </a>
    </div>

    <div class="top-nav-content-item">
        <a href="mailto:{{ isset($data->gmail) ? $data->gmail : '' }}" target="_blank">
            <img src="{{ asset('storage/icons/gmail.svg') }}" alt="">
        </a>
    </div>

    <div class="top-nav-content-item">
        <a href="https://wa.me/{{ isset($data->whatsapp) ? $data->whatsapp : '' }}/" target="_blank">
            <img src="{{ asset('storage/icons/whatsapp.svg') }}" alt="">
        </a>
    </div>

    <div class="top-nav-content-item">
        <a href="tel:{{ isset($data->phone_number) ? $data->phone_number : '' }}">
            <img src="{{ asset('storage/icons/telephone.svg') }}" alt="">
        </a>
    </div>

    <div class="top-nav-content-item">
        <a href="https://www.google.com/maps/place/?q=place_id:{{ isset($data->location) ? $data->location : '' }}" target="_blank">
            <img src="{{ asset('storage/icons/google-maps.svg') }}" alt="">
        </a>
    </div>
</div>