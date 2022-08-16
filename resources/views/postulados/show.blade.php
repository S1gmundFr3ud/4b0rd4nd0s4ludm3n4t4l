


@extends('layouts.main', ['activePage' => 'view', 'titlePage' => 'Index View'])

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&family=The+Nautigal&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">  
</head>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">

            <h4>Postulado {{ $postulado->user->name}}</h4>
            

     
              </div>
            </div>
           
            <div class="row">
             <div class="col-md-4"> 
                    <div class="card card-user">                   
                        <div class="card-body">
                            <div class="card-text">
                                <div class="author">
                                    <a href="#">
                                        <img src="{{ asset('img/persona.jpg') }}" alt="image" class="avatar" style=".avatar 
                                            border-radius: 50%;
                                            height: 64px;
                                            object-fit: cover;
                                            object-position: center;
                                            width: 64px;
                                        " >
                                        <h5 class="title mt-4"> {{ $postulado->user->name }}</h5>
                                    </a>
                                      <br> 
                                    <p class="description">                 
                                        <b>Profesión</b><br>
                                        {{ $postulado->carrera }} <br>
                                      {{ $postulado->zona->nombre_z }}<br>
                                      Localidad :  {{ $postulado->barrio }} <br>  
                                    </p>
                                </div>
                                <div class="card-description">
                                    <b>Formacion</b><br>
                                    {{ $postulado->certificado }}<br> <br>
                                     <b>Experiencia</b><br>
                                  
                                      @foreach ($postulado->user->experiencia as $registro)
                                      <span class="badge badge-danger">{{ $registro->nombre}}</span> 
                                        @endforeach   
                                     <br>
                                 
                                   <p>Contacto</p>   
                                     <br>
                                     <button type="button" class="btn btn-outline-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                          <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"></path>
                        </svg>   
                                      </button>

                                      <button type="button" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                        </svg> 
                                      </button> 
                                </div>
                            </div>
                            <div class="card-footer">
                                </div>    
                        </div>
                    </div>
                </div>
                                        
             <div class="col-md-4">
                <div class="card card-user">                   
                    <div class="card-body">
                        <div class="card-text">
                            <div class="author">
                                <a href="#">
                                    <img src="{{ asset('img/persona.jpg') }}" alt="image" class="avatar" style=".avatar 
                                        border-radius: 50%;
                                        height: 64px;
                                        object-fit: cover;
                                        object-position: center;
                                        width: 64px;
                                    " >
                                    <h5 class="title mt-4"></h5>
                                </a>
                                <p class="description-Paragraph"> <div class="card-description">
                                    <b>Sobre  mi</b>
                                    
                                </div>   <br>
                                <b> {{ $postulado->sobre_mi }}</b> 
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="card-footer">
                            <div class="button-container">
                                <a href="{{ route('postulados.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                            </div>
                            </div>    
                    </div>
                </div>
            </div>  


            </div>
     </div>
                  
              {{-- {{ $users->links() }} --}}
            
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
  
          </div>
          <!--End footer-->
        </div>

      </div>
   
@endsection
