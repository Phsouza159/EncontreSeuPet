<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            /* div que fica entre os formularios*/
            .div-group-principal-cadastro
            {

            }
            /* form em que esta c formulario*/
            .form-group-principal-cadastro
            {

            }
            /* tabela em que fica organizados o formulario */
            .table-group-principal-cadastro 
            {
                border: 1px solid grey;
            }
            /* inputs dentro do formularios */
            .input-principal-cadastro
            {

            }
            /* descricao do texto do input */
            .text-descricao-group-principal-cadastro
            {
                text-align: left;
            }
            /* condifuracao para o calendario da data de nascimento*/
            .dtNasc-calendario-group-principal-cadastro
            {
                
            }
            
        </style>
    </head>
    <body>
        <?php
        
        echo View::getTelaCadastro();
        
        ?>
    </body>
</html>

<?php
/*
 * Criar um arquivo separado depois 
 */

class View {

    public static function getTelaCadastro(): string {
        return CadastroTealas::telasCadastro();
    }

}

class CadastroTealas extends View {

    static private $limiteTela = 3;
    static private $pagina = "Cadastro.php";
    
    static private $array_chaves_primeira_tela = [ 1 => 'cadastro-nome',
            2 => 'cadastro-sobrenome',
            3 => 'cadastro-telefone',
            4 => 'cadastro-dataNescimento',
            5 => 'cadastro-Estado',
            6 => 'cadastro-logradouro',
            7 => 'cadastro-complemento'];
    
    static function getLimiteTela() {
        return CadastroTealas::$limiteTela;
    }

    static function getPagina() {
        return CadastroTealas::$pagina;
    }

    static function setLimiteTela($limiteTela) {
        CadastroTealas::$limiteTela = $limiteTela;
    }

    static function setPagina($pagina) {
        CadastroTealas::$pagina = $pagina;
    }

    public static function telasCadastro(): string {

        switch (CadastroTealas::verificarQualTela()) {
            case 1:
                return CadastroTealas::getTela01();

            case 2:
                return CadastroTealas::getTela02();

            case 3:
                return CadastroTealas::getTela03();

            default:
                break;
        }
    }

    public static function verificarQualTela(): int {
        $aux = isset($_REQUEST['PagAtual']) ? $_REQUEST['PagAtual'] : 1;

        if ($aux > CadastroTealas::getLimiteTela()) {
            $aux = 1;
        }

        return $aux;
    }
    
    public static function processarGet(string $tela)
    {
       if( session_status() === PHP_SESSION_ACTIVE ){
            session_start();
        }
        switch ($tela)
        {
           case 'primeira-tela':
               $limite = count(CadastroTealas::$array_chaves_primeira_tela);
               $array   = CadastroTealas::$array_chaves_primeira_tela;
               break;
           
        }
        
        $aux = '';
        for($i = 1 ; $i <= $limite ; $i++)
        {
            $aux .= ( $_POST[$array[$i]] ) 
                        ? ( "&&" . $_POST[$array[$i]] ) 
                           : NULL ;
        }
        echo $aux;
       $_SESSION[$tela] = $aux;
       
    }

