<div class="page-header">
    <h4 class="page-title">Inserir Post</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Ad</li>
    </ol>
</div>
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Inserir Post</div>
            </div>
            <div class="card-body">

                <?php if(isset($msg)):?>
                    <div class="alert alert-success"><?php echo $msg;?></div>
                <?php endif;?>

                <form method="POST">
                    <div class="form-group ">
                        <label class="form-label">Titulo do Post</label>
                        <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="title">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Select Category</label>
                        <select class="form-control" data-placeholder="Choose Browser" name="category">
                            <?php foreach($listCategories as $item):?>
                                <option value="<?php echo $item['id'];?>"><?php echo $item['title'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Upload Imagens do Slider</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="example-file-input-custom">
                            <label class="custom-file-label">Upload Imagens</label>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <label class="form-label">Corpo do Post</label>
                        <textarea name="body" id="editor" class="form-control w-100 editor" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="form-group ">
                        <label class="form-label">Nome do Altor</label>
                        <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="althor_name">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Publicar</button>
                </div>
            </form>
        </div>
    </div>
</div>

