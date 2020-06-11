@extends('layouts.app')

@section('content')

<div class="container-fluid"> {{-- Orignal --}}
    <div class="card text-white bg-dark mb-3 border-primary"> {{-- edit --}}
        <div class="card-header h4 border-primary">TOP 3 Autores</div> {{-- Editado --}}
        <div class="card-body"> {{-- edit --}}



            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('/images/S.D.Perry.jpg')}}" alt="S.D. Perry"
                            class="rounded-circle mx-auto d-block" width="500" height="500" />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>S.D. Perry</h2>
                            <h4>
                                <p style="color:#FF0000" ;>Es una novelista que reside en Portland, Estados Unidos.
                                    S. D. Perry es la autora de todos los libros de la serie Resident Evil.
                                    También ha escrito novelas sobre Alien y novelizaciones de películas.</p>
                            </h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('/images/RickRiordan.jpg')}}" alt="Rick Riordan"
                            class="rounded-circle mx-auto d-block" width="500" height="500" />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Rick Riordan</h2>
                            <h4>
                                <p style="color:#FF0000" ;>Es un autor de fantasía, misterio y literatura juvenil,
                                    conocido principalmente por su serie de libros Percy Jackson y los dioses del
                                    Olimpo. ...
                                    En 2006 publicó la primera entrega de la serie de Percy Jackson, Percy Jackson y el
                                    ladrón del rayo.</p>
                            </h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('/images/jk_rowling.jpg')}}" alt="J.K. Rowling"
                            class="rounded-circle mx-auto d-block" width="500" height="500" />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>J.K. Rowling</h2>
                            <h4>
                                <p style="color:#FF0000" ;>Es la autora británica de la historia fantástica de Harry
                                    Potter,
                                    el niño mago huérfano. Nació en Chipping Sodburry, South Gloucestershire, en Yate,
                                    Reino Unido, 31 de julio de 1965. </p>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>




        </div>
    </div>
</div>



<div class="container-fluid"> {{-- Orignal --}}
    <div class="card text-white bg-dark mb-3 border-primary"> {{-- edit --}}
        <div class="card-header h4 border-primary">Autores</div> {{-- Editado --}}
        <div class="card-body"> {{-- edit --}}


            <div class="card-deck">
                <div class="card bg-dark mb-3 border-primary">
                    <img class="card-img-top" src="{{url('/images/jk_rowling.jpg')}}" alt="Card image cap" height="500">
                    <div class="card-body">
                        <h5 class="card-title">J.K. Rowling</h5>
                        <p class="card-text">Es la autora británica de la historia fantástica de Harry Potter,
                            el niño mago huérfano. Nació en Chipping Sodburry, South Gloucestershire, en Yate, Reino
                            Unido, 31 de julio de 1965.</p>
                    </div>

                </div>
                <div class="card bg-dark mb-3 border-primary">
                    <img class="card-img-top" src="{{url('/images/RickRiordan.jpg')}}" alt="Card image cap"
                        height="500">
                    <div class="card-body">
                        <h5 class="card-title">Rick Riordan</h5>
                        <p class="card-text">Es un autor de fantasía, misterio y literatura juvenil,
                            conocido principalmente por su serie de libros Percy Jackson y los dioses del Olimpo. ...
                            En 2006 publicó la primera entrega de la serie de Percy Jackson, Percy Jackson y el ladrón
                            del rayo.</p>
                    </div>

                </div>
                <div class="card bg-dark mb-3 border-primary">
                    <img class="card-img-top" src="{{url('/images/S.D.Perry.jpg')}}" alt="Card image cap" height="500">
                    <div class="card-body">
                        <h5 class="card-title">S.D. Perry</h5>
                        <p class="card-text">Es una novelista que reside en Portland, Estados Unidos.
                            S. D. Perry es la autora de todos los libros de la serie Resident Evil.
                            También ha escrito novelas sobre Alien y novelizaciones de películas.</p>
                    </div>

                </div>
            </div>

            <br /><br />

            <div class="card-deck">
                <div class="card bg-dark mb-3 border-primary">
                    <img class="card-img-top" src="{{url('/images/JRRTolkien.jpg')}}" alt="Card image cap" height="500">
                    <div class="card-body">
                        <h5 class="card-title">J.R.R. Tolkien</h5>
                        <p class="card-text">John Ronald Reuel Tolkien
                            nació el 3 de enero de 1892 en Bloemfestein, Sudáfrica.
                            Era hijo de una misionera llamada Mabel Suffield
                            y de Arthr Reuel Tolkien, banquero de profesión.</p>
                    </div>

                </div>
                <div class="card bg-dark mb-3 border-primary">
                    <img class="card-img-top" src="{{url('/images/StephenKing.jpg')}}" alt="Card image cap"
                        height="500">
                    <div class="card-body">
                        <h5 class="card-title">Stephen King</h5>
                        <p class="card-text">Escritor estadounidense de novelas de terror, Stephen King,
                            cuyo pseudónimo es el de Richard Bachman, nació el 21 de septiembre de 1947 en Portland. ...
                            King es autor de novelas de terror muy populares, muchas de las cuales se han llevado al
                            cine con notable éxito.</p>
                    </div>

                </div>
                <div class="card bg-dark mb-3 border-primary">
                    <img class="card-img-top" src="{{url('/images/LewisCarroll.png')}}" alt="Card image cap"
                        height="500">
                    <div class="card-body">
                        <h5 class="card-title">Lewis Carroll</h5>
                        <p class="card-text">Escritor inglés nacido el 27 de enero de 1832 en Daresbury,
                            Cheshire, y fallecido el 14 de enero de 1898 en Guildford, Surrey.
                            Su verdadero nombre era Charles Lutwidge Dodgson,
                            con el que publicó numerosos tratados de matemáticas y lógica.</p>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>


@endsection