    public static function getTela01(): string {
        
        
        
        return " 
             <div class='div-group-principal-cadastro'> 
                <form action='" . CadastroTealas::getPagina() . "' method='post' class='form-group-principal-cadastro'>
                    <table class='table-group-principal-cadastro'>
                       
                        <input type='hidden' name='PagAtual' value='".(CadastroTealas::verificarQualTela() + 1)."'/>

                        <tr>
                            <td>
                              <span class='text-descricao-group-principal-cadastro'>Nome:</span>
                            </td>
                            <td>
                                <input name='cadastro-nome' type='text' class='input-principal-cadastro' placeholder='ex: João'/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                              <span class='text-descricao-group-principal-cadastro'>Sobrenome:</span>
                            </td>
                            <td>
                                <input name='cadastro-sobrenome' type='text' class='input-principal-cadastro' placeholder='ex: Victor'/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                              <span class='text-descricao-group-principal-cadastro'>Telefone:</span>
                            </td>
                            <td>
                                <input name='cadastro-telefone' type='number' class='input-principal-cadastro' placeholder='ex: 91 99999 9999'/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                              <span class='text-descricao-group-principal-cadastro'>Sexo:</span>
                            </td>
                            <td>
                                 <input type='radio' name='cadastro-male' value='cadastro-male'><span class='text-descricao-group-principal-cadastro'>Masculino</span> 
                                 <input type='radio' name='cadastro-female' value='cadastro-female'><span class='text-descricao-group-principal-cadastro'>Feminino</span> 
                                 <input type='radio' name='cadastro-other' value='cadastro-other'><span class='text-descricao-group-principal-cadastro'>outro</span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                              <span class='text-descricao-group-principal-cadastro'>Data de Nacimento:</span>
                            </td>
                            <td>
                              <input name='cadastro-dataNescimento' type='date' class='dtNasc-calendario-group-principal-cadastro' min='1900-01-01' max='".(date("Y") - 12).'-'.date("m-d")."' />
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                              <span class='text-descricao-group-principal-cadastro'>Estado:</span>
                            </td>
                            <td>
                              <input name='cadastro-Estado' type='texte' class='input-principal-cadastro' value='DF' readonly='true'/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                              <span class='text-descricao-group-principal-cadastro'>Cidade:</span>
                            </td>
                            <td>
                                <select class='section-cidade-group-principal-cadastro'>
                                    
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Ceilândia</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Samambaia</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Taguatinga</option>   
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Plano Piloto</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Planaltina</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Águas Claras</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Recanto das Emas</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Gama</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Guará</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Santa Maria</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Sobradinho II</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>São Sebastião</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Vicente Pires</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Itapoã</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Sobradinho</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Sudoeste/Octogonal</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Brazlândia</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Riacho Fundo II</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Paranoá</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Riacho Fundo</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Estrutural</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Lago Norte</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Cruzeiro</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Lago Sul</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Jardim Botânico</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Núcleo Bandeirante</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Park Way</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Candangolândia</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Varjão</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Fercal</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>SIA</option>
                                
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                              <span class='text-descricao-group-principal-cadastro'>Logradouro:</span>
                            </td>
                            <td>
                              <input name='cadastro-logradouro' type='texte' class='input-principal-cadastro' placeholder='ex: Qnp 18 cj e ' />
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                              <span class='text-descricao-group-principal-cadastro'>Complemento:</span>
                            </td>
                            <td>
                              <input name='cadastro-complemento' type='texte' class='input-principal-cadastro' placeholder='ex: cs 25' />
                            </td>
                        </tr>
                        
                         <tr>
                            <td>
                              <button texte='enviar' type='submit'>Enviar</button>
                            </td>
                        </tr>
                        
                    <table>
                </form>
             </div>
           ";
                
             //   .
             //   "tela 01<br/> <a href='" . CadastroTealas::getPagina() . "?PagAtual=" . (CadastroTealas::verificarQualTela() + 1) . "'>proximo<a/>";
    }

    public static function getTela02(): string {
        
        CadastroTealas::processarGet('primeira-tela');
        
        return "  
               <div class='div-group-principal-cadastro'> 
                <form action='".CadastroTealas::getPagina()."' method='post' class='form-group-principal-cadastro'>
                    <table class='table-group-principal-cadastro'>
                       
                        <input type='hidden' name='PagAtual' value='".(CadastroTealas::verificarQualTela() + 1)."'/>
                        
                        <tr>
                            <td>
                              <button texte='enviar' type='submit'>Enviar</button>
                            </td>
                        </tr>
                        
                    <table>
                </form>
             </div>
        ";
    }

    public static function getTela03(): string {
        
        return "  
               <div class='div-group-principal-cadastro'> 
                <form action='".CadastroTealas::getPagina()."' method='post' class='form-group-principal-cadastro'>
                    <table class='table-group-principal-cadastro'>
                       
                        <input type='hidden' name='PagAtual' value='".(CadastroTealas::verificarQualTela() + 1)."'/>
                        
                        <tr>
                            <td>
                              <button texte='enviar' type='submit'>Enviar</button>
                            </td>
                        </tr>
                        
                    <table>
                </form>
             </div>
        ";
        
    }

}
?>

