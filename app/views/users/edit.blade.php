@extends('layouts.app')

@section('title','Panel')
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
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">

                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Agregar usuario</h3>
                    </div>
                    <!-- form start -->
                    <form role="form" action="/users/{{ $user->id }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" name="nombre" type="text" value="{{ $user->nombre }}" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellido</label>
                            <input type="text" name="apellido" type="text" value="{{ $user->apellido }}" class="form-control" placeholder="Apellido" required>
                          </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" type="text" value="{{ $user->email }}" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="clave" class="form-control" placeholder="Password" required>
                        </div>
                      </div>
                      <!-- /.box-body -->
        
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                        <a class="btn btn-danger btn-sm" href="/users">Cancelar</a>
                      </div>
                    </form>
                  </div>
                
                
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection