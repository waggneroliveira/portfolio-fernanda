@extends('client.core.client')
@section('content')
	<section id="contact">
		<div class="banner-inner">
			<canvas class="mry-dots" style="display: none"></canvas>

			<div class="mry-head-bg">
				<img src="{{asset('build/client/images/about.png')}}" alt="background">
				<div class="mry-bg-overlay"></div>
			</div>

			<div class="mry-banner mry-p-140-0">
				<div class="container">
					<div class="mry-main-title mry-title-center">
						<div class="mry-subtitle mry-mb-20 mry-fo">Contact</div>
						<h1 class="mry-mb-20 mry-fo">Do you have any questions?<br><span class="mry-border-text">Write us a message.</span><span class="mry-animation-el"></span></h1>
						<div class="mry-text mry-fo text-white">Lorem ipsum dolor sit amet, consectetur.<br>Adipisicing elit suscipit, at.</div>
						<div class="mry-scroll-hint-frame">
							<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
								<span class="mry-magnetic-object"></span>
							</a>
							<div class="mry-label mry-fo">Scroll Down</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- contact -->
		<div class="mry-about mry-p-100-0">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">

						<div class="row">
							<div class="col-lg-6">

								<div class="mry-mb-100 mry-text-center">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">01</div>
										<div class="mry-subtitle">Location</div>
									</div>
									<div class="mry-fade-object mry-mb-100">
										<h4 class="mry-mb-20 mry-fo">Welcome to visit</h4>
										<p class="mry-text mry-mb-20 mry-fo">Canada, Toronto,<br>HTGS 4456 North Av.</p>
									</div>
								</div>

							</div>
							<div class="col-lg-6">

								<div class="mry-mb-100 mry-text-center">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">02</div>
										<div class="mry-subtitle">Contact</div>
									</div>
									<div class="mry-fade-object mry-mb-100">
										<h4 class="mry-mb-20 mry-fo">Shall we talk?</h4>
										<p class="mry-text mry-fo">Email: mireya.inbox@mail.com <br>Phone: +4 9(054) 996 84 25</p>
									</div>
								</div>

							</div>
						</div>

					</div>

					<div class="col-lg-12">

						<div class="mry-main-title mry-title-center mry-p-0-40">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">03</div>
								<div class="mry-subtitle">Contact form</div>
							</div>
							<h2 class="mry-mb-20 mry-fo">Write us a message</h2>
						</div>

					</div>

					<div class="col-lg-8">

						<form method="POST" id="contactForm" class="mry-form mry-mb-100" >
							@csrf
							<div class="row">
								<div class="col-lg-6">
									<label class="mry-label mry-fo" for="firstName">Nome</label>
									<div class="mry-fo"><input required id="nome" name="name" placeholder="Nome" class="mry-default-link" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$">
									</div>
								</div>
								<div class="col-lg-6">
									<label class="mry-label mry-fo" for="lastName">E-mail</label>
									<div class="mry-fo"><input required id="email" name="email" placeholder="E-mail" class="mry-default-link" type="email" data-parsley-pattern="^[a-zA-Z\s.]+$">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<label class="mry-label mry-fo" for="assunto">Assunto</label>
									<div class="mry-fo"><input id="subject" name="subject" placeholder="Assunto" class="mry-default-link" type="text" required></div>
								</div>
								<div class="col-lg-6">
									<label class="mry-label mry-fo" for="phone">Phone</label>
									<div class="mry-fo"><input id="phone" name="phone" placeholder="Celular" class="mry-default-link" type="text" data-parsley-pattern="^\+{1}[0-9]+$"></div>
								</div>
							</div>

							<div class="mry-fade-object">
								<label class="mry-label mry-fo" for="message">Message</label>
								<div class="mry-fo">
									<textarea id="text" required name="text" rows="8" cols="80" placeholder="Digite aqui...." class="mry-default-link" type="text"
										data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$"></textarea>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-4">
									<div class="mry-fo"><button type="submit" class="mry-btn mry-default-link">Send message</button></div>
								</div>
								<div class="col-lg-8">
									<p class="mry-text mry-simple-text mry-contact-hint mry-fo"><span class="mry-color-text">*</span> We promise not to share your personal information with
										third parties.</p>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<!-- contact end -->

		@include('client.includes.footer')

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#contactForm').on('submit', function(e) {
					e.preventDefault();

					const formData = $(this).serialize();

					$.ajax({
						url: '{{ route("send-contact") }}',
						type: 'POST',
						data: formData,
						success: function(response) {
							if (typeof Swal !== 'undefined') {
								Swal.fire({
									title: 'Sucesso!',
									text: response.message,
									icon: 'success',
									timer: 2000,
									showConfirmButton: false
								});
							}
							$('#contactForm')[0].reset();
						},
						error: function(xhr) {
							if (xhr.status === 422) {
								const errors = xhr.responseJSON.errors;
								let errorMessages = '';
								for (let field in errors) {
									errorMessages += errors[field][0] + '\n';
								}

								if (typeof Swal !== 'undefined') {
									Swal.fire({
										title: 'Erro',
										text: errorMessages,
										icon: 'error',
										confirmButtonText: 'OK'
									});
								}
							} else {
								if (typeof Swal !== 'undefined') {
									Swal.fire({
										title: 'Erro',
										text: 'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.',
										icon: 'error',
										confirmButtonText: 'OK'
									});
								}
							}
						}
					});
				});
			});
		</script>
	</section>
@endsection