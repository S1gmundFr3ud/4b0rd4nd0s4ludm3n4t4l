@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Index Posts'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Posts</h4>
            <p class="card-category">Lista de posts registrados en la base de datos</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
              
                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-info">Añadir post</a>
                
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-info">
                  <th> ID </th>
                  <th> Nombre </th>
                  <th> Fecha de creación </th>
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td class="text-info">{{ $post->created_at->toFormattedDateString() }}</td>
                    <td class="td-actions text-right">
                   
                      <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                   
                   
                      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                    
                  
                      <form action="{{ route('posts.destroy', $post->id) }}" method="post"
                        onsubmit="return confirm('areYouSure')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                    
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $posts->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>




</div>
@endsection
