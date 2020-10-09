<div class="page-header">
    <h4 class="page-title">Marcar Consulta</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">Marcar Consulta</li>
    </ol>
</div>
<div class="card">
    <div class="card-body h-100">
        <div class="border-0">
            <div class="tab-content">
                <div class="tab-pane active" id="tab-51">
                    <div id="profile-log-switch">
                        <div class="media-heading">
                            <h5><strong>Informações do cliente</strong></h5>
                        </div>
                        <div class="table-responsive ">
                            <table class="table row table-borderless">
                                <tbody class="col-lg-6 col-xl-6 p-0">
                                    <tr>
                                        <td><strong>Nome :</strong> <?php echo $clientes['nome'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CPF :</strong> <?php echo $clientes['cpf'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CPF :</strong> <?php echo $clientes['rg'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>E-Mail :</strong> <?php echo $clientes['email'];?></td>
                                    </tr>
                                </tbody>

                                <tbody class="col-lg-6 col-xl-6 p-0">
                                    <tr>
                                        <td><strong>Telefone :</strong><?php echo $clientes['telefone'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Rua :</strong> <?php echo $clientes['rua'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Bairro :</strong> <?php echo $clientes['bairro'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Numero :</strong> <?php echo $clientes['numero'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CPF :</strong> <?php echo $clientes['cep'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="media-heading">
                            <h5><strong>Informações da Clinica</strong></h5>
                        </div>
                        <div class="table-responsive ">
                            <table class="table row table-borderless">
                                <tbody class="col-lg-6 col-xl-6 p-0">
                                    <tr>
                                        <td><strong>Nome Fantasia :</strong> <?php echo $clinicas['nome_fant'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CNPJ :</strong> <?php echo $clinicas['cnpj'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nome do Responsavel :</strong> <?php echo $clinicas['nome_resp'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>E-Mail :</strong> <?php echo $clinicas['email'];?></td>
                                    </tr>
                                </tbody>

                                <tbody class="col-lg-6 col-xl-6 p-0">
                                    <tr>
                                        <td><strong>Telefone :</strong><?php echo $clinicas['telefone'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Rua :</strong> <?php echo $clinicas['rua'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Bairro :</strong> <?php echo $clinicas['bairro'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Numero :</strong> <?php echo $clinicas['numero'];?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CPF :</strong> <?php echo $clinicas['cep'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="media-heading">
                            <h5><strong>Disponibilidade do Cliente</strong></h5>
                        </div>
                        <div class="table-responsive ">
                            <table class="table row table-borderless">
                                <tbody class="col-lg-6 col-xl-6 p-0">
                                    <tr>
                                        <td><strong>Preferencia de horario :</strong> <?php echo $consultas['turno'];?></td>
                                    </tr>
                                </tbody>

                                
                            </table>
                        </div>

                        <div class="row profie-img">
                            <div class="col-md-12 text-justify">
                                <div class="media-heading">
                                    <h5><strong>Marcar Horário</strong></h5>
                                </div>
                                <form method="POST">
                                    <div class="form-group m-0">
                                        <label class="form-label">Data</label> 
                                        <div class="row gutters-xs">
                                            <div class="col-6">
                                                <select name="dia" class="form-control custom-select select2 select2-hidden-accessible" data-select2-id="11" tabindex="-1" aria-hidden="true" required>
                                                <option value="">Selecionar Dia</option>
                                                <?php for($q=1;$q<=30;$q++):?>
                                                    <option value="<?= ($q<=9)?'0'.$q:$q;?>"><?= ($q<=9)?'0'.$q:$q;?></option>
                                                <?php endfor;?>
                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <select name="mes" class="form-control custom-select select2 select2-hidden-accessible" data-select2-id="8" tabindex="-1" aria-hidden="true" required>
                                                <option value="">Selecionar Mês</option>
                                                <option value="1">Janeiro</option>
                                                <option value="2">Fevereiro</option>
                                                <option value="3">Março</option>
                                                <option value="4">Abril</option>
                                                <option value="5">Maio</option>
                                                <option value="6">Junho</option>
                                                <option value="7">Julho</option>
                                                <option value="8">Algusto</option>
                                                <option value="9">Setembro</option>
                                                <option value="10">Outubro</option>
                                                <option value="11">Novembro</option>
                                                <option value="12">Dezembro</option>
                                            </select>
                                            
                                        </div>
                                        <div class="col-6">
                                            <select name="hora" class="form-control custom-select select2 select2-hidden-accessible" data-select2-id="14" tabindex="-1" aria-hidden="true" required>
                                                <option value="">Selecionar Hora</option>
                                                
                                                <?php for($q=1;$q<=23;$q++):?>
                                                    <option value="<?= ($q<=9)?'0'.$q:$q;?>"><?= ($q<=9)?'0'.$q:$q;?></option>
                                                <?php endfor;?>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <select name="minutos" class="form-control custom-select select2 select2-hidden-accessible" data-select2-id="14" tabindex="-1" aria-hidden="true" required>
                                                <option value="">Selecionar Minutos</option>
                                                
                                                <?php for($q=1;$q<=59;$q++):?>
                                                    <option value="<?= ($q<=9)?'0'.$q:$q;?>"><?= ($q<=9)?'0'.$q:$q;?></option>
                                                <?php endfor;?>
                                            </select>
                                        </div>
                                    </div>

                                    </div>
<br>
                                    <input type="submit" value="Marcar" class="btn btn-info" style="width: 100%;">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>