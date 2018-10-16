<html>
    <head>
        <title>Meu projeto Framework</title>

        <!--bootstrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"/>
        <link href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url() . 'home'; ?>">Home</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'cadastro'; ?>">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'tabela'; ?>">Tebelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'login'; ?>">login</a>
                    </li>
                    <li class="nav-item">
                        <?php if ($this->session->userdata('estou_logado')) { ?>
                        <a class="nav-link" href="<?php echo base_url() . 'login/sair'; ?>">Sair</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <br>