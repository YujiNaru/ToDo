@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="text-center">
          <p>500</p>
          <p>Internal Server Error</p>
          <p>アクセスしようとしたページは表示できませんでした。</p>
          <a href="{{ route('home') }}" class="btn">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection