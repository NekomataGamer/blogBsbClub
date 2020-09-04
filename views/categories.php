<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12">
                <!--Add lists-->
                <div class=" mb-lg-0">
                    <div class="">
                        <div class="item2-gl ">
                            <div class=" mb-0">
                                <div class="">
                                    <div class="p-5 bg-white item2-gl-nav d-flex">
                                        <h6 class="mb-0 mt-2">Exibindo <?php echo count($listPost);?> resultados</h6>
                                        <ul class="nav item2-gl-menu ml-auto">
                                            
                                        </ul>
                                        <form method="POST">
                                        <div class="d-flex">
                                            <label class="mr-2 mt-1 mb-sm-1">Procurar:</label>
                                            <select name="filter01" class="form-control select-sm w-70" onchange="submit(this)">
                                                <option value="">Selecionar</option>
                                                <option value="1">Novas</option>
                                                <option value="2">Antigas</option>
                                                <option value="3">Menor Desconto</option>
                                                <option value="4">Maior Desconto</option>
                                            </select>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php if(isset($msg)):?>
                                <div class="alert alert-info" style="margin: 50px 0px 50px 0px;"><?php echo $msg; ?></div>
                            <?php endif;?>

                            <?php foreach($listPost as $item):?>
                                <?php 
                                    $a = new Admin();
                                    
                                    $dadosCategory = $a->getDadosFromCategory($item['id_category']);
                                    $images = $a->getImagesByProductId($item['id']);
                                ?>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-11">
                                        <div class="card overflow-hidden">
                                            <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Desconto <?php echo $item['discount'];?>%</span></div>
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    
                                                    <div class="item-card9-imgs">
                                                        <a href="<?php echo BASE_URL."showcase/index/".$item['id'];?>"></a>
                                                        <img src="<?php echo BASE_URL."media/posts/".$images[0]['urlf'];?>" alt="img" class="cover-image" style="height: 210px;">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <div class="arrow-ribbon bg-primary"><?php echo $dadosCategory['title'];?></div>
                                                            <br>
                                                            
                                                            <a href="<?php echo BASE_URL."showcase/index/".$item['id'];?>" class="text-dark"><h4 class="font-weight-semibold mt-1"><?php echo $item['title'];?> </h4></a>
                                                            <br>
                                                            <p class="mb-0 leading-tight"><?php echo $item['description'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pt-4 pb-4">
                                                        <div class="item-card9-footer d-flex">
                                                            Por: <?php echo $item['author'];?>
                                                            <div class="ml-auto">
                                                                <div class="rating-stars block">
                                                                    <i class="icon icon-location-pin text-muted mr-1"></i><?php echo $item['localizacao'].' - '. $item['estado'];?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach;?>
                            
                        </div>
                        <!-- <div class="center-block text-center">
                            <ul class="pagination mb-5">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="#">Proximo</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <!--/Add lists-->
            </div>

            <!--Right Side Content-->
            <div class="col-xl-3 col-lg-4 col-md-12">
                <!-- <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control br-tl-3 br-bl-3" placeholder="Pesquisar" name="searchCatPage">
                                <div class="input-group-append ">
                                   <input type="submit" class="btn btn-primary br-tr-3 br-br-3" value="Pesquisar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categorias</h3>
                    </div>
                    <div class="card-body">
                        <div class="" id="container">
                            <div class="filter-product-checkboxs">
                            <?php foreach($categories as $item):
                                    $a = new Admin();
                                    $countCatById = $a->countCatById($item['id']);
                                ?>
                                <label class="custom-control custom-checkbox mb-3">
                                    <!-- <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1"> -->
                                    <span class="custom-control-label">
                                        <a href="<?php echo BASE_URL.'categories/index/'.$item['id'];?>" class="text-dark"><?php echo $item['title'];?><span class="label label-secondary float-right"><?php echo $countCatById;?></span></a>
                                    </span>
                                </label>
                            <?php endforeach;?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>

        