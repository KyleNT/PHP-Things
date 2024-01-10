<?php

    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Clientes;
    class ClientesController extends Controller
    {
        public function index(){
            //Clientes::find(1)->delete();
            $objio = Clientes::find(1);
            $objio->nome = "Satori Komeiji";
            $objio->save();
            $deeta['clientes'] = Clientes::all();
            //print_r($deeta['clientes']);
            return view("clientes", $deeta);
        }

        public function getCliente($id){
            $infol = Clientes::find($id);
            $deeta['nome'] = $infol['nome'];
            $deeta['email'] = $infol['email'];

            return view('cliente_single', $deeta);
        }

        public function inserir(Request $hykaric){
            if($hykaric->has('nome')){
                //Existe um post, apenas inserir!
                $nome = $hykaric->input('nome');
                $email = $hykaric->input('email');
                $clientes = new Clientes();
                $clientes->nome = $nome;
                $clientes->email = $email;
                $clientes->save();
                echo '<script>alert("Inserido com sucesso!")</script>';
                echo '<script>location.href="'.BASED_URL.'"</script>';
                die();
                //return redirect('/');
            }
        }
    }
?>