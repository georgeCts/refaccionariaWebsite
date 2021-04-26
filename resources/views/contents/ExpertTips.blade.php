@section('title', 'Expert Tips')

@section('content')
    <div class="bolsa-trabajo">
        <div class="portada">
            <div class="container-fluid w13">
                <h3 class="text-uppercase">Expert Tips</h3>
            </div>
        </div>

        <div class="expert-tips">
            <div class="row">
                @foreach ($lstTips as $item)
                    <div class="col-lg-4 text-center">
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
    </div>
@endsection

@include('components.Header')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')