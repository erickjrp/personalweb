<!-- Modal -->
<div class="modal modal-fullscreen fade" id="adhara" tabindex="-1" role="dialog" aria-labelledby="adhara">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

        <div class="row">

          <div class="col-xs-12">

            <p class="titulo_seccion text-center">
              Adhara Collections
            </p>

          </div>

        </div>

        <div class="row">

          <div class="col-xs-12">

            <div class="raya_divisora center-block">
            </div>

          </div>

        </div>

        <div class="row fila_imagen_modal">

          <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">


            <div id="carrusel-adhara" class="carousel slide" data-ride="carousel" data-interval="false">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carrusel-adhara" data-slide-to="0" class="active"></li>
                <li data-target="#carrusel-adhara" data-slide-to="1"></li>
                <li data-target="#carrusel-adhara" data-slide-to="2"></li>
                <li data-target="#carrusel-adhara" data-slide-to="3"></li>
                <li data-target="#carrusel-adhara" data-slide-to="4"></li>
                <li data-target="#carrusel-adhara" data-slide-to="5"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="{{ URL::asset('assets/images/seccion_cuatro/adhara/1.jpg') }}" class="img-responsive" alt="Adhara">
                </div>
                <div class="item">
                  <img src="{{ URL::asset('assets/images/seccion_cuatro/adhara/2.jpg') }}" class="img-responsive" alt="Adhara">
                </div>
                <div class="item">
                  <img src="{{ URL::asset('assets/images/seccion_cuatro/adhara/3.jpg') }}" class="img-responsive" alt="Adhara">
                </div>
                <div class="item">
                  <img src="{{ URL::asset('assets/images/seccion_cuatro/adhara/4.jpg') }}" class="img-responsive" alt="Adhara">
                </div>
                <div class="item">
                  <img src="{{ URL::asset('assets/images/seccion_cuatro/adhara/5.jpg') }}" class="img-responsive" alt="Adhara">
                </div>
                <div class="item">
                  <img src="{{ URL::asset('assets/images/seccion_cuatro/adhara/6.jpg') }}" class="img-responsive" alt="Adhara">
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carrusel-adhara" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carrusel-adhara" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            

          </div>

        </div>

        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

            <p class="texto_modal_portafolio">
              {{ trans('seccion_cuatro.adhara') }} 
            </p>

          </div>

        </div>

      </div>
      <div class="modal-footer text-center">
        <a class="btn btn-primary disabled" href="http://adharave.com/" role="button" target="_blank">
          <i class="fa fa-link fa-fw" aria-hidden="true"></i>
          {{ trans('seccion_cuatro.visitar') }}
        </a>
        <button type="button" class="btn btn-default" data-dismiss="modal">
          <i class="fa fa-times fa-fw" aria-hidden="true"></i>
          {{ trans('seccion_cuatro.cerrar') }}
        </button>
      </div>
    </div>
  </div>
</div>