@extends('layouts.index')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-4 py-3 align-self-center h-auto">
    
                <div class="row align-items-center">
                    
                    @if(array_key_exists('phone_number', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-start align-items-center shadow contact-item ps-4">
                                <img src="{{ asset("storage/icons/telephone.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">ტელეფონი</span>
                                    <a href="#" class="text-muted">{{ $info['phone_number'] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif

                    @if(array_key_exists('facebook', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-start align-items-center shadow contact-item ps-4">
                                <img src="{{ asset("storage/icons/facebook.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">facebook</span>
                                    <a href="#" class="text-muted">{{ explode('/', $info['facebook'])[3] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif
    
                    @if(array_key_exists('gmail', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-start align-items-center shadow contact-item ps-4">
                                <img src="{{ asset("storage/icons/gmail.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">ელ-ფოსტა</span>
                                    <a href="#" class="text-muted">{{ $info['gmail'] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif

                    @if(array_key_exists('instagram', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-start align-items-center shadow contact-item ps-4">
                                <img src="{{ asset("storage/icons/instagram.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">instagram</span>
                                    <a href="#" class="text-muted">{{ explode('/', $info['instagram'])[3] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif

                    @if(array_key_exists('whatsapp', $info))
                        
                        <div class="col col-xl-12 mb-4">
                            <div class="d-flex flex-row justify-content-start align-items-center shadow contact-item ps-4">
                                <img src="{{ asset("storage/icons/whatsapp.svg") }}" alt="" class="icon-main">
        
                                <div class="d-flex flex-column justify-content-start px-4">
                                    <span class="mb-1">whatsapp</span>
                                    <a href="#" class="text-muted">{{ $info['whatsapp'] }}</a>
                                </div>
                            </div>
                        </div>

                    @endif
                    

                    
                </div>
    
                
    
            </div>
    
            <div class="col py-3 pb-5">
                <div class="w-100 h-100">
                    
                        <iframe class="gmap_iframe" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=technogarage&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

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
                        უკუკავშირი
                    </h1>
                </div>
            </div>
            <form action="/">
                <div class="row">
                    <div class="col">
                        <div class="row py-2">
                            <div class="col-12 col-md-4 mb-3">
                                <input type="text" class="form-control">
                            </div>
                    
                            <div class="col-12 col-md-4 mb-3">
                                <input type="text" class="form-control">
                            </div>
                    
                            <div class="col-12 col-md-4 mb-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
        
                        <div class="row py-2">
                            <div class="col">
                                <textarea 
                                    name="" 
                                    id="#" 
                                    cols="30" 
                                    rows="10"
                                    class="form-control"
                                    >
                            
                                </textarea>
                            </div>
                        </div>
        
                        <div class="row py-2">
                            <div class="col">
                                <button class="btn button-orange" type="submit" name="submit">
                                    წერილის გაგზავნა
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