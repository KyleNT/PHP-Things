<div class="chamada">
    <div class="center">
        <h2>
            <?php echo $arr['titulo']; ?>
        </h2>
    </div>
</div>

<div class="contato principal">

    <form method="post">
    <div class="center">
        <h2><?php echo $trad['bem_vindo_3'];?></h2>
        <div class="alerta">
            <h3><?php echo $trad['entre_contato'];?>
            </h3>
        </div>
    </div>
        <input type="text" name="nome" placeholder="<?php echo $trad['seu_nome'];?>" />
        <textarea name="mensagem" placeholder="<?php echo $trad['sua_mensagem'];?>">
        </textarea>
        <input type="submit" name="acao" value="<?php echo $trad['enviar'];?>">

    </form>
</div>