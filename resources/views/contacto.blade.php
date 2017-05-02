@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>Rellena este formulario y nuestro equipo se pondrá en contacto contigo lo antes posible</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<form id="contactForm" action="" method="post" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label class="control-label" for="name">Nombre y apellidos</label>
										<input type="text" id="name" name="name" value="" class="form-control" placeholder="Nombre y apellidos">
									</div>
									<div class="col-sm-4">
	
										<label class="control-label" for="email">Tu email</label>
										<input type="email" id="email" name="email" value="" class="form-control" placeholder="Tu email" required="">
									</div>
									<div class="col-sm-4">

										<label class="control-label" for="telefono">Teléfono</label>
										<input type="tel" id="telefono" name="telefono" value="" class="form-control" placeholder="Teléfono" required="">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label" for="text">Mensaje</label>
								<textarea id="text" name="text" class="form-control" rows="5" placeholder="Mensaje"></textarea>
	
							</div>

							<div class="form-group">
								<label class="accep">
									<input type="checkbox" value="" required="" name="accep">
									Acepto los <a href="/informacion-legal" target="_blank">términos y condiciones de uso</a> de AnimalsLove y la <a href="/politica-de-privacidad" target="_blank">política de privacidad</a>
								</label>
							</div>

							<div class="col-lg-12">
									<a href="#" class="btn btn-primary">Enviar</a>     
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
