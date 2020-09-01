<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center">
            <h2>Categorias</h2>
            <p>Tudo o que você procura está apenas há um clique.</p>
        </div>
        <div class="row">
            
            <?php foreach($listCat as $item):?>

                <?php 
                    $a = new Admin();
                    $qtCat = $a->countCatById($item['id']);	
                    // print_r($qtCat);exit;
                ?>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="<?php echo BASE_URL."categories/index/".$item['id'];?>"></a>
                                <div class="item-card-img">
                                    <img src="<?php echo BASE_URL."media/categories/".$item['icon'];?>" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0"><?php echo $item['title'];?><span>(<?php echo $qtCat;?>)</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            
        </div>
    </div>
</section>