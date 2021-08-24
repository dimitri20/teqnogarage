@extends('layouts.app')

@section('content')



<div class="container">
    <form action="{{ route('bannerImages.store') }}" method="post" id="upload-image-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="file" class="form-control" id="image-input">
            <span class="text-danger" id="image-input-error"></span>
        </div>

        <div class="form-group my-5">
          <button type="submit" class="btn btn-success">Upload</button>
        </div>
    </form>


    <div id="images-container" class="w-100">

        @foreach($bannerImages as $key => $value)
            <div class="my-5 image-container">
                <div class="w-100 d-flex flex-row justify-content-between align-items-center my-3">
                    <span class="image-name">{{ $value->name }}</span>

                    <form
                        action="{{ route('bannerImages.destroy', $value->id) }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="btn btn-outline-danger"
                            type="submit">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                    
                </div>
                <img height="660px" class="w-100 image" style="object-fit: cover;" src="{{ asset('storage/'.$value->banner_image) }}" alt="{{ $value->name }}">
            </div>
        @endforeach

    </div>

</div>


{{-- <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $('#upload-image-form').submit(function(e) {
       e.preventDefault();
       let formData = new FormData(this);
       $('#image-input-error').text('');

       $.ajax({
          type:'POST',
          url: `/upload-images`,
           data: formData,
           contentType: false,
           processData: false,
           success: (response) => {
             if (response) {
               this.reset();
               alert('Image has been uploaded successfully');
             }
           },
           error: function(response){
              console.log(response);
                $('#image-input-error').text(response.responseJSON.errors.file);
           }
       });
       
       $('#image-input').val("")

  });

</script> --}}

    {{-- <div class="container">

        <form action="/home/bannerImages" method="POST" enctype="multipart/form-data" class="w-100" id="mainSubmit">
            <div class="row" id="main-images-container">
                
                @foreach ($bannerImages as $image)
                    
                    <div class="col-12 my-5 image-container">
                        <div class="w-100 d-flex flex-row justify-content-between align-items-center my-3">
                            <span class="image-name">{{ $image->name }}</span>
                            <div class="btn btn-outline-danger rm-image">
                                <i class="bi bi-trash"></i>
                            </div>
                        </div>
                        <img height="660px" class="w-100 image" style="object-fit: cover;" src="{{ $image->banner_image }}" alt="">
                    </div>


                @endforeach



                <label class="my-5">
                    Upload Image
                    <input type="file" class="form-control" id="upload-image" multiple>
                </label>




                <button type="submit" class="btn btn-primary w-100" id="submit">Update Banner Images</button>
            </div>
        </form>
    </div> --}}

@endsection