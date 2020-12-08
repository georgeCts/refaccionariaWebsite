@section('title', 'Expert Tips')

@section('content')
    <!-- ======= Pomociones Section ======= -->
    <section id="products" class="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>EXPERT TIPS</h2>
                </div>
            </div>
        </div>

        <div class="container expert-tips">
            <div class="row">
                @foreach ($lstTips as $item)
                    <div class="col-lg-6 text-center">
                        @if ($item->file != null)
                            <img src="{{Storage::url($item->file)}}" alt="{{$item->title}}" />
                        @endif
                        <div class="info">
                            <p>{{$item->body}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Promociones Section -->
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.PreFooter')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')