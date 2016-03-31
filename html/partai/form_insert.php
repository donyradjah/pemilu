<div class="container-fluid" id="content">
    <div id="main">
        <div class="container-fluid">
            <div class="page-header">


            </div>
            <div class="breadcrumbs">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="">Partai</a>
                    </li>
                </ul>
                <div class="close-bread">
                    <a href="#"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="box box-bordered box-color">
                        <div class="box-title">
                            <h3><i class="icon-th-list"></i> Insert Partai</h3>
                        </div>
                        <div class="box-content nopadding">
                            <form action="" enctype="multipart/form-data" method="POST" class='form-horizontal form-bordered'>
                                <input type="hidden" name="pml" value="partai">
                                <input type="hidden" name="act" value="insert">
                                <div class="control-group">
                                    <label for="textfield" class="control-label">Nama Partai</label>

                                    <div class="controls">
                                        <input type="text" name="partai" id="textfield" placeholder="Nama Partai"
                                               class="input-xlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="password" class="control-label">Logo</label>

                                    <div class="controls">
                                        <input type="file" name="logo"
                                            >
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <button type="button" class="btn">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>