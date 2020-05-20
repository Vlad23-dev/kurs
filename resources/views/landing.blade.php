
@extends('layouts.tmplt')

@section('title-block')
    Landing Page
@endsection

@section('content')

<div class="row frstsection">
        <div class="col-lg-8">
            <a href="#">
                <div>
                    <img src="/images/Moto9.3.png" class="foto1">
                </div>
            </a>
        </div>
        <div class="col-lg-4 scndsection">
            <a href="#">
                <div>
                    <img src="/images/Moto1.png" class="foto2">
                </div>
            </a>
            <a href="#">
                <div>
                    <img src="/images/Moto2.png" class="foto3">
                </div>
            </a>
        </div>
  </div>

<div class="section">ТОВАРИ</div>


<div class="row">
    <div class="col-lg-3">
        <a href="#">
            <div>
                <img src="/images/jacket.png" >
            </div>
        </a>  
    </div>
    <div class="col-lg-3">
        <a href="#">
            <div>
                <img src="/images/helmet.png">
            </div>
        </a>  
    </div>
    <div class="col-lg-3">
        <a href="#">
            <div>
                <img src="/images/trinket.png">
            </div>
        </a>
    </div>
    <div class="col-lg-3 more">
        <a href="#">
            <div>
                <img src="/images/rectangle1.png">
            </div>
        </a>
    </div>
</div>

<div class="section">НОВИНКИ</div>

<div class="col-lg-12">
    <a href="#">
        <div>
            <img src="/images/Moto7.png">
        </div>
    </a>
</div>

<div class="section">МОТОЦИКЛИ</div>

<div class="row">
    <div class="col-lg-4">
        <a href="#">
            <div>
                <img src="/images/Moto4.png">
            </div>
        </a> 
    </div>
    <div class="col-lg-4">
        <a href="#">
            <div>
                <img src="/images/Moto5.png">
            </div>
        </a>
    </div>
    <div class="col-lg-4">
        <a href="#">
            <div>
                <img src="/images/Moto8.png" class="moto8">
            </div>
        </a>
    </div>
</div>

@endsection