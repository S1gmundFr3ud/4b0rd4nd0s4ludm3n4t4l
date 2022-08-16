@extends('layouts.main', ['activePage' => 'postulados', 'titlePage' => 'Nuevo Acompañante'])
@section('content')
       <div class="content">
           <div class="container-dluid">
               <div class="row">
                   <div class="col md-12">
                       <form action="" method="post" class="form-horizontal">
                    @csrf      
                        <div class="card">
                            <div class="card-header card-header bg-dark">
                                <h4 class="card-title text-white">Acompañante Terapeutico</h4>
                                <p class="card-category">Ingresar datos del AT</p>
                            </div>
                                 <div class="card-body">
                             
                                    <div class="row">
                                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name')}}" autofocus>
                                        @if ($errors->has('name'))
                                        <span class="error text-danger" for="input-name"></span>
                                        @endif
                                        </div>
                                    </div>
      
                                    <div class="row">
                                        <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="genero" placeholder="Ingrese su apellido" value="{{ old('apellido')}}" autofocus>
                                            @if ($errors->has('username'))
                                            <span class="error text-danger" for="input-username"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="email" class="col-sm-2 col-form-label">Edad</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" name="edad" placeholder="Ingrese su edad" value="{{ old('email')}}" autofocus>
                                            @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-email"></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="email" class="col-sm-2 col-form-label">Genero</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" name="genero" placeholder="Ingrese su genero " value="{{ old('email')}}" autofocus>
                                            @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-email"></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="text" class="col-sm-2 col-form-label">Zona</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="text" placeholder="Ingrese la zona" autofocus>
                                      
                                            <span class="error text-danger" for="input-text">{{ $errors->first('password')}}</span>
                                            
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
                                        <label for="email" class="col-sm-2 col-form-label">Barrio</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" name="localidad" placeholder="Ingrese el barrio" value="{{ old('email')}}" autofocus>
                                            @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-email"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" name="telefono" placeholder="Ingrese numero de contacto" value="{{ old('email')}}" autofocus>
                                            @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-email"></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="email" class="col-sm-2 col-form-label">Email laboral</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" name="email" placeholder="Ingrese email laboral" value="{{ old('email')}}" autofocus>
                                            @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-email"></span>
                                            @endif
                                        </div>
                                    </div>





                                    <div class="row">  
                                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Sobre mi</label>    
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="barrio" placeholder="Sobre mi perfil laboral" value="" autofocus></textarea>
                                            <span class="error text-danger" for="input-email"></span>                                   
                                        </div>
                                    </div>
                                    <div class="row">  
                                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Sobir foto</label>    
                                        <div class="col-sm-7">
                                            <input type="file" name="imagen">
                                            <span class="error text-danger" for="input-email"></span>                                   
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

               <div class="container-dluid">
                <div class="row">
                    <div class="col md-12">
                        <form action="" method="post" class="form-horizontal">
                     @csrf      
                         <div class="card">
                             <div class="card-header  card-header bg-dark">
                                 <h4 class="card-title text-white">Experiencia</h4>
                                 <p class="card-category">Ingresar su experiencia</p>
                             </div>
                                  <div class="card-body">
                              
                                    <div class="row">
                                        <label for="name" class="col-sm-2 col-form-label">Diagnostico</label>
                                        <div class="col-sm-7">
                                          <div class="form-group">
                                            <div class="tab-content">
                                              <div class="tab-pane active">
                                                <table class="table">
                                                  <tbody>
                                                    @foreach ($expe as $id => $expe)
                                                       
                                                   
                                                    <tr>
                                                      <td>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="experiencia[]"
                                                              value="{{ $id }}">
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                       <b> <span class="badge badge-danger">{{ $expe }}</span> </b>
                                                      </td>
                                                    </tr>
                                                    @endforeach
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


           <div class="container-dluid">
            <div class="row">
                <div class="col md-12">
                    <form action="" method="post" class="form-horizontal">
                 @csrf      
                     <div class="card">
                         <div class="card-header  card-header bg-dark">
                             <h4 class="card-title text-white">Formacion</h4>
                             <p class="card-category">Ingresar su formacion</p>
                         </div>
                              <div class="card-body">
                          
                                 <div class="row">
                                     <label for="name" class="col-sm-2 col-form-label">Carrera, Terciario, Tecnicatura</label>
                                     <div class="col-sm-7">
                                         <input type="text" class="form-control" name="name" placeholder="Ingrese  la formacion" value="{{ old('name')}}" autofocus>
                                     @if ($errors->has('name'))
                                     <span class="error text-danger" for="input-name"></span>
                                     @endif
                                     </div>
                                 </div>

                                 <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Certificado de Acompañante Terapeutico</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre de donde se recibio" value="{{ old('name')}}" autofocus>
                                    @if ($errors->has('name'))
                                    <span class="error text-danger" for="input-name"></span>
                                    @endif
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