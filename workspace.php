<?php
include_once('includes/head.php');
?>
<body>
    <div id="wrapper">
        <?php include_once('includes/menu.php'); ?>
        <div id="page-wrapper" class="gray-bg">
            <?php include_once('includes/header.php'); ?>
            <div class="wrapper wrapper-content">
                <div class="row" id="central">
                    <?php
                    $page = base64_decode(@$_REQUEST['view']);
                    if (empty($page)) {

                        include("views/home.php");
                    } else 
                    {
                        switch ($page):

                            case 'home':
                                include("views/home.php");
                                break;
                            case 'add_postulante':
                                include("views/postulantes.php");
                                break;
                            case 'seg_alta':
                                include("views/seg_alta.php");
                                break;
                            case 'com_alta':
                                include("views/com_alta.php");
                                break;
                            case 'valida_alta':
                                include("views/valida_alta.php");
                                break;
                            case 'sol_baja':
                                include("views/sol_bajas.php");
                                break;
                                case 'evaluacion':
                                    include("views/evaluacion.php");
                                    break;
                        endswitch;
                    }
                    ?>
                </div>
            </div>
            <?php include_once('includes/footer.php'); ?>
        </div>
    </div>
</body>
<?php
include_once('includes/scripts.php');

?>