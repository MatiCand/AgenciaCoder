<!-- INTRO -->
<div class="intro intro1">
    <div class="overlay"></div>
  <div class="container">
    <div class="row center-content">
      <div class="col-sm-5 col-md-4">
        <div class="intro-form">
          <h4>Pedir Presupuesto</h4>
            <fieldset>
              {!! Form::open(['route'=>'email.store','method' => 'POST','class' => 'positioned', 'id' => 'contactForm']) !!}
                {!! Form::text('name',null,['placeholder' => 'Nombre', 'class' => 'form-control', 'required']) !!}
                {!! Form::number('phone',null,['placeholder' => 'Teléfono', 'class' => 'form-control', 'required']) !!}
                {!! Form::email('email',null,['placeholder' => 'Email', 'class' => 'form-control', 'required']) !!}
                {!! Form::textarea('mensaje',null,['placeholder' => 'Mensaje', 'class' => 'form-control', 'required' ]) !!}
                {!! Form::submit('ENVIAR CONSULTA',['class' => 'btn-form btn btn-default' ]) !!}
              {!! Form::close() !!}
            </fieldset>
        </div>
      </div>

      <div class="home col-sm-7 col-md-push-1 ">
        <h2>¿Qué esperás para tener tu Página Web?</h2>
        <div class="row">
          <div class="col-md-10">
            <div class="intro-box">
              <span class="icon-magnet"></span>
              <div>
                <h4>Atrae nuevos visitantes</h4>
                <p>Aumentando tu presencia en internet atraerás la atención de extraños a tu empresa.</p>
              </div>
            </div>
            <div class="intro-box">
              <span class="icon-gleam"></span>
              <div>
                <h4>Conviértelos en clientes ​y promotores de tu marca.</h4>
                <p>Convierte, Cierra y Enamora a esos nuevos visitantes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
