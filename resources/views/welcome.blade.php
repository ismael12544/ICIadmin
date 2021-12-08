<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/js/uikit-icons.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Document</title>

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

        <!-- Nucleo Icons -->
        <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />

        <!-- CSS Files -->

        <link href="{{asset('css/style.css')}}" rel="stylesheet" />

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

        <link id="pagestyle" href="{{asset('css/material-kit.css?v=3.0.0')}}" rel="stylesheet" />
    </head>
    <body class="index-page bg-gray-200">
        <!-- Navbar -->
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                        <div class="container-fluid px-0">
                            <a class="navbar-brand font-weight-bolder ms-sm-3" href="index.html" rel="tooltip" title="Designed and Coded by Creative Tim" 					 
     				data-placement="bottom" target="_blank">
                                <img src="{{asset('img/ICILOGO2.png')}}" alt="Logo" width="70" height="70" />
                            </a>
                            
                            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                                <ul class="navbar-nav navbar-nav-hover ms-auto">
                                    

                                    <li class="nav-item dropdown dropdown-hover mx-2">
                                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" 
 						aria-expanded="false">
                                            <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                                            Servicios
                                            <img src="{{asset('public/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2" />
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                                            <div class="d-none d-lg-block">
                                               


                                               

					@foreach($servicios as $s)
                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-							 
   									items-center p-0">{{$s->nombre}}</h6>
                                                                <span class="text-sm">ver todos los soportes</span>
                                                            </div>

                                                            <img src="{{asset('public/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    @foreach($s->soport as $so)
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html">
                                                           {{$so->nombre}}
                                                        </a>
                                                    @endforeach
                                                    </div>
                                                </li>
                                       @endforeach
                                            </div>

                                            <div class="row d-lg-none">
                                                <div class="col-md-12">
                                                    <div class="d-flex mb-2">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html">
                                                        Page Headers
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html">
                                                        Features
                                                    </a>

                                                    <div class="d-flex mb-2 mt-3">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-laptop text-gradient text-primary"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/navbars.html">
                                                        Navbars
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/nav-tabs.html">
                                                        Nav Tabs
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/pagination.html">
                                                        Pagination
                                                    </a>

                                                    <div class="d-flex mb-2 mt-3">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-badge text-gradient text-primary"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/inputs.html">
                                                        Inputs
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/forms.html">
                                                        Forms
                                                    </a>

                                                    <div class="d-flex mb-2 mt-3">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-notification-70 text-gradient text-primary"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/alerts.html">
                                                        Alerts
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/modals.html">
                                                        Modals
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/tooltips-popovers.html">
                                                        Tooltips & Popovers
                                                    </a>

                                                    <div class="d-flex mb-2 mt-3">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-app text-gradient text-primary"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html">
                                                        Avatars
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/badges.html">
                                                        Badges
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/breadcrumbs.html">
                                                        Breadcrumbs
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/buttons.html">
                                                        Buttons
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/dropdowns.html">
                                                        Dropdowns
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/progress-bars.html">
                                                        Progress Bars
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/toggles.html">
                                                        Toggles
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/typography.html">
                                                        Typography
                                                    </a>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown dropdown-hover mx-2">
                                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons opacity-6 me-2 text-md">article</i>
                                            Productos
                                            <img src="{{asset('public/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2" />
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                                            <div class="d-none d-lg-block">
                                                <ul class="list-group">
                                                    <li class="nav-item list-group-item border-0 p-0">
                                                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                                                            <span class="text-sm">All about overview, quick start, license and contents</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item list-group-item border-0 p-0">
                                                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/colors/material-kit ">
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                                                            <span class="text-sm">See our colors, icons and typography</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item list-group-item border-0 p-0">
                                                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-kit ">
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                                                            <span class="text-sm">Explore our collection of fully designed components</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item list-group-item border-0 p-0">
                                                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                                                            <span class="text-sm">Check how you can integrate our plugins</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item list-group-item border-0 p-0">
                                                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit ">
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                                                            <span class="text-sm">For those who want flexibility, use our utility classes</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="row d-lg-none">
                                                <div class="col-md-12 g-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                                                        <span class="text-sm">All about overview, quick start, license and contents</span>
                                                    </a>

                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                                                        <span class="text-sm">See our colors, icons and typography</span>
                                                    </a>

                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                                                        <span class="text-sm">Explore our collection of fully designed components</span>
                                                    </a>

                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                                                        <span class="text-sm">Check how you can integrate our plugins</span>
                                                    </a>

                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                                                        <span class="text-sm">For those who want flexibility, use our utility classes</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>

        <!--  Header -->
        <header>
            <div class="page-header min-vh-100" style="background-image: url(&#39;https://kuzudecoletaje.es/wp-content/uploads/2019/05/Linea_de_Inspeccion_Automatizada.jpg&#39;);" loading="lazy">
                <span class="mask bg-gradient-dark opacity-5"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 d-flex justify-content-center flex-column">
                            <h1 class="text-white text-center" id="t-empresa">ICI</h1>
                            <p class="text-white text-center opacity-8 lead" id="t-empresa2">Imagina crea ingeniería</p>

                            <button type="button" class="btn btn-white" id="boton-start">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        

        <!-- End Header -->

        <!-- Card Mision, Vison, Enfoque -->

        <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
            <section class="">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 shadow-lg ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                           <img class="rouded uk-animation-slide-right-medium" src="{{asset('img/logos/logoICI.JPG')}}" alt="" >
                        </div>
                        <div class="col-lg-8  ms-auto">
                            <div class="row justify-content-start">
                                <div class="col-md-6">
                                    <div class="info">
                                        <h5 class="font-weight-bolder mt-3">Misión</h5>
                                        <p class="pe-3 text-justify" >
                                            Enfocados a las pequeñas, medianas y grandes empresas para ayudarlas a crecer al siguiente nivel en automatización y producción, creando soluciones dentro de sus posibilidades y seguir creciendo
                                            en conjunto como empresa con vista hacia el futuro.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info">
                                    <h5 class="font-weight-bolder mt-3">Visión</h5>
                                    <p class="pe-3 text-justify" >
                                        Crecimiento mutuo entre las empresas tanto personal como profesional, logrando posicionarnos entre los mejores, creando una alianza llena de confianza.
                                    </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-start ">
                                <div class="col-md-12 mt-3">
                                <h5 class="font-weight-bolder mt-3">Enfoque</h5>
                                        <p class="pe-3 text-justify" >
                                            Creación de soluciones efectivas dando resultados óptimos a las necesidades y resolviendo las dificultades que retrasan la producción que tienen un impacto significativo en el producto final.
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- End Card Mision, Vison, Enfoque -->

        <div class="container mt-sm-5 mt-5" id="servicios">
            <div class="row">
                <div class="col-lg-12  shadow rounded rounded-lg text-center">
                    
                       <p class="text-center"><h3 id="t-servicios">Servicios</h3></p>
                       
                  
                </div>

                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs  shadow rounded justify-content-center" role="tablist">
                                @foreach($servicios as $s)
                                <li class="nav-item" title="{{$s->descripcion}}">
                                    <a class="nav-link text-info" data-toggle="tab" href="#{{$s->nombre}}" role="tab" id="ser-list">
                                        <strong>{{$s->nombre}}</strong>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content ">
                                @foreach($servicios as $s)
                                <div class="tab-pane " id="{{$s->nombre}}" role="tabpanel">
                                   
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 border  ">
                                                 <p class="text-center"><strong>{{$s->nombre}}</strong></p> 
                                                
                                            
                                                <section class="accordion  container ">
                                                    <div class="accordion__container">
                                                    @foreach($s->soport as $so)
                                                        <div class="accordion__item">
                                                            <header class="   accordion__header">
                                                                <i class='bx bx-chevron-down '></i>
                                                               <h5>{{$so->nombre}}</h5>
                                                            </header>

                                                            <div class="accordion__content">
                                                                <p class="accordion__description text-dark bg-light">
                                                                   {{$so->descripcion}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    </div>
                                                </section>
                                                
                                                 <button class="btn bg-gradient btn-info">Solicitar servicio</buttom>
                                                </div>

                                                <div class="col-lg-6 shadow-lg ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                                                    <div class="accordion__container">
                                                        <img
                                                            src="https://images.unsplash.com/photo-1593106410245-241ab38175e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                                            alt="#"
                                                            class="img-responsive"
                                                            alt="Responsive image"
                                                            width=""
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            /*=============== ACCORDION ===============*/
            const accordionItems = document.querySelectorAll(".accordion__item");

            // 1. Selecionar cada item
            accordionItems.forEach((item) => {
                const accordionHeader = item.querySelector(".accordion__header");

                // 2. Seleccionar cada click del header
                accordionHeader.addEventListener("click", () => {
                    // 7. Crear la variable
                    const openItem = document.querySelector(".accordion-open");

                    // 5. Llamar a la funcion toggle item
                    toggleItem(item);

                    // 8. Validar si existe la clase
                    if (openItem && openItem !== item) {
                        toggleItem(openItem);
                    }
                });
            });

            // 3. Crear una funcion tipo constante
            const toggleItem = (item) => {
                // 3.1 Crear la variable
                const accordionContent = item.querySelector(".accordion__content");

                // 6. Si existe otro elemento que contenga la clase accorion-open que remueva su clase
                if (item.classList.contains("accordion-open")) {
                    accordionContent.removeAttribute("style");
                    item.classList.remove("accordion-open");
                } else {
                    // 4. Agregar el height maximo del content
                    accordionContent.style.height = accordionContent.scrollHeight + "px";
                    item.classList.add("accordion-open");
                }
            };
        </script>

        <!--   Core JS Files   -->
       

        <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
        <script src="{{asset('js/plugins/countup.min.js')}}"></script>

        <script src="{{asset('js/plugins/choices.min.js')}}"></script>

        <script src="{{asset('js/plugins/prism.min.js')}}"></script>
        <script src="{{asset('js/plugins/highlight.min.js')}}"></script>

        <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
        <script src="{{asset('js/plugins/rellax.min.js')}}"></script>
        <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
        <script src="{{asset('js/plugins/tilt.min.js')}}"></script>
        <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
        <script src="{{asset('js/plugins/choices.min.js')}}"></script>

        <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
        <script src="{{asset('js/plugins/parallax.min.js')}}"></script>

        <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
        <!--  Google Maps Plugin    -->

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
        <script src="{{asset('js/material-kit.min.js')}}" type="text/javascript"></script>
    </body>
</html>
