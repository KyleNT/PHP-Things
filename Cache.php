<?php
class Cache
{
    public function readCache()
    {
        if (file_exists('cache')) {
            $data = json_decode(file_get_contents('cache'));
            if ($data->tempo < time()) {
                //Hora de criar um cache
                echo 'Criando novo cache <hr>';
                $data = json_encode(['tempo' => time() + 10, 'conteudo' => '<h2>Site em Manutenção</h2>']);
                file_put_contents('cache', json_encode($data));
                $data = json_decode($data);
            }
        } else {
            echo "Criando cache pela primeira vez <hr>";
            $data = json_encode(['tempo' => time() + 10, 'conteudo' => '<h2>Site em Manutenção</h2>']);
            file_put_contents('cache', $data);
            $data = json_decode($data);
        }

        return $data;
    }
}
?>