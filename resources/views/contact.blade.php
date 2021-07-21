@extends('layouts.index')

@section('content')

<div class="container">

    <div class="feedback-form-inner-container">
        <form action="/">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                
                        <div class="col">
                            <input type="text" class="form-control">
                        </div>
                    </div>
    
                    <div class="row">
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
    
                    <div class="row">
                        <div class="col">
                            <input 
                                type="submit" 
                                name="submit" 
                                id="#"
                                class="btn btn-primary"
                                >
                        </div>
                    </div>
                </div>
            </div>
            
    
    
        </form>
    </div>

</div>

@endsection()