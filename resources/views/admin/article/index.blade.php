
@extends('layout')
<link rel="stylesheet" href="{{asset('assets/css/core.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/thesass.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

@section('body-content')

@include('sweetalert::alert')


<main class="main-content">
    <section class="section bg-gray">
          <div class="container">
          @forelse ($articles as $article)
              <div class="card mb-30">
                  <div class="row">
                      <div class="col-12 col-md-4 align-self-center">
                          <a href="#"><img src="{{$article->cover}}" alt="Cover Image"></a>
                      </div>
                      <div class="col-12 col-md-8">
                          <div class="card-block">
                              <h4 class="card-title">{{$article->title}}</h4>
                              <p class="card-text">{{$article->short_description}}</p>
                              <a class="fw-600 fs-12" href="#">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
      @empty
          <h4>There's no acticles</h4>
      @endforelse
      </div>
    </section>
  </main>

@endsection
