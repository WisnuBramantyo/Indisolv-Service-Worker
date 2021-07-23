@extends('layouts.theme')
<style type="text/css">
</style>
@section('content')

    <!-- HOME -->
    <section id="home" data-stellar-background-ratio="0.5">
    <!-- Slider Wrapper -->
    <div class="css-slider-wrapper">
      <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
      <input type="radio" name="slider" class="slide-radio2" id="slider_2">
      <input type="radio" name="slider" class="slide-radio3" id="slider_3">
      <input type="radio" name="slider" class="slide-radio4" id="slider_4">

      <!-- Slider Pagination -->
      <div class="slider-pagination">
        <label for="slider_1" class="page1"></label>
        <label for="slider_2" class="page2"></label>
        <label for="slider_3" class="page3"></label>
        <label for="slider_4" class="page4"></label>
      </div>

      <!-- Slider #1 -->
      <div class="slider slide-1">
        <img src="images/model-1.png" alt="">
        <div class="slider-content">
          <h4>Indisolv</h4>
          <h2>Your Solutive Assitant</h2>
          <button type="button" class="chat-now-btn" name="button">Free</button>
        </div>
        <div class="number-pagination">
          <span>1</span>
        </div>
      </div>

      <!-- Slider #2 -->
      <div class="slider slide-2">
        <img src="images/model-2.png" alt="">
        <div class="slider-content">
          <h4>Indihome </h4>
          <h2>Promo Akhir Tahun Semua Bisa Berubah Maju</h2>
          <button type="button" class="chat-now-btn" name="button">375K</button>
        </div>
        <div class="number-pagination">
          <span>2</span>
        </div>
      </div>

      <!-- Slider #3 -->
      <div class="slider slide-3">
        <img src="images/model-3.png" alt="">
        <div class="slider-content">
          <h4>Upgrade Speed</h4>
          <h2>Upgrade Kecepatan Internet hingga 300Mbps</h2>
          <button type="button" class="chat-now-btn" name="button">Detail</button>
        </div>
        <div class="number-pagination">
          <span>3</span>
        </div>
      </div>

      <!-- Slider #4 -->s
      <div class="slider slide-4">
        <img src="images/model-4.png" alt="">
        <div class="slider-content">
          <h4>Bayar Tagihan Indihome</h4>
          <h2>Informasi Tagihan dan Pembayaran yang Praktis</h2>
          <button type="button" class="chat-now-btn" name="button">Free</button>
        </div>
        <div class="number-pagination">
          <span>4</span>
        </div>
      </div>
    </div>
    </section>


@endsection
