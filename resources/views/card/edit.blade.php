@extends('layouts.main', ['activePage' => 'card', 'titlePage' => 'Editar'])
@section('content')


       <div class="content">
               <div class="container-dluid">
                <div class="row">
                    
                        <form action="" method="post" class="form-horizontal">
                     @csrf  
                     <div class="row">
                        <label for="user_id" class="col-sm-2 col-form-label">usuario_id</label>
                      
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="user_id" placeholder="{{  Auth::user()->id}}" value="  {{ old('user_id')}} " autofocus>
                        @if ($errors->has('user_id'))
                        <span class="error text-danger" for="input-user_id"></span>
                        @endif
                        </div>
                    </div> 
                     <div class="col-9">

                        <div class="card card-body" id="profile">
                        <div class="row justify-content-center align-items-center">
                        <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                        <div>
                        <label for="file-input" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                        <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Image" aria-label="Edit Image"></i><span class="sr-only">Edit Image</span>
                        </label>
                        <input type="file" wire:model="upload" id="file-input" accept="image/*" class="d-none">
                        <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        <img src="" alt="Profile Photo">
                        </span>
                         </div>
                        </div>
                        </div>
                        <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                Acompañate Terapeutico 
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                Roberto Carlos Peralta
                            </p>
                        </div>
                        </div>
                        <div class="col-auto ms-auto">
                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" onchange="visible()">
                        <label class="form-check-label" for="flexSwitchCheckDefault">
                        <small id="profileVisibility">
                        Switch to invisible
                        </small>
                        </label>
                        </div>
                        </div>
                        </div>
                        <div>
                        </div>
                        </div>
                        
                        <div class="card mt-23" id="basic-info">
                        <div class="card-header">
                        <h5>Mi perfil laboral</h5>
                        </div>
                        <div class="card-body pt-0">
                          
                                  
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <label class="form-label mt-4" for="">Nombre</label>
                                <div class="input-group  ">
                                <input  id="" name="" class="form-control" type="" placeholder="{{  Auth::user()->name}}" disabled="" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                </div>                          
                        <div class="col-md-6 align-self-center">
                        <label class="form-label mt-4" for="edad">Edad</label>
                        <div class="input-group ">
                        <input  id="edad" name="edad" class="form-control" type="text" value="{{ old('edad')}}" placeholder="24" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                        </div>
                 <div class="col-md-6 align-self-center">
                            <label class="form-label mt-4" for="generos_id">Mi genero</label>
                                       <select class="form-select input-group"  name="generos_id" aria-label="Default select example">
                                           @foreach ($genero_id as $id => $genero)
                                           <option value="{{ $id }}">{{  $genero }}</option>
                                           @endforeach 
                                         </select>
                                   </div>
                           
                  <div class="col-md-6 align-self-center">
                                <label class="form-label mt-4" for="telefono">Telefono</label>
                                <div class="input-group ">
                                <input  id="telefono" name="telefono" value="{{ old('telefono')}}" class="form-control" type="text" placeholder="+549-113244321" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                </div>
                   <div class="col-md-6 align-self-center">
                                    <label class="form-label mt-4" for="email_laboral">Email Laboral</label>
                                    <div class="input-group ">
                                    <input  id="email_laboral" name="email_laboral" value="{{ old('email_laboral')}}" class="form-control" type="text" placeholder="email.@gmail.com" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                    </div>  

                    <div class="col-md-6 align-self-center">
                                        <label class="form-label mt-4" for="">Provincia</label>
                                                   <select class="form-select input-group"  name="" aria-label="Default select example">
                                                       @foreach ($provincias as $id => $provincia)
                                                       <option value="{{ $id }}">{{  $provincia }}</option>
                                                       @endforeach 
                                                     </select>
                                               </div>
                    <div class="col-md-6 align-self-center">
                                            <label class="form-label mt-4" for="localidades_id">Localidad</label>
                                                       <select class="form-select input-group"  name="localidades_id" aria-label="Default select example">
                                                           @foreach ($localidad as $id => $localidades)
                                                           <option value="{{ $id }}">{{  $localidades }}</option>
                                                           @endforeach 
                                                         </select>
                                                   </div>

                     <div class="col-md-6 align-self-center">
                                            <label class="form-label mt-4" for="barrio">Barrio</label>
                                            <div class="input-group">
                                            <input  id="barrio" name="barrio" class="form-control" value="{{ old('barrio')}}" type="text" placeholder="Puerto Madero" onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                            </div>  
                    
                    <div class="col-md-6 align-self-center">
                                                    <label class="form-label mt-4" for="carrera">Carrera</label>
                                                    <div class="input-group">
                                                    <input  id="carrera" name="carrera" value="{{ old('carrera')}}" class="form-control" type="text" placeholder="Lic.Psicologia" onfocus="focused(this)" onfocusout="defocused(this)">
                                                    </div>
                                                    </div>  
                   <div class="col-md-6 align-self-center">
                                                        <label class="form-label mt-4" for="certificado">Certificado</label>
                                                        <div class="input-group">
                                                        <input  id="certificado" name="certificado" value="{{ old('certificado')}}" class="form-control" type="text" placeholder="Centro Psicosocial Argentino" onfocus="focused(this)" onfocusout="defocused(this)">
                                                        </div>
                                                        </div>  
                  <div class="col-md-6 align-self-center">                        
                                                            <label for="sobre_mi" class="form-label mt-4">Sobre mi</label>    
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="sobre_mi" value="{{ old('sobre_mi')}}" name="sobre_mi" placeholder="Describe su perfil" value="{{ old('sobre_mi')}}" autofocus></textarea>
                                                                <span class="error text-danger" for="input-sobre_mi"></span>                                   
                                                            </div>
                                                        </div>

                  <div class="col-md-6 align-self-center">
                                                            <label class="form-label mt-4" for="estados_id">Estado</label>
                                                                       <select class="form-select input-group"  name="estados_id" aria-label="Default select example">
                                                                           @foreach ($estados as $id => $estado)
                                                                           <option value="{{ $id }}">{{  $estado }}</option>
                                                                           @endforeach 
                                                                         </select>
                                                                   </div>
                  <div class="col-md-6 align-self-center">
                                                                    <label class="form-label mt-4" for="profile_image">profile_image</label>
                                                                    <div class="input-group">
                                                                    <input  id="profile_image" name="profile_image" value="{{ old('profile_image')}}" class="form-control" type="text" placeholder="Foto" onfocus="focused(this)" onfocusout="defocused(this)">
                                                                    </div>
                                                                    </div> 
                                                                   
                                                                                            
                                                                                            
                                                                                            
                                                                                                   
                                                                                                                
                                                                                                           
                                                                                                       
                                                                                                  
                                                                                               
                                                                                           
                                                                                
                                                                
                 <div class="col-md-6 align-self-center">
                                                         <label class="form-label mt-4" for="zonas_id">Preferencia Laboral</label>
                                                                    <select class="form-select input-group"  name="zonas_id" aria-label="Default select example">
                                                                        @foreach ($zonas as $id => $item)
                                                                        <option value="{{ $id }}">{{  $item }}</option>
                                                                        @endforeach 
                                                                      </select>
                                                                </div>
                                                              
                        
                        </div>  
                       <br>
                       
                       
                        
                       <div class="row mt-4" >
                         <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">
                            Save changes
                        </button> 
                        </div>
                        </form>
                        </div>
                        </div>
                        </div>
       </div>
@endsection