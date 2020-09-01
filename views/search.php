<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <!--Add lists-->
                <div class=" mb-lg-0">
                    <div class="">
                        <div class="item2-gl ">
                            <div class=" mb-0">
                                <div class="">
                                    <div class="p-5 bg-white item2-gl-nav d-flex">
                                        <h6 class="mb-0 mt-2">Exibindo <?php echo count($postByTherm);?> resultados</h6>
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

                            <?php foreach($postByTherm as $item):?>
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
                                                                    <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                                                    <div class="rating-stars-container">
                                                                        <div class="rating-star sm is--active">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm is--active">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm is--active">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
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
                        
                    </div>
                </div>
                <!--/Add lists-->
            </div>

            
        </div>
    </div>
</section>

        