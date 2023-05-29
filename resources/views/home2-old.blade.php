@extends('layouts.app')


@section('content')
<div class="overflow-wrap">


    <section id="home" class=" height-fix">

        @include('layouts.bubbles')


        <div class="centered flex">

            <div class="text">
                Hola, soy <span class="highlight">Oswaldo Rivas</span>.
                <br>
                Y soy programador.
            </div>


            <div class="button page-link" dest="about">
                Veamos.. <i class="mdi mdi-arrow-right"></i>
            </div>

            <nav class="flex desk">
                <div class="link-wrap">
                    <div class="active page-link" dest="home">inicio</div>
                    <div class="page-link" dest="about">sobre mí</div>
                    <!-- <div class="page-link" dest="portfolio">portfolio</div> -->
                    <!-- <div class="page-link" dest="blog">blog</div> -->
                    <div class="page-link" dest="contact">contáctame</div>
                </div>
                <i class="mdi mdi-menu"></i>
            </nav>

        </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
        <div class="container flex">
            <div class="header waypoint" data-animation="slide-in-left">
                Este soy yo
            </div>
            <div class="header-bar waypoint" data-animation="slide-in-left" data-delay=".5s"
                style="animation-delay: 0.5s;"></div>

            <div class="flex row label-wrap">
                <div class="flex row-gt-sm">
                    <div class="flex bullet-wrap ">
                        <div class="hex-wrap waypoint" data-animation="flip-in-x">
                            <div class="hexagon">
                                <i class="mdi mdi-speedometer"></i>
                            </div>
                        </div>
                        <div class="waypoint" data-animation="fade-in" data-delay=".2s" style="animation-delay: 0.2s;">
                            <div class="label bold">Asimilación</div>
                            <div>Realizo seguimiento o soporte a proyectos ya existentes.</div>
                        </div>

                    </div>

                    <div class="flex bullet-wrap ">
                        <div class="hex-wrap waypoint" data-animation="flip-in-x" data-delay=".2s"
                            style="animation-delay: 0.2s;">
                            <div class="hexagon">
                                <i class="mdi mdi-cellphone-link"></i>
                            </div>
                        </div>
                        <div class="waypoint" data-animation="fade-in">
                            <div class="label bold">Rápido</div>
                            <div>
                                Tiempos de cargas rapidos y facil interacion con el usuario.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex row-gt-sm">
                    <div class="flex bullet-wrap ">
                        <div class="hex-wrap waypoint" data-animation="flip-in-x" data-delay=".4s"
                            style="animation-delay: 0.4s;">
                            <div class="hexagon">
                                <i class="mdi mdi-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="waypoint" data-animation="fade-in" data-delay=".4s" style="animation-delay: 0.4s;">
                            <div class="label bold">Documentación</div>
                            <div>Código y procesos documentados para el fácil entendimiento.</div>
                        </div>
                    </div>

                    <div class="flex bullet-wrap ">
                        <div class="hex-wrap waypoint" data-animation="flip-in-x" data-delay=".6s"
                            style="animation-delay: 0.6s;">
                            <div class="hexagon">
                                <i class="mdi mdi-rocket"></i>
                            </div>
                        </div>
                        <div class="waypoint" data-animation="fade-in" data-delay=".6s" style="animation-delay: 0.6s;">
                            <div class="label bold">Dinámico</div>
                            <div>
                                Sitios web con vida.

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skills-wrapper flex row-gt-sm">
                <div class="flex flex-50-gt-sm waypoint" data-animation="slide-in-left">
                    <img src="{{ asset('public/img/os.jpg') }}" class="me">
                    <!-- <div><img class="up-arrow" src="img/up-arrow.png"></div> -->
                   
                    <div class="label bold">Quien soy?</div>
                    <div>
                        Soy un desarrollador 
                        <a class="highlight"  target="_blank">Back-end</a> en
                        <a class="highlight" href="https://www.menssajero.com" target="_blank">Menssajero</a>
                        que busca de especializarse en el desarrollo de aplicativos  móvil con tiempos de cargas rápidos.
                        <br>
                        <br>
                        <span class="page-link highlight" dest="contact">Vamos a lograr cosas increíbles.</span>
                    </div>
                </div>

                <div class="flex flex-50-gt-sm waypoint bars-wrap" data-animation="slide-in-right">
                    <div class="bar flex">
                        <div class="bar fill" style="width:80%">
                            <div class="tag bold flex">CSS</div>
                        </div>
                        <span>80%</span>
                    </div>

                    <div class="bar flex">
                        <div class="bar fill" style="width:90%">
                            <div class="tag bold flex">HTML</div>
                        </div>
                        <span>90%</span>
                    </div>
                    <div class="bar flex">
                        <div class="bar fill" style="width:80%">
                            <div class="tag bold flex">JavaScript</div>
                        </div>
                        <span>80%</span>
                    </div>
                    <div class="bar flex">
                        <div class="bar fill" style="width:80%">
                            <div class="tag bold flex">React</div>
                        </div>
                        <span>80%</span>
                    </div>

                    <div class="bar flex">
                        <div class="bar fill" style="width:70%">
                            <div class="tag bold flex">React Native</div>
                        </div>
                        <span>70%</span>
                    </div>

                   
                    <div class="bar flex">
                        <div class="bar fill" style="width:75%">
                            <div class="tag bold flex">Angular</div>
                        </div>
                        <span>75%</span>
                    </div>

                    <div class="bar flex">
                        <div class="bar fill" style="width:95%">
                            <div class="tag bold flex">PHP</div>
                        </div>
                        <span>95%</span>
                    </div>

                    <div class="bar flex">
                        <div class="bar fill" style="width:50%">
                            <div class="tag bold flex">Laravel</div>
                        </div>
                        <span>50%</span>
                    </div>
                    <div class="bar flex">
                        <div class="bar fill" style="width:70%">
                            <div class="tag bold flex">CodeIgniter</div>
                        </div>
                        <span>70%</span>
                    </div>

                  
                    <div class="bar flex">
                        <div class="bar fill" style="width:60%">
                            <div class="tag bold flex">UI Design</div>
                        </div>
                        <span>60%</span>
                    </div>

                    <div class="bar flex">
                        <div class="bar fill" style="width:70%">
                            <div class="tag bold flex">UX Design</div>
                        </div>
                        <span>70%</span>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section class="flex" id="portfolio">
        <div class="header waypoint" data-animation="slide-in-right">
            PROJECTS
        </div>
        <div class="header-bar waypoint" data-animation="slide-in-right" data-delay=".3s"
            style="animation-delay: 0.3s;"></div>

        <div class="filter-wrap waypoint" data-animation="fade-in">
            <div class="flex row">
                <div class="filter active" data-filter="all">ALL</div>
                <div class="filter" data-filter=".rails">RUBY/RAILS</div>
                <div class="filter" data-filter=".react">REACT-JS</div>
                <div class="filter" data-filter=".js">JAVASCRIPT</div>
            </div>
            <div class="float-bar" style="left: 25px; width: 112px;">
                <div class="flex row" style="left: -25px;">
                    <div class="filter active" data-filter="all">ALL</div>
                    <div class="filter" data-filter=".rails">RUBY/RAILS</div>
                    <div class="filter" data-filter=".react">REACT-JS</div>
                    <div class="filter" data-filter=".js">JAVASCRIPT</div>
                </div>
            </div>
        </div>

        <div id="gallery" class="container flex row wrap waypoint">
            <div class="mix react" data-my-order="1" style="display: inline-block;" data-bound="">
                <div>
                    <div class="card"></div>
                    <div class="text">
                        <div class="bold">ChowNow Ordering</div>
                        <span class="highlight">React JS / Python</span>
                    </div>
                    <div class="button" id="ordering">LEARN MORE</div>
                </div>
            </div>

            <div class="mix react" data-my-order="1" style="display: inline-block;" data-bound="">
                <div>
                    <div class="card"></div>
                    <div class="text">
                        <div class="bold">ChowNow Discover</div>
                        <span class="highlight">React JS / Python</span>
                    </div>
                    <div class="button" id="discover">LEARN MORE</div>
                </div>
            </div>

            <div class="mix react" data-my-order="1" style="display: inline-block;" data-bound="">
                <div>
                    <div class="card"></div>
                    <div class="text">
                        <div class="bold">New Relic</div>
                        <span class="highlight">React / Ruby on Rails / AEM</span>
                    </div>
                    <div class="button" id="newrelic">LEARN MORE</div>
                </div>
            </div>

            <div class="mix js" data-my-order="1" style="display: inline-block;" data-bound="">
                <div>
                    <div class="card"></div>
                    <div class="text">
                        <div class="bold">Roambi</div>
                        <span class="highlight">JavaScript</span>
                    </div>
                    <div class="button" id="roambi">LEARN MORE</div>
                </div>
            </div>

            <div class="mix rails" data-my-order="1" style="display: inline-block;" data-bound="">
                <div>
                    <div class="card"></div>
                    <div class="text">
                        <div class="bold">Walker Tracker</div>
                        <span class="highlight">JS / Ruby on Rails</span>
                    </div>
                    <div class="button" id="walker">LEARN MORE</div>
                </div>
            </div>

            <div class="mix js" data-my-order="1" style="display: inline-block;" data-bound="">
                <div>
                    <div class="card"></div>
                    <div class="text">
                        <div class="bold">MY STAND</div>
                        <span class="highlight">JS / Node.js on Sails</span>
                    </div>
                    <div class="button" id="mystand">LEARN MORE</div>
                </div>
            </div>

            <div class="mix js" data-my-order="1" style="display: inline-block;" data-bound="">
                <div>
                    <div class="card"></div>
                    <div class="text">
                        <div class="bold">NEVER SURRENDER</div>
                        <span class="highlight">JavaScript</span>
                    </div>
                    <div class="button" id="never">LEARN MORE</div>
                </div>
            </div>

            <div class="mix rails" data-my-order="1" style="display: inline-block;" data-bound="">
                <div>
                    <div class="card"></div>
                    <div class="text">
                        <div class="bold">Powur</div>
                        <span class="highlight">Angular / Ruby on Rails</span>
                    </div>
                    <div class="button" id="powur">LEARN MORE</div>
                </div>
            </div>

            <div class="mix js" data-my-order="1" style="display: inline-block;" data-bound="">
                <div>
                    <div class="card"></div>
                    <div class="text">
                        <div class="bold">The Mall</div>
                        <span class="highlight">React.js / Node</span>
                    </div>
                    <div class="button" id="themall">LEARN MORE</div>
                </div>
            </div>
        </div>
    </section>


    

    <!-- CONTACT -->
    <section id="contact">
        <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="75" width="100%" version="1.1"
            xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
            <path d="M0 0 L50 100 L100 0 Z" fill="white" stroke="white"></path>
        </svg>
        <div class="container flex">
            <div class="header waypoint" data-animation="slide-in-left">
                CONTACT
            </div>
            <div class="header-bar waypoint" data-animation="slide-in-right" data-delay=".25s"
                style="animation-delay: 0.25s;"></div>
            <div class="highlight waypoint" data-animation="slide-in-right" data-delay=".5s"
                style="animation-delay: 0.5s;">
                Have a question or want to work together?
            </div>
            <form class="waypoint" data-animation="pop-in" data-delay=".5s" id="contact-form"
                style="animation-delay: 0.5s;">
                <input placeholder="Name" type="text" name="name" required="">
                <input placeholder="Enter email" type="email" name="email" required="">
                <textarea placeholder="Your Message" type="text" name="message"></textarea>
                <div id="success">
                    <div>
                        Your message was sent successfully. Thanks!<span id="close" class="mdi mdi-close"></span>
                    </div>
                </div>
                <input class="button" type="submit" id="submit" value="SUBMIT">
            </form>
        </div>
    </section>

    <footer>
        <i class="mdi mdi-chevron-double-up page-link" dest="home"></i>

        <div class="icon-wrap flex row">
            <a>
                <div class="flex icon" id="icon-2">
                    <i class="mdi mdi-linkedin"></i>
                </div>
            </a>
            <a>
                <div class="flex icon" id="icon-3">
                    <i class="mdi mdi-facebook"></i>
                </div>
            </a>
            <a>
                <div class="flex icon" id="icon-4">
                    <i class="mdi mdi-instagram"></i>
                </div>
            </a>
            <a>
                <div class="flex icon" id="icon-5">
                    <i class="mdi mdi-codepen"></i>
                </div>
            </a>
        </div>
        <div class="info-box">
            <div class="footnote">
                LacerteDeveloper <span class="highlight">©2022</span>
            </div>
        </div>
    </footer>
</div>

@endsection


@section('scripts')
<script src="public/js/dest.js" defer></script>
<script src="public/js/jquery.waypoints.min.js" defer></script>
@endsection
