@extends('layouts.app')
@section('content')
    @include('components.home.banner',['data'=>$responseBanner])
    @include('components.home.characteristics',['data'=>$responseChar])
    @include('components.home.benefits',['data'=>$responseBenefits])
@endsection