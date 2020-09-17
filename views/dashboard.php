        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
            </ol>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Leads</h3>
                        <div class="card-options"> <a class="btn btn-sm btn-primary" href="<?php echo BASE_URL;?>admin/listLeads">View</a> </div>
                    </div>
                    <div class="card-body ">
                        <h5 class="">Total de Leads</h5>
                        <h2 class="text-dark counter mt-0 "><?php echo $leadsCount;?></h2>
                        <div class="progress progress-sm mt-0 mb-2">
                            <div class="progress-bar bg-primary w-75" role="progressbar"></div>
                        </div>
                        <div class=""><i class="fa fa-caret-up text-green"></i> Leads</div>
                    </div>
                </div>
            </div>
             
            <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Clinicas</h3>
                        <div class="card-options"> <a class="btn btn-sm btn-secondary" href="<?php echo BASE_URL;?>admin/clinicas">View</a> </div>
                    </div>
                    <div class="card-body ">
                        <h5 class="">Total Clinicas</h5>
                        <h2 class="text-dark counter mt-0 "><?php echo $clinicasCount;?></h2>
                        <div class="progress progress-sm mt-0 mb-2">
                            <div class="progress-bar bg-secondary w-45" role="progressbar"></div>
                        </div>
                        <div class=""><i class="fa fa-caret-down text-danger"></i>Clinicas Cadastradas</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Receita Total</h3>
                        <div class="card-options"> <a class="btn btn-sm btn-success" href="#">View</a> </div>
                    </div>
                    <div class="card-body ">
                        <h5 class="">Receita Total</h5>
                        <h2 class="text-dark mt-0  ">R$ <span class="counter">5,759</span></h2>
                        <div class="progress progress-sm mt-0 mb-2">
                            <div class="progress-bar bg-success w-25" role="progressbar"></div>
                        </div>
                        <div class=""><i class="fa fa-caret-up text-success"></i>Receita</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Despesas Total</h3>
                        <div class="card-options"> <a class="btn btn-sm btn-danger" href="#">View</a> </div>
                    </div>
                    <div class="card-body ">
                        <h5 class="">Total Despesas</h5>
                        <h2 class="text-dark mt-0">R$ <span class="counter">5,759</span></h2>
                        <div class="progress progress-sm mt-0 mb-2">
                            <div class="progress-bar bg-danger w-25" role="progressbar"></div>
                        </div>
                        <div class=""><i class="fa fa-caret-up text-success"></i>Despesas</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Grafico de Receitas e Despesas</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <canvas id="sales-status" class="chart-dropshadow h-280"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ultimas Consultas</h3>
                    </div>
                    <div class="card-body">
                        <div class="activity">
                            <img src="../../assets/images/faces/male/24.jpg" alt="" class="img-activity">
                            <div class="time-activity">
                                <div class="item-activity">
                                    <p class="mb-0"><b>Adam	Berry</b> Fez uma consulta em <b> Bluelife</b></p>
                                    <small class="text-muted ">30 min atrás</small>
                                </div>
                            </div>
                            <img src="../../assets/images/faces/female/10.jpg" alt="" class="img-activity">
                            <div class="time-activity">
                                <div class="item-activity">
                                    <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                    <small class="text-muted ">1 days ago</small>
                                </div>
                            </div>
                            <img src="../../assets/images/faces/male/4.jpg" alt="" class="img-activity">
                            <div class="time-activity">
                                <div class="item-activity">
                                    <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                    <small class="text-muted ">3 days ago</small>
                                </div>
                            </div>
                            <img src="../../assets/images/faces/female/8.jpg" alt="" class="img-activity">
                            <div class="time-activity mb-0">
                                <div class="item-activity mb-0">
                                    <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                    <small class="text-muted ">5 days ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Customer Satisfaction</h3>
                    </div>
                    <div class="card-body">
                        <div class="chats-wrap">
                            <div class="chat-details p-2">
                                <h6 class="mb-0">
                                    <span class="font-weight-normal">Good</span>
                                    <span class="float-right p-1">78%</span>
                                </h6>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-35" ></div>
                                </div>
                            </div>
                            <div class="chat-details p-2">
                                <h6 class="mb-0">
                                    <span class="font-weight-normal">Satisfied</span>
                                    <span class="float-right p-1">82%</span>
                                </h6>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-75"></div>
                                </div>
                            </div>
                            <div class="chat-details p-2">
                                <h6 class="mb-0">
                                    <span class="font-weight-normal">Excellent</span>
                                    <span class="float-right p-1">89%</span>
                                </h6>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-65"></div>
                                </div>
                            </div>
                            <div class="chat-details p-2">
                                <h6 class="mb-0">
                                    <span class="font-weight-normal">Average</span>
                                    <span class="float-right p-1">40%</span>
                                </h6>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-80"></div>
                                </div>
                            </div>
                            <div class="chat-details p-2">
                                <h6 class="mb-0">
                                    <span class="font-weight-normal">Unsatisfied</span>
                                    <span class="float-right p-1">20%</span>
                                </h6>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-80"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Developing Team</div>
                    </div>
                    <div class="card-body">
                        <div class="ibox teams mb-30 bg-boxshadow">
                            <!-- Ibox Content -->
                            <div class="ibox-content teams">
                                <!-- Members 
                                <div class="avatar-list avatar-list-stacked">
                                    <span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/12.jpg" ></span>
                                    <span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/21.jpg" ></span>
                                    <span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/29.jpg"></span>
                                    <span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/2.jpg"></span>
                                    <span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/male/34.jpg"></span>
                                    <span class="avatar brround cover-image cover-image">+8</span>
                                </div>
                                <!-- Team Board Details 
                                <div class="teams-board-details mt-3">
                                    <h4 class="font-weight-semibold">About Developing Team</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit quisquam veniam excepturi. Contrary to popular belief, Lorem Ipsum is not simply random text classical Latin </p>
                                </div>
                                <!-- Progress Details 
                                <span class="font-weight-semibold">Status of current project:</span>
                                <div class="progress-details-teams mt-2 mb-4">
                                    <div class="stat-percent mb-2">58%</div>
                                    <div class="progress progress-sm ">
                                        <div class="progress-bar bg-primary w-50" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <div class="teams-rank text-muted">PROJECTS</div>
                                        <span>24</span>
                                    </div>
                                    <div class="col-4">
                                        <div class="teams-rank text-muted">RANKING</div>
                                        <span>3rd</span>
                                    </div>
                                    <div class="col-4">
                                        <div class="teams-rank text-muted">BUDGET</div>
                                        <span>$36,25,854</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

