<div class="panel-group acordeon" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-blue-light">
    <div class="panel-heading" role="tab" id="inicios">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseInicios" aria-expanded="true" aria-controls="collapseInicios">
          {{ trans('seccion_cinco.fecha_1') }}: {{ trans('seccion_cinco.primer_titulo_xs') }}
        </a>
      </h4>
    </div>
    <div id="collapseInicios" class="panel-collapse collapse" role="tabpanel" aria-labelledby="inicios">
      <div class="panel-body text-justify">
        - {{ trans('seccion_cinco.primer_contenido_1') }}
    		<br />
    		- {{ trans('seccion_cinco.primer_contenido_2') }}
    		<br />
    		- {{ trans('seccion_cinco.primer_contenido_3') }}
      </div>
    </div>
  </div>
  <div class="panel panel-blue">
    <div class="panel-heading" role="tab" id="licenciado">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseLicenciado" aria-expanded="false" aria-controls="collapseLicenciado">
          {{ trans('seccion_cinco.fecha_2') }}: {{ trans('seccion_cinco.segundo_titulo_xs') }}
        </a>
      </h4>
    </div>
    <div id="collapseLicenciado" class="panel-collapse collapse" role="tabpanel" aria-labelledby="licenciado">
      <div class="panel-body text-justify">
        {{ trans('seccion_cinco.segundo_contenido') }}
      </div>
    </div>
  </div>
  <div class="panel panel-blue-light">
    <div class="panel-heading" role="tab" id="freelancer">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFreelancer" aria-expanded="false" aria-controls="collapseFreelancer">
          {{ trans('seccion_cinco.fecha_3') }}: {{ trans('seccion_cinco.tercer_titulo') }}
        </a>
      </h4>
    </div>
    <div id="collapseFreelancer" class="panel-collapse collapse" role="tabpanel" aria-labelledby="freelancer">
      <div class="panel-body text-justify">
        {{ trans('seccion_cinco.tercer_contenido') }}
      </div>
    </div>
  </div>
</div>