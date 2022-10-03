<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<?php include('./constant/connect');
$sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1";
$result = $connect->query($sql);
//echo $sql;exit;



?>
<link rel="stylesheet" type="text/css" href="style.css" />


    <!--     color     -->
<div style="background-image: url('assets/images/segundimgs.webp'); 
        background-repeat: no-repeat;
        background-size: cover;" class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"
            style="

color: #216e39 !important;
    font-size: x-large;
    text-align-last: left;
    margin-left: auto;
    margin-bottom: 1px;
            "
            > Gestionar Categorías</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Inicio</a></li>
                <li class="breadcrumb-item active">Ver Categorías</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">

        <div class="card">
            <div class="card-body"
            style="
            background: floralwhite;
            padding: 0;
            font-size: initial;"
            >

                <a href="add-category.php"><button class="btn btn-primary"
                style="
                background: darkcyan;
                font-size: smaller;"
                >Agregar Categoría</button></a>

                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nombre Categoría</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $row['categories_id'] ?></td>
                                    <td><?php echo $row['categories_name'] ?></td>
                                    <td><?php if ($row['categories_active'] == 1) {
                                            echo "Disponible";
                                        } else {
                                            echo "No disponible";
                                        } ?></td>
                                    <td>

                                        <a href="editcategory.php?id=<?php echo $row['categories_id'] ?>"><button type="button" class="btn btn-xs btn-primary 
                                        "><i class="fa fa-pencil" 
                                        style="background: #26986a;
                                        color=red;"
                                        ></i></button></a>



                                        <a href="php_action/removeCategories.php?id=<?php echo $row['categories_id'] ?>"><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('¿Deseas eliminar este registro?')"><i class="fa fa-trash"></i></button></a>


                                    </td>
                                </tr>

                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                </div>
            </div>
        </div>


        <?php include('./constant/layout/footer.php'); ?>