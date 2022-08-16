@extends('layouts.main', ['activePage' => 'pacientes', 'titlePage' => 'Nuevo Caso'])
@section('content' )
       <div class="content" >
           <div class="container-dluid">
               <div class="row">
                   <div class="col md-12">
                       <form method="POST" action="{{ route('pacientes.store') }}"  class="form-horizontal">
                    @csrf      
                        <div class="card">
                            <div class="card-header card-header-info" style=" background: url({{ asset('https://imgs.developpaper.com/imgs/20211130144758750.png') }});" >
                                <h4 class="card-title">Pacientes</h4>
                                <p class="card-category">Ingresar pacientes</p>
                            </div>
                                 <div class="card-body pt-4 p-3">
                                 

                                      <div class="row">
                                        <label for="usuario_id" class="col-sm-2 col-form-label">usuario_id</label>
                                      
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="usuario_id" placeholder="" value=" {{  Auth::user()->id}}" autofocus>
                                        @if ($errors->has('usuario_id'))
                                        <span class="error text-danger" for="input-usuario_id"></span>
                                        @endif
                                        </div>
                                    </div>




                                    <div class="row">
                                        <label for="num_caso" class="col-sm-2 col-form-label">Numero de caso</label>
                                      
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="num_caso" placeholder="Ingrese numero de caso" value="{{ old('num_caso')}}" autofocus>
                                        @if ($errors->has('num_caso'))
                                        <span class="error text-danger" for="input-num_caso"></span>
                                        @endif
                                        </div>
                                    </div>
      
                                   
                                  
                                    <div class="row">
                                        <label for="genero_id" class="col-sm-2 col-form-label">Acompañante terapeutico de genero</label>
                                        <br><br>
                                        <div class="col-sm-8">
                                          <div class="form-group">
                                            <div class="tab-content">
                                              <div class="tab-pane active">
                                                <table class="table">
                                                  <tbody>
                                                    @foreach ($genero_id as $id => $generos)
                                                    
                                                       
                                                   
                                                    <tr>
                                                      <td>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="genero_id"
                                                              value="{{ $id }}">
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                       <b> {{  $generos }}</b>
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
       
                                   
 
 
 
                                  
                                        
                     






                                    <div class="row">
                                        <label for="edad_p" class="col-sm-2 col-form-label">Edad</label><br>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="edad_p" placeholder="Ingrese edad del paciente" autofocus>
                                      
                                            <span class="error text-danger" for="input-edad_p">{{ $errors->first('edad_p')}}</span>
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="genero" class="col-sm-2 col-form-label">Genero del paciente</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="genero" placeholder="Ingrese genero del paciente" value="{{ old('genero')}}" autofocus>
                                            @if ($errors->has('genero'))
                                            <span class="error text-danger" for="input-genero"></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="diagnostico" class="col-sm-2 col-form-label">Dagostico del paciente</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="diagnostico" placeholder="Ingrese el diagnostico del paciente" value="{{ old('diagnostico')}}" autofocus>
                                            @if ($errors->has('diagnostico'))
                                            <span class="error text-danger" for="input-diagnostico"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="telefono_caso" class="col-sm-2 col-form-label">Telefono caso </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="telefono_caso" placeholder="Ingrese el telefono_caso del paciente" value="{{ old('telefono_caso')}}" autofocus>
                                            @if ($errors->has('telefono_caso'))
                                            <span class="error text-danger" for="input-telefono_caso"></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="email_caso" class="col-sm-2 col-form-label">email_caso caso </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="email_caso" placeholder="Ingrese el email_caso del paciente" value="{{ old('email_caso')}}" autofocus>
                                            @if ($errors->has('email_caso'))
                                            <span class="error text-danger" for="input-email_caso"></span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="row">
                                        <label for="zonas_id" class="col-sm-2 col-form-label">Zona</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <div class="tab-content">
                                                    <div class="tab-pane active">
                                                        <table class="table">
                                                            <tbody>
                                                                @foreach ($zonas as $id => $item)
                                                                
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input class="form-check-input" type="checkbox" name="zonas_id"
                                                                                    value="{{ $id }}"
                                                                                >
                                                                                <span class="form-check-sign">
                                                                                    <span class="check">  </span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                       <b> {{  $item }}</b>
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





                                    <div class="row">
                                        <label for="localidad" class="col-sm-2 col-form-label">Localidad</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="localidad" placeholder="Ingrese localidad del acompañamiento" value="{{ old('localidad')}}" autofocus>
                                            @if ($errors->has('localidad'))
                                            <span class="error text-danger" for="input-localidad"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">  
                                        <label for="abordaje" class="col-sm-2 col-form-label">Abordaje</label>    
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="abordaje" name="abordaje" placeholder="Describe el abordajea destacar" value="{{ old('abordaje')}}" autofocus></textarea>
                                            <span class="error text-danger" for="input-abordaje"></span>                                   
                                        </div>
                                    </div>
                                  
                                   
                                        
                                
                                    
                             

                                 
                                   
                                        </div> <br>
                                        <div class="card-footer ml-auto mr-atuto">
                                            <button type="submit" class="btn btn-info">Guardar</button>

                                        </div>

                                    
                                       

                        </div>
                    </form>
                   </div>
               </div>
           </div>
       </div>
@endsection