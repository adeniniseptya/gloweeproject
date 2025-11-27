@extends('layouts.app')

@section('title','Glowee — Home')

@section('content')
  {{-- Masukkan isi index.html di sini, tapi replace asset links dengan {{ asset('css/...') }} jika diperlukan --}}
  {!! file_get_contents(resource_path('views/html_parts/index_content.html')) !!}
@endsection
