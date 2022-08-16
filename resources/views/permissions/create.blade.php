@extends('layouts.main', ['activePage' => 'permissions', 'titlePage' => 'Nuevo Permiso'])
@section('content')
       <div class="content">
           <div class="container-dluid">
               <div class="row">
                   <div class="col md-12">
                       <form action="{{ route('permissions.store')}}" method="post" class="form-horizontal">
                    @csrf      
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Permiso</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                                 <div class="card-body">
                             
                                    <div class="row">
                                        <label for="name" class="col-sm-2 col-form-label">Nombre del permiso</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="name"  autofocus>
        
                                        </div>
                                    </div>
                                </div> 
                                        <div class="card-footer ml-auto mr-atuto">
                                            <button type="submit" class="btn btn-primary">Guardar</button>

                                        </div>

                        </div>
                    </form>
                   </div>
               </div>
           </div>
       </div>
@endsection