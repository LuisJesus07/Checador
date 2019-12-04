<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('app_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('app_assets/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px">

      @if(!empty($checkEntrada))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Entrada Registrada</strong> Tu entrada ha sido registrada con exito.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

      @if(!empty($checkSalida))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Salida Registrada</strong> Tu Salida ha sido registrada con exito.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info" style="margin-top: 1.5%;">
              <h5><i class="fas fa-info"></i> Nota:</h5>
              Esta pagina solo estara disponible durante unos segundos.

              <h4 class="segundos float-right" style="font-size: 50px; margin-top: -3%; font-weight: bold;"></h4>
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-3">

                          <!-- Profile Image -->
                          <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                              <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{asset('app_assets/dist/img/userIcon.jpg')}}"
                                     alt="User profile picture">
                              </div>

                              <h3 class="profile-username text-center">{{$usuario->nombre}}</h3>

                              <p class="text-muted text-center">{{$usuario->apellidos}}</p>

                              <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                  <b>F. Nacimiento</b> <a class="float-right">{{$usuario->fechaNacimiento}}</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Telefono</b> <a class="float-right">{{$usuario->telefono}}</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Email</b> <a class="float-right">{{$usuario->email}}</a>
                                </li>
                              </ul>

                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                          <div class="card">
                            <div class="card-header p-2">
                              <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Actividad</a></li>
                              </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                              <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                  <!-- Post -->
                                  <div class="card-body">
                                    <div class="form-group">
                                      <label for="inputName">Checks</label>
                                      <div class="text-muted">
                                        <label>{{$checks}}</label>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputDescription">Proyectos</label>
                                      <div class="text-muted">
                                        <label>{{$numProyectosUsuario}}</label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.post -->
                                </div>
                              </div>
                              <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                          </div>
                          <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    

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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('app_assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('app_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('app_assets/dist/js/adminlte.min.js')}}"></script>

<script src="{{asset('js/tiempoChecador.js')}}"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
</html>
