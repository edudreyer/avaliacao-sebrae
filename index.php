<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Inscricao;
use \App\Entity\Palestra;

$objPalestras = Palestra::getPalestra();
define('BUTTON', 'Cadastrar');

// VALIDA POST
if (isset($_POST['nome'])) {
    $obInscricao = new Inscricao;
    $obInscricao->codigo_palestra = $_POST['codigo_palestra'];
    $obInscricao->nome = $_POST['nome'];
    $obInscricao->cpf = $_POST['cpf'];
    $obInscricao->data_nascimento = $_POST['data_nascimento'];
    $obInscricao->telefone = $_POST['telefone'];
    $obInscricao->cep = $_POST['cep'];
    $obInscricao->logradouro = $_POST['logradouro'];
    $obInscricao->numero = $_POST['numero'];
    $obInscricao->complemento = $_POST['complemento'];
    $obInscricao->bairro = $_POST['bairro'];
    $obInscricao->cidade = $_POST['cidade'];
    $obInscricao->uf = $_POST['uf'];
    $obInscricao->cadastrar();

    header('location: index.php?op=sucesso');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paletra Jornada de Marketing Digital</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <script src="assets/js/custom.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>


    <?php if (@$_GET['op'] == 'sucesso') { ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">Inscri????o realizada com sucesso!!!</div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="title">Jornada de Marketing Digital</h3>
                            <div class="call">
                                <br>
                                <p>Edi????o:3a</p>
                                <p>Data: 22 e 23 /06/2022</p>
                                <p>Hora: 14h ??s 21h</p>
                                <p>Local: Hibrida (YouTube e Centro de Eventos do Pantanal)</p>

                            </div>
                        </div>
                        <div class="col-md-2">
                            <img src="assets/images/BG-LINK.png" class="img-responsive" alt="Jornada de Marketing Digital">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">In??cio</a></li>
                        <li role="presentation"><a href="#programacao" aria-controls="programacao" role="tab" data-toggle="tab">Programa????o</a></li>
                        <li role="presentation"><a href="#incricoes" aria-controls="incricoes" role="tab" data-toggle="tab">Inscri????es</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <h2 class="subtitle">OBJETIVO ESPEC??FICO</h2>
                            <p>
                                <br> - Disseminar tend??ncias e futuro do mercado digital para os pequenos neg??cios
                                <br> - Aumentar a presen??a digital dos pequenos neg??cios
                                <br> - Contribuir para a melhoria do faturamento e resultados dos pequenos neg??cios
                                <br> - Orientar sobre ferramentas e m??todos objetivos que contribuam para aumento da
                                maturidade digital do empreendedor e que sejam de pr??tica aplica????o no neg??cio
                            </p>

                            <p>
                                Esta ?? a terceira edi????o da Jornada de Marketing Digital, um evento que consolida o
                                posicionamento do Sebrae de contribuir para o aumento da maturidade digital dos pequenos
                                neg??cios, ajudando-os a melhorar sua presen??a digital e obter resultados mais sustent??veis
                                para a sua empresa.<br>
                                A realiza????o deste evento vai colaborar com as diretrizes e estrat??gia de relacionamento com
                                o cliente, buscando sua fideliza????o e ades??o as a????es desenvolvidas pelo Sebrae em Mato
                                Grosso, al??m de vincular-se aos objetivos estrat??gicos de: ???Elevar a competitividade e
                                produtividade dos Pequenos Neg??cios??? e ???Promover um relacionamento acess??vel, integrado,
                                resolutivo, ??gil e transformador???.
                            </p>
                            <hr>
                            <h2 class="subtitle">P??BLICO DE INTERESSE</h2>
                            <p>
                                Empres??rios de pequenos neg??cios (MEI, ME e EPP) que querem se atualizar sobre o tema
                                de marketing digital.
                            </p>
                            <hr>
                            <h2 class="subtitle">RESULTADOS ESPERADOS</h2>
                            <p>
                                <br> - Aumentar a presen??a digital dos pequenos neg??cios
                                <br> - Contribuir para a melhoria do faturamento e resultados dos pequenos neg??cios
                                <br> - Consolidar o SEBRAE
                            </p>
                            <hr>
                            <h2 class="subtitle">FORMATO DO EVENTO</h2>
                            <p>
                                <br> - 1o dia: Palestras Online pelo YouTube do Sebrae/MT (Gravado e transmitido)
                                <br> - 2o dia: Oficinas Presenciais e Masteclass Presencial no Centro de Eventos do Pantanal
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="programacao">

                            <h2 class="subtitle">PROGRAMA????O DO EVENTO</h2>
                            <p>
                            <h3> 1o dia: Palestras Online ??? 19h ??s 21h</h3>
                            <br> - Abertura
                            <br> - Palestra Social Selling
                            <br> - Palestra Marketplace com Mercado Livre
                            <br> - Palestra Live E-commerce com Americanas
                            <br> - Palestra Tend??ncias e futuro do digital
                            </p>
                            <hr>
                            <p>
                            <h3> 2o dia: Oficinas Presenciais e Masteclass Presencial no Centro de Eventos do Pantanal</h3>
                            <br><b>13h30 ??s 15h30 ??? Jornada Esquentando os motores</b><br>
                            <br> - Oficina Como usar o Whastapp Business para alavancar os resultados do seu neg??cio
                            <br> - Oficina Como vender mais no Instagram
                            <br> - Oficina Como ser encontrado no Google
                            <br> - Oficina Como abrir sua loja virtual do zero<br>
                            <br><b>16h00 ??s 18h00 ??? Jornada Aprimorando a performance</b>
                            <br> - Oficina Relacionamento e P??s Vendas
                            <br> - Oficina A soberania dos v??deos ??? Estrat??gias para YouTube, Reels e TikTok
                            <br> - Oficina Perca o medo, mas n??o perca dinheiro. Aprenda a fazer an??ncios pagos.
                            <br> - Oficina Experi??ncia do Cliente
                            <br>
                            <br><b>13h30 ??s 18h00 ??? Jornada Eu vendedor</b><br>
                            Oficina Marketing de Influ??ncia 360o. O que fazer, da atra????o ?? fideliza????o.
                            </p>


                        </div>
                        <div role="tabpanel" class="tab-pane" id="incricoes">
                            <h2 class="subtitle">INSCRI????O</h2>
                            <hr>
                            <p>Preencha o formul??rio abaixo para realizar sua inscri????o.</p>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">


                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <form method="post">
                                                <div class="form-group">
                                                    <label>Escolha a palestra</label>
                                                    <select class="form-control" name="codigo_palestra" id="codigo_palestra">
                                                        <option value="" selected>Selecione</option>
                                                        <?php foreach ($objPalestras as $palestra) { ?>
                                                            <option value="<?php echo $palestra->codigo; ?>"><?php echo $palestra->nome; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input type="text" name="nome" id="nome" class="form-control" value="" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>CPF</label>
                                                    <input type="text" name="cpf" id="cpf" class="form-control" value="" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Data de nascimento</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value="" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Telefone</label>
                                                    <input type="text" name="telefone" id="telefone" class="form-control" value="" required="">
                                                </div>


                                                <div class="form-group">
                                                    <label>CEP</label>
                                                    <input type="text" name="cep" id="cep" class="form-control" value="" required="" onblur="pesquisacep(this.value);">
                                                </div>
                                                <div class="form-group">
                                                    <label>Logradouro</label>
                                                    <input type="text" name="logradouro" id="logradouro" class="form-control" value="" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Numero</label>
                                                    <input type="text" name="numero" id="numero" class="form-control" value="" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Complemento</label>
                                                    <input type="text" name="complemento" id="complemento" class="form-control" value="" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" name="bairro" id="bairro" class="form-control" value="" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Cidade</label>
                                                    <input type="text" name="cidade" id="cidade" class="form-control" value="" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>UF</label>
                                                    <input type="text" name="uf" id="uf" class="form-control" value="" required="">
                                                </div>


                                                <button type="submit" class="btn btn-success"><?= BUTTON ?></button>
                                            </form>
                                        </div>
                                        <div class="panel-footer"> </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br><br><br>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>