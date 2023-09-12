<!--wilson canuto candidato vaga de Desenvolvedor de Sistemas.-->

<?php

class Data_Request

{

    private $DadosClientes = [
        
        0 => [

            'nome' => 'Bene',
            'cpf' => '225.222.444-77',
            'endereco' => 'Rua da mooca',
            'telefone' => '(11) 94821-1111',
            'e-mail' => 'bene@mtdadosti.com'
        ],

        1 => [

            'nome' => 'Carlos',
            'cpf' => '444.666.999-55',
            'endereco' => 'Rua pedro',
            'telefone' => '(11) 91000-4021',
            'e-mail' => 'carlos@mtdadosti.com'
        ],

        2 => [

            'nome' => 'momica',
            'cpf' => '222.444.333-55',
            'endereco' => 'Rua Limoeiro',
            'telefone' => '(11) 92233-4444',
            'e-mail' => 'monica@mutdadosti.com'
        ],

        3 => [

            'nome' => 'Mateus',
            'cpf' => '555.333.002-03',
            'endereco' => 'Rua Jesus',
            'telefone' => '(11) 92020-1190',
            'e-mail' => 'mateus@mtdadosti.com'
        ],

        4 => [

            'nome' => 'rayssa',
            'cpf' => '333.111.222-99',
            'endereco' => 'Rua natal',
            'telefone' => '(11) 95406-5045',
            'e-mail' => 'rayssa@mtdadosti.com'
        ]
    ];

    private $DadosFornecedores = [

        0 => [

            'nome' => 'João',
            'cpf' => '661.133.199-00',
            'cidade' => 'São Paulo',
            'e-mail' => 'joão@gmail.com'
        ],

        1 => [

            'nome' => 'Alex',
            'cpf' => '444.444.444-00',
            'cidade' => 'Salvador Bahia',
            'e-mail' => 'alex@gmail.com'
        ],

        2 => [

            'nome' => 'Faiana',
            'cpf' => '777.777.777-22',
            'cidade' => 'São Paulo',
            'e-mail' => 'fabiana@gmail.com'
        ],

        3 => [

            'nome' => 'Ronaldo',
            'cpf' => '444.444.444-40',
            'cidade' => 'Minas gerais',
            'e-mail' => 'ronaldo@gmail.com'
        ],

        4 => [

            'nome' => 'Cleide',
            'cpf' => '222.555.555-50',
            'cidade' => 'Rio de janeiro',
            'e-mail' => 'cleide@gmail.com'
        ]
    ];

    private $DadosUsuarios = [

        0 => [

            'nome' => 'Felipe',
            'cpf' => '999.770.999-70',
            'endereco' => 'Rua Ourinhos',
            'telefone' => '(11) 90000-3333',
            'usuario' => 'felipe'
        ],

        1 => [

            'nome' => 'Luiza',
            'cpf' => '090.750.087-38',
            'endereco' => 'Rua das flores',
            'telefone' => '(11) 9166-4900',
            'usuario' => 'luiza'
        ],

        2 => [

            'nome' => 'Marli',
            'cpf' => '203.061.393-31',
            'endereco' => 'Rua tatu',
            'telefone' => '(11) 90110-8080',
            'usuario' => 'marli'
        ],

        3 => [

            'nome' => 'Gustavo',
            'cpf' => '553.635.002-42',
            'endereco' => 'Rua sales',
            'telefone' => '(11) 90044-7701',
            'usuario' => 'gustavo'
        ],

        4 => [

            'nome' => 'Sueli',
            'cpf' => '882.231.375-93',
            'endereco' => 'Rua pele',
            'telefone' => '(11) 98181-1056',
            'usuario' => 'Sueli'
        ]
    ];

    private $TagsMenu = [

        0 => [
            'categoria' => 'Cadastro',
            'opcoes' => ['Cliente', 'Fornecedor', 'Usuário', 'Produtos', 'Perfil de acesso']
        ],

        1 => [

            'categoria' => 'Relatorio',
            'opcoes' => ['Cliente', 'Faturamento', 'Produtos']
        ]
    ];

    /**
     * Function that returns customer data or the number of records.
     * @param string recebe 'c' ou vazio
     * @return array||String
     */

    public function dadosClientes($param = '')

    {

        if ($param === 'c') {
            return count($this->DadosClientes);
        } else {
            return $this->DadosClientes;
        }

    }

    /**
     * Function that returns supplier data or the number of records.
     * @param string recebe 'c' ou vazio
     * @return array||String
     */

    public function dadosFornecedores($param = '')

    {
        if ($param === 'c') {
            return count($this->DadosFornecedores);
        } else {
            return $this->DadosFornecedores;
        }
    }

    /**
     * Function that returns user data or the number of records.
     * @param string recebe 'c' ou vazio
     * @return array||String
     */

    public function dadosUsuarios($param = '')

    {
        if ($param === 'c') {
            return count($this->DadosUsuarios);
        } else {
            return $this->DadosUsuarios;
        }
    }

    /**
     * Function that returns the categories and their menu options or the number of categories.
     * @param string recebe 'c' ou vazio
     * @return array||String
     */

    public function listTagsMenu($param = '')

    {
        if ($param === 'c') {
            return count($this->TagsMenu);
        } else {

            return $this->TagsMenu;
        }
    }

    /**
     * Function that returns the respective data according to the desired type: users, category or customers.
     * @param string recebe 'c' ou vazio
     * @return array||String
     */

    public function returnTable($param = '')

    {
        if ($param === 'usuarios') {
            return $this->DadosUsuarios;
        } else if ($param === 'fornecedores') {
            return $this->DadosFornecedores;
        }
        return $this->DadosClientes;
    }


}

$Data_Request = new Data_Request();
$type = $_GET['type'];

echo json_encode($Data_Request->returnTable($type));

?>