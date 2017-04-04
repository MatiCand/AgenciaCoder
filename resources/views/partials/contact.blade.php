<!-- Contact Section -->
<section class="page-section bg-scroll bg-dark-alfa-90" data-background="images/full-width-images/section-bg-8.jpg" id="contact">
    <div class="container relative">

        <div class="row">

            <!-- Contact Info -->
            <div class="col-md-4">

                <!-- Phone -->
                <div class="contact-item mb-40 mb-md-20">

                    <!-- Icon -->
                    <div class="ci-icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <div class="ci-title">Teléfono</div>

                    <div class="ci-phone">54 11 3853-0655</div>

                </div>
                <!-- End Phone -->

                <!-- Address -->
                <div class="contact-item mb-40 mb-md-20">

                    <!-- Icon -->
                    <div class="ci-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <div class="ci-title">Dirección</div>

                    <div class="ci-text">Vicente López</div>

                </div>
                <!-- End Address -->

                <!-- Email -->
                <div class="contact-item mb-md-40">

                    <!-- Icon -->
                    <div class="ci-icon">
                        <a href="mailto:contacto@agenciacoder.com">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>

                    <div class="ci-title">Di Hola..!</div>

                    <div class="ci-text"><a href="mailto:contacto@agenciacoder.com">contacto@agenciacoder.com</a></div>

                </div>
                <!-- End Email -->

            </div>
            <!-- End Contact Info -->


            <div class="col-md-7 col-md-offset-1">
                <!-- Contact Form -->
                {!! Form::open(['route'=>'mail.store','method' => 'POST','class' => 'form contact-form','id' => 'contact-form']) !!}

                <div class="clearfix mb-20 mb-xs-0">
                  <div class="cf-left-col">

                    <!-- Name -->
                    <div class="form-group">
                      {!! Form::text('name',null,['placeholder' => 'Nombre', 'class' => 'ci-field form-control', 'required']) !!}
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      {!! Form::text('email',null,['placeholder' => 'Email', 'class' => 'ci-field form-control', 'required']) !!}
                    </div>

                  </div>
                  <div class="cf-right-col">

                    <!-- Message -->
                    <div class="form-group">
                      <label for="message">Mensaje</label>
                      {!! Form::textarea('mensaje',null,['class' => 'ci-area form-control', 'required' ]) !!}
                    </div>

                  </div>
                </div>

                {!! Form::submit('ENVIAR CONSULTA',['class' => 'submit_btn btn btn-mod btn-large btn-full ci-btn' ]) !!}

                <div id="result"></div>

                {!! Form::close() !!}
                <!-- End Contact Form -->

            </div>

        </div>

    </div>
</section>
<!-- End Contact Section -->
