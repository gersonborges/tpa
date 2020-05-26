<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TPA | Pelo Mundo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="./" class="nav-link">Início</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Buscar">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Brand Logo -->
        <a href="../index3.html" class="brand-link">
            <img src="img/logo.png"
                 alt="TPA"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">TPA | Pelo Mundo</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="img/gersin.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Gerson Borges</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">


                    <li class="nav-header">Galeria de Fotos</li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Pelo Mundo
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-image nav-icon"></i>
                                    <p>Europa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-image nav-icon"></i>
                                    <p>Estados Unidos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-image nav-icon"></i>
                                    <p>Egito</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->

        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pelo Mundo</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="./">Início</a></li>
                            <li class="breadcrumb-item active">Pelo Mundo</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-title">
                                    Galeria de Fotos
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="btn-group w-100 mb-2">
                                        <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> Todos
                                            items </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Europa </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Estados Unidos </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Egito </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Estados Unidos, Egito </a>
                                    </div>
                                    <div class="mb-2">
                                        <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Misturar </a>
                                        <div class="float-right">
                                            <select class="custom-select" style="width: auto;" data-sortOrder>
                                                <option value="index"> Ordenar por posição</option>
                                                <option value="sortData"> Ordenar por data</option>
                                            </select>
                                            <div class="btn-group">
                                                <a class="btn btn-default" href="javascript:void(0)" data-sortAsc>
                                                    Crescente </a>
                                                <a class="btn btn-default" href="javascript:void(0)" data-sortDesc>
                                                    Decrescente </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="filter-container p-0 row">
                                        <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1"
                                               data-toggle="lightbox" data-title="Foto 1 - Europa">
                                                <img src="https://via.placeholder.com/300/FFFFFF?text=1"
                                                     class="img-fluid mb-2" alt="white sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                            <a href="https://via.placeholder.com/1200/000000.png?text=2"
                                               data-toggle="lightbox" data-title="Foto 2 - Estados Unidos">
                                                <img src="https://via.placeholder.com/300/000000?text=2"
                                                     class="img-fluid mb-2" alt="black sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3"
                                               data-toggle="lightbox" data-title="Foto 3 - Egito">
                                                <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3"
                                                     class="img-fluid mb-2" alt="red sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4"
                                               data-toggle="lightbox" data-title="Foto 4 - Egito">
                                                <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4"
                                                     class="img-fluid mb-2" alt="red sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                            <a href="https://via.placeholder.com/1200/000000.png?text=5"
                                               data-toggle="lightbox" data-title="Foto 5 - Estados Unidos">
                                                <img src="https://via.placeholder.com/300/000000?text=5"
                                                     class="img-fluid mb-2" alt="black sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6"
                                               data-toggle="lightbox" data-title="Foto 6 - Europa">
                                                <img src="https://via.placeholder.com/300/FFFFFF?text=6"
                                                     class="img-fluid mb-2" alt="white sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7"
                                               data-toggle="lightbox" data-title="Foto 7 - Europa">
                                                <img src="https://via.placeholder.com/300/FFFFFF?text=7"
                                                     class="img-fluid mb-2" alt="white sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                            <a href="https://via.placeholder.com/1200/000000.png?text=8"
                                               data-toggle="lightbox" data-title="Foto 8 - Estados Unidos">
                                                <img src="https://via.placeholder.com/300/000000?text=8"
                                                     class="img-fluid mb-2" alt="black sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9"
                                               data-toggle="lightbox" data-title="Foto 9 - Egito">
                                                <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9"
                                                     class="img-fluid mb-2" alt="red sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10"
                                               data-toggle="lightbox" data-title="Foto 10 - Europa">
                                                <img src="https://via.placeholder.com/300/FFFFFF?text=10"
                                                     class="img-fluid mb-2" alt="white sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11"
                                               data-toggle="lightbox" data-title="Foto 11 - Europa">
                                                <img src="https://via.placeholder.com/300/FFFFFF?text=11"
                                                     class="img-fluid mb-2" alt="white sample"/>
                                            </a>
                                        </div>
                                        <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                            <a href="https://via.placeholder.com/1200/000000.png?text=12"
                                               data-toggle="lightbox" data-title="Foto 12 - Estados Unidos">
                                                <img src="https://via.placeholder.com/300/000000?text=12"
                                                     class="img-fluid mb-2" alt="black sample"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Versão</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2020 <a href="http://plixsite.net">Gerson Borges</a>.</strong> Todos os direitos reservados.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>


<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="js/adminlte.min.js"></script>
<script src="js/demo.js"></script>
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<script>
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({gutterPixels: 3});
        $('.btn[data-filter]').on('click', function () {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })
</script>
</body>
</html>
