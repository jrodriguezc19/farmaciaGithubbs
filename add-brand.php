<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>





    <!--     color     -->
<div  class="page-wrapper" style="background-image: url('assets/uploadImage/Logo/fondo.jpg'); 
        background-repeat: no-repeat;
        background-size: cover;"
        
        >

    <div class="row page-titles" >
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"
            >Agregar Proveedor</h3>
        </div>
        <div class="col-md-7 align-self-center" >
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php" rel="noopener">Inicio</a></li>
                <li class="breadcrumb-item active">Agregrar Proveedor</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid" >




        <div class="row" 
        
        >
            <div class="col-lg-8" style="margin-left: 15%;
            margin-top:5%;
            
            color:#008080; 
            font-size:20px;
            
            ">
                <div class="card"
                style="background-color:#B0E0E6;"
                >
                    <div class="card-title">
                        

                    </div >
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" id="submitBrandForm" action="php_action/createBrand.php" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Nombre Proveedor</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="brandName" placeholder="Proveedor" name="brandName" required="" pattern="^[a-zA-z]+$" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Estado</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="brandStatus" name="brandStatus"
                                            style="margin-left:1px;">
                                                <option value="">Elegir</option>
                                                <option value="1">Disponible</option>
                                                <option value="2">No disponible</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="create" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30"
                                              

                                >Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <?php include('./constant/layout/footer.php'); ?>