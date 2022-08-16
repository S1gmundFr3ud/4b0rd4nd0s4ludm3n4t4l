@extends('layouts.main', ['activePage' => 'genero', 'titlePage' => 'Genero'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary ">
                        <h4 class="card-title">Generos</h4>
                        <p class="card-category">Generos registrado </p>
                    </div>
                    <div class="card-body">
                     
                        <div class="row">
                            <div class="col-12 text-right">
                               
                                <a href="" class="btn btn-sm btn-facebook">Añadir genero</a>
                  
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Guard</th>  
                                    <th>Created_at</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                   @forelse ($genero as $item)
                                       
                                  
                                       
                                   
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $item->nombre_g }}</td>
                                        <th>Guard</th>  
                                    <th>Created_at</th>
                                        
                                        <td class="td-actions text-right">
                                         
                                            <a href="" class="btn btn-info">  <i class="material-icons">person</i></a>
                                           
                                            <a href="" class="btn btn-warning">  <i class="material-icons">edit</i></a>
                                          
                                   
                                            <form action="" method="POST" style="display: inline-block;">
                                           
                                          
                                            
                                            <button class="btn  btn-danger" type="submit" rel="tooltip" >
                                                <i class="material-icons">close</i>
                                            </button>
                                           
                                        </form>
                                      
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>  
                    <div class="card-footer mr-auto">
                   
                    </div>  
                </div>    
            </div>    
            </div>
        </div>
    </div>
</div>
</div>        


@endsection