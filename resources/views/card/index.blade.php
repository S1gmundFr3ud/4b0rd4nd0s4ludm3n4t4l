@extends('layouts.main', ['activePage' => 'card', 'titlePage' => 'Index Card'])

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

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
       
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


section{
position: relative;  
height: 450px;
width: 1075px;
display: flex;
align-items: center;
}

.swiper{
width: 950px;
}

.card{
position: relative;
background: #fff;
border-radius: 20px;
margin: 20px 0;
box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.card::before{
content: "";
position: absolute;
height: 40%;
width: 100%;
background-image: url("");
border-radius: 20px 20px 0 0;
}

.card .card-content{
display: flex;
flex-direction: column;
align-items: center;
padding: 30px;
position: relative;
z-index: 100;
}

section .card .image{
height: 140px;
width: 140px;
border-radius: 50%;
padding: 3px;
background: #cfc7da;
}

section .card .image img{
height: 100%;
width: 100%;
object-fit: cover;
border-radius: 50%;
border: 3px solid rgb(77, 72, 72);
}

.card .media-icons{
position: absolute;
top: 10px;
right: 20px;
display: flex;
flex-direction: column;
align-items: center;
}

.card .media-icons i{
color: #fff;
opacity: 0.6;
margin-top: 10px;
transition: all 0.3s ease;
cursor: pointer;
}

.card .media-icons i:hover{
opacity: 1;
}

.card .name-profession{
display: flex;
flex-direction: column;
align-items: center;
margin-top: 10px;
color: ;
} 

.name-profession .name{
font-size: 20px;
font-weight: 600;
}

.name-profession .profession{
font-size:15px;
font-weight: 500;
}

.card .rating{
display: flex;
align-items: center;
margin-top: 18px;
}

.card .rating i{
font-size: 19px;
margin: 0 2px;
color: #000000;
}

.card .button{
width: 100%;
display: flex;
justify-content: space-around;
margin-top: 20px;
}

.card .button button{
background-image: url("");
outline: none;
border: none;
color: #fff;
padding: 8px 22px;
border-radius: 20px;
font-size: 14px;
transition: all 0.3s ease;
cursor: pointer;
}

.button button:hover{
background: #1916d0;
}

.swiper-pagination{
position: absolute;
}

.swiper-pagination-bullet{
height: 7px;
width: 26px;
border-radius: 25px;
background: #2ae88c;
}

.swiper-button-next, .swiper-button-prev{
opacity: 0.7;
color: #2ae85a;
transition: all 0.3s ease;
}
.swiper-button-next:hover, .swiper-button-prev:hover{
opacity: 1;
color: #0d94a5;
}
    </style>
</head>

<div class="content">




  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Acompa??antes Terapeuticos del Gran Buenos Aires</h4>
            <p class="card-category">Lista de registrados en la base de datos</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
              
                <a href="{{ route('card.create')}}" class="btn btn-sm btn-facebook">A??adir</a>
                
              </div>
            </div>
            
                              <div class="row">
                  @foreach ($card as $item)
                                <div class="col-sm-4">
                                  <div class="card"><br>
                                    <center>
<img class="avatar" src="https://black-dashboard-laravel.creative-tim.com/black/img/emilyz.jpg" alt="" style="width: 100px;
                                    height: 30pxpx;
                                    overflow: hidden;
                                    border-radius: 50%;
                                    margin-bottom: 15px;
                                }">
                                </center>
                                    <div class="card-body">
                                  <center>
                                    <h5 class="card-title profession">{{ $item->user->name }}</h5>
                                  </center>
                                     
                                      <div class="name-profession">
                                        <span class="profession">Acompa??ante Terapeutico</span>
                                        <span class="profession">Localidad: {{ $item->barrio   }} </span>
                                        <p class="card-text">Sobre mi: {{ $item->sobre_mi }}</p>
                                        <span class="badge bg-success" style="center">{{ $item->estado->nombre_e }}</span>
                                      </div>
                                       <br>
                                       <div class="d-grid gap-24col-7 mx-auto">
                                        <button class="badge btn-info" type="button" onclick="window.location.href='{{route('card.show')}}'">
                                       
                                        <span class="fas fa-user-edit"></span>
                                      Contactar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                @endforeach


                             
                              
                              </div>        
                            
            </div>
       
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $card->links() }} 
          </div>
          <!--End footer-->
         
              
         
          </div>
        
        </div>
      </div>
    </div>
  </div>


@endsection
