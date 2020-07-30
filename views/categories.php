<div class="bg-white border-bottom" style="margin-top: 50px;">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Lista Beleza</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://bsbclub.com.br/index.html">Inicio</a></li>
                <li class="breadcrumb-item"><a href="http://bsbclub.com.br/categories.html">Categorias</a></li>
                <li class="breadcrumb-item active" aria-current="page">Beleza</li>
            </ol>
        </div>
    </div>
</div>

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
                                        <h6 class="mb-0 mt-2">Exibindo 30 resultados</h6>
                                        <ul class="nav item2-gl-menu ml-auto">
                                            <li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                            <li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                        </ul>
                                        <div class="d-flex">
                                            <label class="mr-2 mt-1 mb-sm-1">Procurar:</label>
                                            <select name="item" class="form-control select-sm w-70">
                                                <option value="1">Novas</option>
                                                <option value="2">Antigas</option>
                                                <option value="3">Menor Preço</option>
                                                <option value="5">Maior Preço</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php foreach($listPost as $item):?>
                                <?php 
                                    $a = new Admin;
                                    $dadosCategory = $a->getDadosFromCategory($item['id']);
                                ?>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-11">
                                        <div class="card overflow-hidden">
                                            <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Desconto <?php echo $item['discount'];?>%</span></div>
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    
                                                    <div class="item-card9-imgs">
                                                        <a href="#"></a>
                                                        <img src="<?php echo BASE_URL;?>assets/blog/imagesPosts/<?php echo 'bella-ella'?>.png" alt="img" class="cover-image" style="height: 210px;">
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
                                                            
                                                            <a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1"><?php echo $item['title'];?> </h4></a>
                                                            <br>
                                                            <p class="mb-0 leading-tight"><?php echo $item['description'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pt-4 pb-4">
                                                        <div class="item-card9-footer d-flex">
                                                            
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
                        <div class="center-block text-center">
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
                        </div>
                    </div>
                </div>
                <!--/Add lists-->
            </div>

            <!--Right Side Content-->
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control br-tl-3 br-bl-3" placeholder="Pesquisar">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary br-tr-3 br-br-3">
                                    Pesquisar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categorias</h3>
                    </div>
                    <div class="card-body">
                        <div class="" id="container">
                            <div class="filter-product-checkboxs">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Academia<span class="label label-secondary float-right">14</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Veículos<span class="label label-secondary float-right">22</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Escritórios<span class="label label-secondary float-right">78</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Turismo<span class="label label-secondary float-right">35</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Educação<span class="label label-secondary float-right">23</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Imóveis<span class="label label-secondary float-right">14</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Moda<span class="label label-secondary float-right">45</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Decoração<span class="label label-secondary float-right">34</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Eletrônicos<span class="label label-secondary float-right">12</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Musica e Hobbie<span class="label label-secondary float-right">18</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Esportes e Lazer<span class="label label-secondary float-right">02</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Saúde<span class="label label-secondary float-right">15</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                    <span class="custom-control-label">
                                        <a href="#" class="text-dark">Festas<span class="label label-secondary float-right">32</span></a>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>

        