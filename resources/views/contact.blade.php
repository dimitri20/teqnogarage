@extends('layouts.index')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-4 py-3 align-self-center h-auto">
    
                <div class="row align-items-center">
                    
                    @if(array_key_exists('phone_number', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-center align-items-center shadow contact-item mx-auto mx-xl-0">
                                <img src="{{ asset("storage/icons/telephone.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">Phone</span>
                                    <a href="tel:{{ $info['phone_number'] }}"  class="text-muted">{{ $info['phone_number'] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif

                    @if(array_key_exists('facebook', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-center align-items-center shadow contact-item mx-auto mx-xl-0">
                                <img src="{{ asset("storage/icons/facebook.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">Facebook</span>
                                    <a href="{{ $info['facebook'] }}" target="_blank" class="text-muted">{{ explode('/', $info['facebook'])[3] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif
    
                    @if(array_key_exists('gmail', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-center align-items-center shadow contact-item mx-auto mx-xl-0">
                                <img src="{{ asset("storage/icons/gmail.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">E-mail</span>
                                    <a href="mailto:{{ $info['gmail'] }}" class="text-muted">{{ $info['gmail'] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif

                    @if(array_key_exists('instagram', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-center align-items-center shadow contact-item mx-auto mx-xl-0">
                                <img src="{{ asset("storage/icons/instagram.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">Instagram</span>
                                    <a href="{{ $info['instagram'] }}" target="_blank" class="text-muted">{{ explode('/', $info['instagram'])[3] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif

                    @if(array_key_exists('whatsapp', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-center align-items-center shadow contact-item mx-auto mx-xl-0">
                                <img src="{{ asset("storage/icons/whatsapp.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">Whatsapp</span>
                                    <a href="https://wa.me/{{$info['whatsapp']}}/" target="_blank" class="text-muted">{{ $info['whatsapp'] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif
                    
    
                    {{-- <div class="col col-xl-12 mb-4">
                        <div class="d-flex flex-row justify-content-center align-items-center shadow contact-item mx-auto mx-xl-0">
                            <img src="{{ asset("storage/icons/facebook.svg") }}" alt="" class="icon-main">
    
                            <div class="d-flex flex-column justify-content-start px-4">
                                <span class="mb-1">Phone</span>
                                <a href="#" class="text-muted">+99555555555</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col col-xl-12 mb-4">
                        <div class="d-flex flex-row justify-content-center align-items-center shadow contact-item mx-auto mx-xl-0">
                            <img src="{{ asset("storage/icons/facebook.svg") }}" alt="" class="icon-main">
    
                            <div class="d-flex flex-column justify-content-start px-4">
                                <span class="mb-1">Phone</span>
                                <a href="#" class="text-muted">+99555555555</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col col-xl-12 mb-4">
                        <div class="d-flex flex-row justify-content-center align-items-center shadow contact-item mx-auto mx-xl-0">
                            <img src="{{ asset("storage/icons/facebook.svg") }}" alt="" class="icon-main">
    
                            <div class="d-flex flex-column justify-content-start px-4">
                                <span class="mb-1">Phone</span>
                                <a href="#" class="text-muted">+99555555555</a>
                            </div>
                        </div>
                    </div> --}}
                    
                </div>
    
                
    
            </div>
    
            <div class="col py-3 pb-5">
                <div class="w-100 h-100">
                
                    <iframe class="gmap_iframe" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=41.774382818787046,%2044.796461805430475+(TeqnoGarage)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">

        <div class="px-5">
            <div class="row">
                <div class="col">
                    <h1 class="h1 fw-bolder">
                        Get In Touch
                    </h1>
                </div>
            </div>
            <form action="/storeFeedback" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row py-2">
                            <div class="col-12 col-md-4 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                    
                            <div class="col-12 col-md-4 mb-3">
                                <input type="text" class="form-control" name="mail" placeholder="E-Mail">
                            </div>
                    
                            <div class="col-12 col-md-4 mb-3">
                                <input type="text" class="form-control" name="number" placeholder="Phone">
                            </div>
                        </div>
        
                        <div class="row py-2">
                            <div class="col">
                                <textarea 
                                    name="text" 
                                    id="#" 
                                    cols="30" 
                                    rows="10"
                                    class="form-control"
                                    placeholder="Type What You Think!"
                                    >
                            
                                </textarea>
                            </div>
                        </div>
        
                        <div class="row py-2">
                            <div class="col">
                                <button class="btn button-green" type="submit" name="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
        
        
            </form>
        </div>
    
    </div>
</div>


@endsection()