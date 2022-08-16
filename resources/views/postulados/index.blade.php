@extends('layouts.main', ['activePage' => 'postulados.create', 'titlePage' => 'Index Postulados'])

@section('content')       

<style>


.d-flex {
    display: flex!important;
}
  .avatar-sm {
      font-size: .875rem;
      height: 36px!important;
      width: 36px!important;
  }
  .avatar {
      align-items: center;
      border-radius: 0.75rem;
      color: #fff;
      display: inline-flex;
      font-size: 1rem;
      height: 48px;
      justify-content: center;
      transition: all .2s ease-in-out;
      width: 48px;
  }
  
  .me-3 {
      margin-right: 1rem!important;
  }
  html * {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
  }
  img, svg {
      vertical-align: middle;
  }
  *, :after, :before {
      box-sizing: border-box;
  }
  .bg-gradient-secondary {
    background-image: linear-gradient(310deg,#627594,#a8b8d8);
}
.bg-gradient-success {
    background-image: linear-gradient(310deg,#17ad37,#98ec2d);
}
  
  
  
  
  
  
                          </style>

      
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
          
    <h4 class="card-title">Postulantes  </h4> 
            <p class="card-category">Lista de Postulantes registrados en la base de datos</p>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
              <a href="{{ route('card.create')}}" class="btn btn-sm btn-success">Añadir Usuario</a>
                     <!--Añadir eliminado-->
                
              </div>
            </div>
            <div class="table-responsive">
         


                <div class="row">
                    <div class="col-12">
                      <div class="card mb-4">
                        <div class="card-header pb-0">
                          <h6>Acompañantes Terapeuticos</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                          <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                              <thead>
                                <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Registro</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edad</th>
                                  <th class="text-secondary opacity-7">Accion</th>
                                </tr>
                              </thead>
                              <tbody>

                                @foreach ($relation as $relat)
                                <tr>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div>
                                        <img src="{{ asset('img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1">
                                       
                                      </div>
                                      
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $relat->user->name }} </h6>
                                        <p class="text-xs text-secondary mb-0">{{ $relat->zona->nombre_z }}</p>
                                      </div>                  
                                    </div> 
                                  </td>
                                 
                                  
                               
                 
                         
                                   
                              
                                   
                              
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $relat->carrera }}</p>
                                    <p class="text-xs text-secondary mb-0">{{ $relat->certificado }}</p>
                                  </td>
                                 
                                  <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success" >{{ $relat->estado->nombre_e }}</span>
                                  </td>
                                  <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $relat->edad }}</span>
                                  </td>
                                  <td class="align-middle">
                                    <a href="{{ route('postulados.show', $relat->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Ver
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                      </svg>     
                                    </a>
                                  </td>
                                 
                                      
                           
                                </tr>  
<h2> <h6 class="mb-0 text-sm"> </h6></h2>
                                @endforeach                                                                                                         
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                




                
           
            </div>
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $relation->links() }} 
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>

 


</div>
@endsection
