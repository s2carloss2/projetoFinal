     <?php
     $resultDados = new Conexao();
     $dados = $resultaDados->consultarBanco('select * FROM usuarios');
     ?>
     
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contato</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="?pg=inicial">Inicial</a></li>
                            <li class="breadcrumb-item active">Contato</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                      
                      
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Contato dos Clientes</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <?php foreach ($dados as $DadosUsuarios) {?>
                                        <tr>
                                        <td><?php echo $DadosUsuarios['id_usuario'] ?></td>
                                        <td><?php echo $DadosUsuarios['nome'] ?></td>
                                        <td><?php echo $DadosUsuarios['dataCriação'] ?></td>
                                        <td><?php echo $DadosUsuarios['dataAtualização'] ?></td>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Assunto</th>
                                            <th>Mensagem</th>
                                            <th>O que deseja fazer?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>U</td>
                                        </tr>
                                        <tr>
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>U</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Assunto</th>
                                            <th>Mensagem</th>
                                            <th>O que deseja fazer?</th>
                                        </tr>
                                        <?php } ?>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->