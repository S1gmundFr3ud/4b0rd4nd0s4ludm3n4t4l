@extends('layouts.main', ['activePage' => 'pedido', 'titlePage' => 'Nuevo Caso'])
@section('content')
       <div class="content">
           <div class="container-dluid">
               <div class="row">
                   <div class="col md-12">
                       <form action="" method="post" class="form-horizontal">
                    @csrf      
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Casos</h4>
                                <p class="card-category">Ingresar soliciud de AT</p>
                            </div>
                                 <div class="card-body">
                             
                                    <div class="row">
                                        <label for="name" class="col-sm-2 col-form-label">Numero del Caso</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name')}}" autofocus>
                                        @if ($errors->has('name'))
                                        <span class="error text-danger" for="input-name"></span>
                                        @endif
                                        </div>
                                    </div>
      
                                    <div class="row">
                                        <label for="username" class="col-sm-2 col-form-label">Acompañante terapeutico de genero</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="genero" placeholder="Ingrese genero de AT" value="{{ old('username')}}" autofocus>
                                            @if ($errors->has('username'))
                                            <span class="error text-danger" for="input-username"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="email" class="col-sm-2 col-form-label">Diagnostico</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" name="diagnostico" placeholder="Ingrese su correo" value="{{ old('email')}}" autofocus>
                                            @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-email"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="password" class="col-sm-2 col-form-label">Edad</label>
                                        <div class="col-sm-7">
                                            <input type="password" class="form-control" name="text" placeholder="Ingrese edad del paciente" autofocus>
                                      
                                            <span class="error text-danger" for="input-password">{{ $errors->first('password')}}</span>
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="email" class="col-sm-2 col-form-label">Genero</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" name="diagnostico" placeholder="Ingrese genero del paciente" value="{{ old('email')}}" autofocus>
                                            @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-email"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="email" class="col-sm-2 col-form-label">Zona</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" name="zona" placeholder="Ingrese zona del acompañamiento" value="{{ old('email')}}" autofocus>
                                            @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-email"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="email" class="col-sm-2 col-form-label">Localidad</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" name="localidad" placeholder="Ingrese localidad del acompañamiento" value="{{ old('email')}}" autofocus>
                                            @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-email"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">  
                                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Abordaje</label>    
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="diagnostico" placeholder="Abordaje" value="" autofocus></textarea>
                                            <span class="error text-danger" for="input-email"></span>                                   
                                        </div>
                                    </div>
                                  



                                    <div class="row">
                                        <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <div class="tab-content">
                                                    <div class="tab-pane active">
                                                        <table class="table">
                                                            <tbody>
                                                               
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input class="form-check-input" type="checkbox" name="roles[]"
                                                                                    value=""
                                                                                >
                                                                                <span class="form-check-sign">
                                                                                    <span class="check"></span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    
                                                                    </td>
                                                                </tr>
                                                           
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
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