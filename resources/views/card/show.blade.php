@extends('layouts.main', ['activePage' => 'card_show', 'titlePage' => 'Detalles del usuario'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-info">
                    <div class="card-title">Usuarios</div>
                    <p class="card-categoty">Vista deatallada del usuario </p>  
                </div>
                
                <div class="card-body">
     @if (session('success'))
                                    <div class="alert alert-success" role='success'>
                                        {{ session('success')}}
                                    </div>
                                    @endif
                    <div class="row">
                        
                     
                      
                        
                         <center>  <div class="col-md-4">
                            <div class="card card-user">
                            <div class="card-body">
                            <p class="card-text">
                            </p><div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                            <img class="avatar" src="https://black-dashboard-laravel.creative-tim.com/black/img/emilyz.jpg" alt="">
                            <h5 class="title">Nombre</h5>
                            </a>
                           Profesion
                            </p>
                            </div>
                            <p></p>
                            <div class="card-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro nostrum obcaecati ratione inventore assumenda? Minima ratione esse quae cum voluptatem asperiores, fugiat, laboriosam nostrum, optio enim saepe vel repellat sequi.
                            </div>
                            </div>
                            <div class="card-footer">
                            <div class="button-container">
                            <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                            </button>
                            <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                             </button>
                            <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                            </button>
                            </div>
                            </div>
                            </div>
                            </div><br>
                            <button type="button" class="btn btn-info" onclick="window.location.href='{{ route('card.index') }}'">Volver</button>
                        </center>
                            </div> 
                            <br>
                            

                    </div>

                    <div class="card-footer mr-auto">
                    </div>

                </div>
            </div>
        </div>
        </div>
        
    </div>

    
@endsection