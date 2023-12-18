<?php
$pdo = new PDO('mysql:host=127.0.0.1:3307;dbname=bootstrap_projeto', 'root', '');
$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
$sobre->execute();
$sobre = $sobre->fetch()['sobre'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ace 7 - コントロール パネル</title> <!-- Ace 7 - Painel de Controle -->



  <!-- Danki -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <!--<link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">-->

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/3.4/examples/starter-template/starter-template.css" rel="stylesheet">


  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="https://getbootstrap.com/docs/3.4/assets/js/ie-emulation-modes-warning.js"></script>
</head>

<body>

  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Ace 7 - パネル</a> <!-- Ace 7 - Painel -->
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul id="menu-principal" class="nav navbar-nav">
          <li class="active"><a ref_sys="sobre" href="#">概要を編集する</a></li> <!-- Editar Sobre -->
          <li><a ref_sys="cadastrar_equipe" href="#cadastroequipe">チームを登録する</a></li> <!-- Cadastrar equipe -->
          <li><a ref_sys="lista_equipe" href="#listaequipe">チーム名簿</a></li> <!-- Lista de equipe -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="?sair"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> 外出する</li> <!-- Sair -->
        </ul>
      </div>
    </div>
  </nav>
  <div style="position: relative;top:0px" class="box">


    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> コントロールパネル</h2>
            <!-- Painel de Controle -->
          </div>
          <div class="col-md-3">
            <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 最終ログイン日: 2023 年 12 月 18 日</p>
            <!-- Data de seu último login: 18/12/2023 -->
          </div>
        </div>
      </div>
    </header>

    <section class="bread">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">ホーム</li> <!-- Home -->
        </ol>
      </div>
    </section>

    <section class="principal">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="List-group">
              <a href="#" class="list-group-item active cor-win7" ref_sys="sobre">
                <span class="glyphicon glyphicon-pencil"></span> 概要
              </a> <!-- Sobre -->
              <a href="#" class="list-group-item" ref_sys="cadastrar_equipe">
                <span class="glyphicon glyphicon-pencil"></span> チームを登録する
              </a> <!-- Cadastrar Equipe -->
              <a href="#" class="list-group-item" ref_sys="lista_equipe">
                <span class="glyphicon glyphicon-list-alt"></span> チーム名簿
                <span class="badge">2</span>
              </a> <!-- Lista da Equipe -->
            </div>
          </div>

          <div id="sobre_section" class="col-md-9">
            <?php
            if (isset($_POST['editar_sobre'])) {
              $sobre = $_POST['sobre'];
              if ($sobre === '') {
                //Prancheta de Alerta
                //success = verde; info = azul; warning = alerta; danger = erro;
                echo '<div class="alert alert-warning" role="alert"></b> 「About HTML」</b> コードが空です。</div>'; #O código HTML Sobre está vazio!
              }
              $pdo->exec("DELETE FROM `tb_sobre`");
              $sql = $pdo->prepare("INSERT INTO `tb_sobre` VALUES (null, ?)");
              $sql->execute(array($sobre));
              echo '<div class="alert alert-success" role="alert">HTML </b>「About HTML」</b> コードが正常に編集されました。</div>'; #O código HTML Sobre foi editado com sucesso!
              $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
              $sobre->execute();
              $sobre = $sobre->fetch()['sobre'];
            } else if (isset($_POST['cadastrar_equipe'])) {
              $nome = $_POST['nome_membro'];
              $descricao = $_POST['descricao'];
              $sql = $pdo->prepare("INSERT INTO `tb_equipe` VALUES (null, ?, ?)");
              $sql->execute(array($nome, $descricao));
              echo '<div class="alert alert-success" role="alert">チームメンバーが無事登録されました。</div>'; #O membro da equipe foi cadastrado com sucesso!
            
            }
            ?>
            <div class="panel panel-default">
              <div class="panel-heading cor-win7">
                <h3 class="panel-title"> 概要 </h3> <!-- Sobre -->
              </div>
              <div class="panel-body">
                <!-- Form Dom Hakurei Vasco -->
                <form method="post">
                  <div class="form-group">
                    <label for="email">HTMLコード:</label> <!-- Código HTML -->
                    <textarea name="sobre" style="height: 140px;resize: vertical;"
                      class="form-control"><?php echo $sobre; ?></textarea>
                  </div>
                  <input type="hidden" name="editar_sobre" value="" />
                  <button type="submit" name="acao" class="btn btn-default">送る</button> <!-- Enviar -->
                </form>
              </div>
            </div>

            <div id="cadastrar_equipe_section" class="panel panel-default">
              <div class="panel-heading cor-win7">
                <h3 class="panel-title"> チームを登録します: </h3> <!-- Cadastrar equipe -->
              </div>
              <div class="panel-body">
                <!-- Form Dom Hakurei Vasco -->
                <form method="post">
                  <div class="form-group">
                    <label for="nome">メンバー名：</label> <!-- Nome do membro -->
                    <input type="text" name="nome_membro" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="descricao">メンバーの説明:</label> <!-- Descrição do Membro -->
                    <textarea name="descricao" style="height: 140px;resize: vertical;" class="form-control"></textarea>
                  </div>
                  <input type="hidden" name="cadastrar_equipe" />
                  <button type="submit" class="btn btn-default">送る</button> <!-- Enviar -->
                </form>
              </div>
            </div>

            <div id="lista_equipe_section" class="panel panel-default">
              <div class="panel-heading cor-win7">
                <h3 class="panel-title"> チームメンバー： </h3> <!-- Membros da Equipe -->
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID：</th> <!-- ID -->
                      <th>メンバー名：</th> <!-- Nome do membro -->
                      <th>#</th><!-- Apagar -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $selecionarMembros = $pdo->prepare('SELECT `id`,`nome` FROM `tb_equipe`');
                    $selecionarMembros->execute();
                    $membros = $selecionarMembros->fetchAll();
                    foreach ($membros as $key => $value) {
                      ?>
                      <tr>
                        <td>
                          <?php echo $value['id']; ?>
                        </td>
                        <td>
                          <?php echo $value['nome']; ?>
                        </td>
                        <td><button id_membro="<?php echo $value['id']; ?>" type="button"
                            class="deletar-membro btn btn-sn btn-danger"><span class="glyphicon glyphicon-trash"></span>
                            消去</button></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>
  </div>
  <!-- Shift - Alt - F: Realinha o Visual Code -->
  <!-- Ctrl - shift - R / CTRL + F5: Apaga o cache e carrega acor-win7 página -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    var str = "";
    $(function () {
      //alert('JQueryが読み込まれています！'); //Jquery está sendo carregado!
      cliqueMenu();
      scrollItem();

      function cliqueMenu() {
        $('#menu-principal a, .List-group a').click(function () {
          //alert(str.concat($(this).attr('ref_sys'), 'クリックされました！')); //clicado! 'クリックされました！'
          $('.List-group a').removeClass('active').removeClass('cor-win7');
          $('#menu-principal a').parent().removeClass('active');
          $('#menu-principal a[ref_sys=' + $(this).attr('ref_sys') + ']').parent().addClass('active');
          $('.List-group a[ref_sys=' + $(this).attr('ref_sys') + ']').addClass('active').addClass('cor-win7')
          return false;
        })
      }

      function scrollItem() {
        $('#menu-principal a, .List-group a').click(function () {
          var ref = '#' + $(this).attr('ref_sys') + '_section';
          var offset = $(ref).offset().top;
          $('html,body').animate({ 'scrollTop': offset - 50 })
          if ($(window)[0].innerWidth <= 768) {
            $('.icon-bar').click();
          }
        });
      }

      $('button.deletar-membro').click(function () {
        var id_membro = $(this).attr('id_membro');
        var el_humaquaqueno = $(this).parent().parent();
        $.ajax({
          method:'post',
          data:{'id_membro':id_membro},
          url:'deletar.php'
        }).done(function () {
          el_humaquaqueno.fadeOut(function () {
            el_humaquaqueno.remove();
          });
        })


      })
    })
  </script>


</body>

</html>