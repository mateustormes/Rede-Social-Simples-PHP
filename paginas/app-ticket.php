<?php
require('menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>


<body class="skin-default-dark fixed-layout">

            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Tickets</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Tickets</li>
                            </ol>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                <h4 class="card-title">Chamados de Dúvidas</h4>
                                <h6 class="card-subtitle">Resolva aqui seus problemas ou dúvidas sobre a plataforma diretamente conosco.</h6>
                                <div class="row m-t-40">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div data-toggle="modal" data-target="#add-chamado" class="box bg-dark text-center">
                                                <h1 class="font-light text-white" > - </h1>                                                
                                                <h6 class="text-white">Abrir Novo Chamado</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-warning text-center">
                                                <h1 class="font-light text-white">1</h1>
                                                <h6 class="text-white">Chamados Pendentes</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-success text-center">
                                                <h1 class="font-light text-white">2</h1>
                                                <h6 class="text-white">Chamados Finalizados</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white">4</h1>
                                                <h6 class="text-white">Total de Chamados</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>Número do Chamado</th>
                                                <th>Aberto por</th>
                                                <th>Categória do Problema</th>
                                                <th>Descrição Simplificada</th>
                                                <th>Status</th>
                                                <th>Nome do Atendente</th>
                                                <th>Data Abertura</th>
                                                <th>Data Finalizada</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="visualizarTicket.php">Mateus Tormes</a>
                                                </td>
                                                <td>Dúvidas Premiação</td>
                                                <td>Comprei um bilhete, fui premiado, oque faço?</td>
                                                <td><span class="label label-warning">Pendentes</span> </td>
                                                <td>Luiza Tormes</td>
                                                <td>14/10/2021</td>
                                                <td>21/10/2021</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="javascript:void(0)">Mateus Tormes</a>
                                                </td>
                                                <td>Dúvidas Confiança</td>
                                                <td>Vocês são realmente confiavéis?</td>
                                                <td><span class="label label-success">Finalizado</span> </td>
                                                <td>Sandra Tormes</td>
                                                <td>13/10/2021</td>
                                                <td>19/10/2021</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="javascript:void(0)">Mateus Tormes</a>
                                                </td>
                                                <td>Cancelamento de Compra</td>
                                                <td>Quero Cancelar minha compra.</td>
                                                <td><span class="label label-warning">Pendentes</span> </td>
                                                <td>Cleviston Tormes</td>
                                                <td>12/10/2021</td>
                                                <td>18/10/2021</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <a href="javascript:void(0)">Mateus Tormes</a>
                                                </td>
                                                <td>Dúvidas Compra</td>
                                                <td>Como faço uma compra?</td>
                                                <td><span class="label label-success">Finalizado</span> </td>
                                                <td>Lucas Tormes</td>
                                                <td>12/10/2021</td>
                                                <td>17/10/2021</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                
                                                <td colspan="6">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
</div>
</body>

</html>
<?php require('footer.php'); ?>