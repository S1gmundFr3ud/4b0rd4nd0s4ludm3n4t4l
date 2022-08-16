@extends('layouts.main', ['activePage' => 'permissions', 'titlePage' => 'Detalles del permiso'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <div class="card-title">Permisos</div>
                    <p class="card-categoty">Vista deatallada del permiso {{ $permission->name }}</p>  
                </div>
                
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-body">
                               
                                    <div class="card-text">
                                        <div class="author">
                                            <a href="#">
                                                <img src="{{ asset('img/default-avatar.png') }}" alt="image" class="avatar">
                                                <h5 class="title mt-3">{{ $permission->name }}</h5>
                                            </a>
                                            <p class="description">
                                                {{ $permission->guard_name }} <br>
                                                
                                                {{ $permission->created_at }}
                                            </p>
                                        </div>
                                        <div class="card-description">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores aspernatur deserunt dolorum minima ipsam fugiat, blanditiis quam natus, nihil eligendi unde sint magnam iusto molestiae esse similique quod iure fugit? 
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                        <button class="btn btn-sm btn-primary">Editar</button>
                                        </div>
                                        </div>    
                                </div>
                            </div>
                        </div>


                      
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('permissions.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                                        <button class="btn btn-sm btn-primary">Editar</button>
                                        </div>
                                        </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    
@endsection