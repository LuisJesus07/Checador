@extends('layouts.app')



@section('title','Checar')

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="callout callout-info">
          <h5><i class="fas fa-info"></i> Nota:</h5>
          Esta pagina solo estara disponible durante unos segundos.

          <h4 class="segundos float-right" style="font-size: 50px; margin-top: -4%; font-weight: bold;"></h4>
        </div>


        <!-- Main content -->
        <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
            <div class="col-12">
              <h4>
                <i class="fas fa-globe"></i> AdminLTE, Inc.
                <small class="float-right">Date: 2/10/2014</small>

                <h3>Usuario</h3>
                <label>{{$usuario->nombre}}</label>
                

                <a href="/check/{{$usuario->id}}" class="btn btn-primary">Checar</a>

              </h4>
            </div>
            <!-- /.col -->
          </div>
        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</section>

@endsection

@section('scripts')
    
    <script src="{{asset('js/tiempoChecador.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection
