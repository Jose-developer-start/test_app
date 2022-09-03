@extends('layouts.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Panel administrativo
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Agregar usuario</h3>
                    </div>
                    <!-- form start -->
                    <form role="form" action="/users" method="POST">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
                          </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="clave" class="form-control" placeholder="Password" required>
                        </div>
                      </div>
                      <!-- /.box-body -->
        
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </form>
                  </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Usuarios</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-responsive-sm table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nombre }}</td>
                                <td>{{ $user->apellido }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <a class="btn btn-info btn-sm mr-1" href="/users/{{ $user->id }}">Edit</a>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <form action="/users/{{ $user->id }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  

            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
@endsection


<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $.noConflict();
    /*$('#example1').DataTable()*/
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>