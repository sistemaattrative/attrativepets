<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Attrative Dashboard">
  <meta name="author" content="Attrative">
  <meta name="keyword" content="">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Home | ATTRPETS</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Menu" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">ATTR<span class="lite">PET</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                            <span class="username">Administrador</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="../index.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Células</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="celulas_lista.php">Células</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_tags_alt"></i>
                          <span>Planos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="beneficios_lista.php">Benefícios</a></li>
              <li><a class="" href="planos_lista.php">Planos</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_lifesaver"></i>
                          <span>Plataformas</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="plataformas_lista.php">Plataformas</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_group"></i>
                          <span>Usuários</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="vendedores_lista.php">Clientes</a></li>
              <li><a class="" href="vendedores_lista.php">Plataformas</a></li>
              <li><a class="" href="vendedores_lista.php">Vendedores</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_cart"></i>
                          <span>Vendas</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="../../formulario_venda_comissao.html">Realizar venda</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Relatórios</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="relatorios_consolidado.html">Comissão (célula)</a></li>
              <li><a class="" href="relatorios_consolidado.html">Comissão (plataforma)</a></li>
              <li><a class="" href="relatorios_consolidado.html">Consolidado</a></li>
              <li><a class="" href="relatorios_consolidado.html">Pagamentos</a></li>
              <li><a class="" href="relatorios_consolidado.html">Vendas concretizadas</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            </ol>
            <h3>Olá, Administrador. Seja bem-vindo!</h3>
          </div>
        </div>
        <!-- page start-->

        <!-- Page content goes here -->

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          
          Designed by Attrative &emsp;
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
