@extends('layouts.index')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-4 py-3 align-self-center h-auto">
    
                <div class="row align-items-center">
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
                    
                </div>
    
                
    
            </div>
    
            <div class="col py-3 pb-5">
                <div class="w-100 h-100">
                
                    <iframe class="gmap_iframe" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=675&amp;height=400&amp;hl=en&amp;q=Tbilisi&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">

        <div class="feedback-form-inner-container">
            <div class="row">
                <div class="col">
                    <h1 class="h1 fw-bolder">
                        Get In Touch
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