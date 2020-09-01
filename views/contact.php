    <div class="sptb bg-white mb-0 pb-0" style=" margin-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-4  col-md-12  d-block mb-7">
                    <div class="section-title center-block text-center">
                        <h2>Contato Informações</h2>
                    </div>
                    <div class="row text-white">
                        <div class="col-12 mb-5">
                            <div class="support-service bg-primary br-2 mb-4 mb-xl-0">
                                <i class="fa fa-phone"></i>
                                <h6>27 4042-3511</h6>
                                <p>Suporte Gratuito</p>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="support-service bg-secondary br-2 mb-4 mb-xl-0">
                                <i class="fa fa-clock-o"></i>
                                <h6>Seg-Sex(09:00-17:00)</h6>
                                <p>Horario de Funcionamento!</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="support-service bg-warning br-2" style="background-color:" red="" !important;="">
                                <i class="fa fa-envelope-o"></i>
                                <h6>contato@bsbclub.com</h6>
                                <p>Envie um email!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8 col-md-12 d-block ">
                    <div class="single-page">
                        <div class="col-lg-12  col-md-12 mx-auto d-block">
                            <div class="section-title center-block text-center">
                                <h2>Formulário de Contato</h2>
                            </div>
                            <div class="wrapper wrapper2">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <form method="POST">
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="name" id="name" placeholder="Seu Nome">
                                          </div>
                                          <div class="form-group">
                                              <input type="email" class="form-control" name="email" placeholder="Endereço de Email">
                                          </div>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="phone" placeholder="Telefone">
                                          </div>
                                          <div class="form-group">
                                              <textarea class="form-control" name="msg" rows="6" placeholder="Mensagem"></textarea>
                                          </div>
                                          <input type="submit" value="Enviar" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

		<?php if(isset($msg) && !empty($msg)):?>
			<script>
				Swal.fire({
					position: 'top-end',
					icon: 'success',
					title: 'Pronto :)',
					html: '<?php echo $msg;?>',
					showConfirmButton: false,
					timer: 2500
				})
			</script>
		<?php endif;?>