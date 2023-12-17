<?php
    class democracticKampuchea{
        //Objeto KD
        private $nome = 'Pol Pot';
        private $idade = '50';
        private $peso = '60kg';

        public function trabalharNoCampo(){
            //this = Este Objeto em Si
            //Chama atributo privado
            $this->tirarÓculos();
            echo '<br />';
            echo 'Estou trabalhando nos campos de arroz';
        }

        private function tirarÓculos(){
            echo 'Estou tirando óculos de opositores';
        }
    }

    //Instância
    $kd1 = new democracticKampuchea;
    $kd2 = new democracticKampuchea;
    
    echo '<h1> Macadâmia </h1>
    <br />';
    //chama método no objeto
    $kd1->trabalharNoCampo();

    echo '<br />';

    //Aula 2
    //inclui classes estrangeiras
    include('ace-2.class.php');
    //Instância de Objeto
    $polPot = new PolPot();
    $polPot->communistov2 = 'Based Department';
    $polPot2 = new PolPot;
    $polPot2->communistov2 = 'John Kampuchea';


    echo $polPot->communistov2;
    echo '<br />';
    echo $polPot2->communistov2;
    echo '<br />';

    //Variável Estática, ele não entra no instanciamento ->, mas sim em dois pontos ::
    PolPot::$communistov3 = 'Variavelmente Comunostático';
    echo PolPot::$communistov3;

    //método estático
    echo '<br />';
    PolPot::métodoMarxistaLeninista();

    //método não-estático
    echo '<br />';
    $polPot->setCommunistov('Expectativa de vida do Kampuchea era 18 anos ☠️');
    echo $polPot->getCommunistov();
    echo '<br />';
    $polPot2->setCommunistov('Interlectual ☠️');
    echo $polPot2->getCommunistov();
    echo '<br />';

    //Aula 3
    //Tipos de Classe
    //Quando uma classe é final, não é possível herdar dela
    final class Ukraine{

        public function warCry(){
            echo 'Slava Ukraina!';
        }
    }

    class Ukraina{

        //Private só chama a própria classe
        private function Zaporizhzhia(){
            echo 'Chamando função Zaporizhzhia';
        }
        //Pode chamar tando na classe principal, como na herdada
        protected function Kiev(){
            echo 'Chamando função Kiev';
        }
        public function yablochko(){
            echo 'Exhia, Yablochko!';
            echo '<br />';
            $this->Zaporizhzhia();
        }
    }

    //extends recebe de outro
    class Slavic extends Ukraina{

        public function yablochko(){
            //Chamar a função antiga
            parent::yablochko();
            echo '<br />';
            echo 'Yablochko!';
        }
        public function cry(){
            echo 'Slava!';
            echo '<br />';
            $this->Kiev();
        }
    }

    $slavic = new Slavic;
    $slavic->cry();
    echo '<br />';
    $slavic->yablochko();
    echo '<br />';
    $ukraine = new Ukraine;
    $ukraine->warCry();
    
    //Aula 4
    //é uma classe abstrata, não dá para instanciar, serve para ser chamada
    abstract class Tadjiquistão{
        public function dushambe(){
            echo 'Chamando função tadjiquistão';
        }

        //quando tem função abstrata, tem que botar na função principal
        abstract function tadjique();
    }

    class Congruália{
        public static function UzbequistãoEstatista(){
            echo 'Uzbequistão Estatista';
        }
    }

    class Principália extends Tadjiquistão{
        public function tadjique(){
            echo 'Método Abstrato herdado por Principália';
        }
        public static function tadjiqueEstatista(){
            echo 'Tadjique Estatista';
        }
        public function tadjiqueIntervencionista(){
            //Pode chamar método estático em uma função não estática
            //Principália::tadjiqueEstatista();
            //Self, chamar um método estático que está específico nesta classe
            self::tadjiqueEstatista();
            echo '<br />';
            Congruália::UzbequistãoEstatista();
        }
    }

    $principália = new Principália;
    $principália->dushambe();
    echo '<br />';
    $principália->tadjique();
    echo '<br />';
    Principália::tadjiqueEstatista();
    echo '<br />';
    $principália->tadjiqueIntervencionista();

    //Aula 5
    //Interface não pode ser instanciada, 
    include('ace-2-interface.php');

    //A partir quando põe um método numa interface, todos os métodos tem que colocar na classe, e tem que colocar numa classe principal e dizer o que fazer
    //mas não pode dizer o que eles podem fazer. Classe abstrata cria métodos e atributos, mas não podem ser instanciados mas sim herdados.
    class Testola implements Turcomenistão{
        public function printOnScreen($páreo){
            echo 'Turcomenistão de ' . $páreo;
        }
    }

    $testola = new Testola;
    echo '<br />';
    $testola->printOnScreen('Asgabate');
    echo '<br />';
    //Aula 6
    //Métodos Mágicos
    //Os métodos mágicos são aqueles que vem por padrão na classe, pode declarar ou não
    //Método mágico é por exemplo __construct
    include('ace-2-2.class.php');
    $mcl = new mcl('Karium','22');

    echo $mcl->getNome();
    echo '<br />';
    echo $mcl->getIdade();
    echo '<br />';

    //Aula 7
    //NameSpaces
    include('ace-2-3.class.php');
    //No Use, pode botar nomes em classes em sessões
    use \Sessão1\mdl as mdl_class;

    $mdl = new mdl_class;
    echo '<br />';
    $mfl = new \Sessão2\mfl();

    //Aula 8
    //Autoloads
    include('ace-config.php');
    echo '<br />';
    new utilities();
    echo '<br />';
    new Home\initial();

    //Aula Bônus - Cosntantes
    define('CONSTANTOLA','constância');
    echo '<br />';
    class ClasseConstância
    {
        const VALOR = 300;
        public function __construct(){
            echo self::VALOR;
        }
    }
    new ClasseConstância;
    echo '<br />';
    echo ClasseConstância::VALOR;

    ?>