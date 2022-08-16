<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Laravel</title>
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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Blog Template · Bootstrap v5.2</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">

  

  

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet">
</head>
   



<body class="antialiased">
  <header class="blog-header lh-1 py-3 " style="background: #005b8f;">
    
    <div style="height: 50px;" class="row flex-nowrap justify-content-between align-items-center">
         
          @if (Route::has('login'))
                <div class=" ">
                    @auth
                    <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><span class="badge bg-info" style="background: url({{ asset('https://imgs.developpaper.com/imgs/20211130144758750.png') }})"></span></a>
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><span class="badge bg-info" style="background: url({{ asset('https://imgs.developpaper.com/imgs/20211130144758750.png') }})">Ingresar</span></a>

                        @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><span class="badge bg-info" style="background: url({{ asset('https://imgs.developpaper.com/imgs/20211130144758750.png') }})">Registrarse</span>  </a>
                        @endif
                    @endauth
                </div> </div> 
            @endif </header><br>

           
            <main class="container">
              <div class="p-4 p-md-5 mb-4 rounded text-bg-dark" style="background: #005b8f;">
                <div class="col-md-6 px-0">
                  <h1 class="display-4 fst-italic text-white fw-bold">Acompañante Terapeuticos</h1>
                  <p class="lead my-3 text-white fw-bold">Busqueda laboral</p>
                  <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
                </div>
              </div>
            
              <div class="row mb-2">
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">World</strong>
                      <h3 class="mb-0">Estamos en telegram</h3>
                      <div class="mb-1 text-muted">Nov 12</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                      <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-success">Design</strong>
                      <h3 class="mb-0">Cursos y Talleres</h3>
                      <div class="mb-1 text-muted">Nov 11</div>
                      <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                      <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            
                    </div>
                  </div>
                </div>
              </div>


              <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Se solicita Acompañante Terapeutico
                       </h3>
              <div class="row">

 
  
              <div class="col-sm-6">
                
                  <div class="card  bg-" > 
                    <div class="card-body ">
                       <center> <p> <span class="fa fa-eye"></span> <b>Solicito Acompañante Terapeutico</b> </p><br></center>
                      <h5 class="card-title"> Genero Femenino |  Ciudad de Autonoma de Buenos Aires </h5>
                      <div class="d-grid gap-2 col-6 mx-auto"></div>
                      <p class="card-text">
                        <span class="fa fa-street-view"></span> <b>Localidad: Hospital Alvear</b>   <br>
                        <span class="fa fa-plus-square"></span> <b>Diagnostico: </b>  Trastorno oposicionista <br>
                        <span class="fa fa-info-circle"></span> <b>Edad:  </b>  14 años<br>
                        <span class="fa fa-transgender"></span> <b>Genero: </b>  Varon<br>
                        <span class="fa fa-exclamation-circle"></span> <b>Abordaje: </b>Horario: lunes a lunes de 9 a 21 (pueden ser dos personas o tomar una fines de semana y otra la semana)
                        Valor: $500/hora
                        Se cobra a los 45-60 días de presentada la factura.  <br>Requisitos: Monotributo al dia, titulo de At.
                                                                           <br> 
                        </p>
                        <p>Publicado <br> </p>
                       <center> <button  type="button" class="btn btn-info" >
                          Contactar
                        </button></center>
                      
                    
                   
                  </div>
                  
                </div>
              </div>
              <div class="col-sm-6">
                
                <div class="card text bg-" > 
                  <div class="card-body ">
                     <center> <p> <span class="fa fa-eye"></span><b> Solicito Acompañante Terapeutico </p></b></center><br>
                    <h5 class="card-title"> Genero Femenino |  </h5>
                    <div class="d-grid gap-2 col-6 mx-auto"></div>
                    <p class="card-text">
                      <span class="fa fa-street-view"></span> <b>Localidad:</b>   <br>
                      <span class="fa fa-plus-square"></span> <b>Diagnostico:</b>   <br>
                      <span class="fa fa-info-circle"></span> <b>Edad:</b>  <br>
                      <span class="fa fa-transgender"></span> <b>Genero:</b>  <br>
                      <span class="fa fa-exclamation-circle"></span> <b>Abordaje:</b>  <br>
                                                                         <br> 
                      </p>
                      <p>Publicado <br> </p>
                     <center> <button  type="button" class="btn btn-info" >
                        Contactar
                      </button></center>
                      
                  
                 
                </div>
                
              </div>
            </div>
             




            </div>
            <br>
              <div class="row g-5">
                <div class="col-md-8">
                  <h3 class="pb-4 mb-4 fst-italic border-bottom">
           Tu futuro es hoy
                  </h3>
            



                  <article class="blog-post">
                    <h2 class="blog-post-title mb-1">Estamos en telegram</h2>
                    <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>
            
                    <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                    <hr>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h2>Blockquotes</h2>
                    <p>This is an example blockquote in action:</p>
                    <blockquote class="blockquote">
                      <p>Quoted text goes here.</p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h3>Example lists</h3>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
                  
                    <p>And this is a definition list:</p>
                 
                  
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
                  </article>
            
                 
            
                
            
                  <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
                  </nav>
            
                </div>
            
                <div class="col-md-4">
                  <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                      <h4 class="fst-italic">Publicidad</h4>
                      <p class="mb-0">
                        <div class="card" style="width: 18rem;">
                          <img src="..." class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                          <img src="..." class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>


                      </p>
                    </div>
            
                    <div class="p-4">
                      <h4 class="fst-italic">Archivos</h4>
                      <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                       
                      </ol>
                    </div>
            
                    <div class="p-4">
                      <h4 class="fst-italic">Elsewhere</h4>
                      <ol class="list-unstyled">
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Telegram</a></li>
                        <li><a href="#">Facebook</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            
            </main>
  
          
   
      <div class="card-footer mr-auto">
      
      </div>  </div>

    </body>
</html>
