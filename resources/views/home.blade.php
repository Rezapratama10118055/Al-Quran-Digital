@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Al-Qur'an Digital</div>

                <div class="card-body">
                   

   


<!-- //awal -->

<div class="container">
   <div class="row">
    @foreach($quran as $item)
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
       <div class="card-header" style="position: relative;">
    <h5 class="card-title" style="position: relative; z-index: 1;">{{ $item['name'] }}</h5>
    <img src="{{ asset('images/abstrak.jpg') }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
</div>

            <!-- <div class="card-header">
                <h5 class="card-title">{{ $item['name'] }}</h5>
            </div> -->
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Arab : {{ $item['name_translations']['ar'] }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">English : {{ $item['name_translations']['en'] }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Indonesia : {{ $item['name_translations']['id'] }}</h6>
                <p class="card-text">Ayat: {{ $item['number_of_ayah'] }}</p>
                <p class="card-text">Surat: {{ $item['number_of_surah'] }}</p>
                <p class="card-text">Tempat: {{ $item['place'] }}</p>
                <p class="card-text">Tipe Surah: {{ $item['type'] }}</p>
                <!-- <a href="{{ $item['recitation'] }}" class="btn btn-primary">Download</a>
                
                <audio controls style="width: 180px; margin-top: 10px; ">
                <source src="{{ $item['recitation'] }}" type="audio/mpeg">
                </audio> -->

                <div class="card-body text-center">
                <a href="{{ $item['recitation'] }}" class="btn btn-primary mb-3">Download</a>
                <br>
                <audio controls style="width: 150px; margin-top: 10px;">
                <source src="{{ $item['recitation'] }}" type="audio/mpeg">
                </audio>
                </div>

          
               
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
<!-- //akhir -->

                          
                        </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
