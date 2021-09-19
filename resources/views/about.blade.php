@extends('layouts.index')

@section('content')

    <div class="container-main my-5">
        <div class="container">
            <div class="shadow">

                <div class="row py-4 text-center">
                    <div class="col">
                        <h1>{{ __("ჩვენ შესახებ") }}</h1>
                    </div>
                </div>


                <div class="row p-5">
                    <div class="col">
                        <div style="text-align: justify;">
                            
                            @if(isset($info["about_".app()->getLocale()]))
                                {{ $info["about_".app()->getLocale()] }}
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection