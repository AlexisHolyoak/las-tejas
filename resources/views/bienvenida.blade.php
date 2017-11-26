@extends ('layouts.admin')
@section ('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ asset('images/1.jpg') }}" alt="Las Tejas">
    </div>

    <div class="item">
      <img src="{{ asset('images/2.jpg') }}" alt="Las Tejas">
    </div>

    <div class="item">
      <img src="{{ asset('images/3.jpg') }}" alt="Las Tejas">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="fa fa-chevron-left fa-3x" style="padding-top: 220px"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="fa fa-chevron-right fa-3x" style="padding-top: 220px"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@push('script')
<script>
    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Sistema de Restaurante', 'Bienvenido a LAS TEJAS');

        }, 1300);
    });
</script>
@endpush
@endsection
