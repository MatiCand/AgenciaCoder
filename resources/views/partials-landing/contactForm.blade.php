<!-- CONTACT FORM -->
<div id="contact-form"><br>
  <div class="section-head text-center col-md-8 col-md-offset-2 space50">
    <h1 class="form-title">Contáctenos</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        {!! Form::open(['route'=>'email.store','method' => 'POST','class' => 'positioned', 'id' => 'contactForm']) !!}

          <div class="row">
            <div class="col-md-5 col-sm-5">
              {!! Form::text('name',null,['placeholder' => 'Nombre', 'class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-md-7 col-sm-7">
              {!! Form::number('phone',null,['placeholder' => 'Teléfono', 'class' => 'form-control', 'required']) !!}
            </div>
          </div>

          {!! Form::email('email',null,['placeholder' => 'Email', 'class' => 'form-control', 'required']) !!}

          {!! Form::textarea('mensaje',null,['placeholder' => 'Mensaje', 'class' => 'form-control', 'required']) !!}

          {!! Form::submit('ENVIAR CONSULTA',['class' => 'btn btn-default' ]) !!}

        {!! Form::close() !!}
        <!-- End Contact Form -->

      </div>
    </div>
  </div>
</div>
