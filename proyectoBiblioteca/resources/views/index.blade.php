@extends('layouts.principal')
@section('content')

<div class="slider">
    <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/biblioteca1.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2><span>Préstamo de audiovisuales</span></h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline" action="prestamoAudiovisual.html">
                                <div class="form-group">
                                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Prestar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="img/biblioteca2.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                            <h2>Préstamo de libros al estudiante</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                            <form class="form-inline" action="prestamoLibroEstudiante.html">
                                <div class="form-group">
                                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Prestar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/biblioteca3.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2>Préstamo de libros al docente</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline" action="prestamoLibroProfesor.html">
                                <div class="form-group">
                                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Prestar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/biblioteca1.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2>Préstamo de sala de audiovisuales</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline" action="usoSalaAudiovisuales.html">
                                <div class="form-group">
                                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Prestar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/biblioteca2.jpg" class="img-responsive" alt="" >
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2>Préstamo de servicio de Internet</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline" action="prestamoLibroProfesor.html">
                                <div class="form-group">
                                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Prestar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>

            <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div> <!--/#carousel-slider-->
    </div><!--/#about-slider-->
</div><!--/#slider-->

@stop
