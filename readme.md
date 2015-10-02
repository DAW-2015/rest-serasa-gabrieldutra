#Propriedades do Sistema
##Clientes
1. `GET /clientes`
	* Descrição: Visualizar clientes;
	* Retorna: 
		
	```
	[
  		{
    		"id": "1",
    		"cpf": "12345678910",
   	 		"nome": "Teste da Silva",
    		"cidades_id": "1"
  		},
  		{
    		"id": "2",
    		"cpf": "22345678910",
    		"nome": "Teste da Silva2",
    		"cidades_id": "1"
  		}
  		
	]
	```		
2. `GET /clientes/:cpf`
	* Descrição: Visualizar cliente com determinado cpf;
	* Parâmetro `:cpf`: CPF do cliente a ser localizado;
	* Retorna: 
	
	```
	{
  	"id": "1",
  	"cpf": "12345678910",
  	"nome": "Teste da Silva",
  	"cidades_id": "1",
  	"cidade": {
    	"id": "1",
    	"nome": "Belo Horizonte",
    	"estados_id": "1"
  	  }
	} 
	```
3. `POST /clientes`
	* Descrição: Insere um novo cliente;
	* Exemplo de corpo: 
	
	```
	{
  	"id": "0",
  	"cpf": "12345678910",
  	"nome": "Teste da Silva",
  	"cidades_id": "1"
	} 
	```
	* Retorno: JSON do cliente inserido;
4. `PUT /clientes/:id`
	* Descrição: Altera um cliente;
	* Parâmetro `:id`: Id do cliente a ser alterado;
	* Exemplo de corpo: 
	
	```
	{
  	"id": "0",
  	"cpf": "12345678910",
  	"nome": "Teste da Silva",
  	"cidades_id": "1"
	} 
	```
	* Retorno: JSON do cliente;			
5. `DELETE /clientes/:id`
	* Descrição: Deleta um cliente;
	* Parâmetro `:id`: Id do cliente a ser deletado;
	* Retorno: 
	
	```
	{
	"message": "Cliente excluído" 
	}
	```

##Estados
1. `GET /estados`
	* Descrição: Visualizar estados;
	* Retorna: 
		
	```
	[
  		{
    	"id": "1",
    	"nome": "Minas Gerais"
  		},
  		{
    	"id": "3",
    	"nome": "Rio de Janeiro"
  		},
  		{
    	"id": "4",
    	"nome": "São Paulo"
  		}	
	]
	```		
2. `GET /estados/:id`
	* Descrição: Visualizar estado com determinado id;
	* Parâmetro `:id`: Id do estado a ser localizado;
	* Retorna: 
	
	```
	{
    "id": "3",
    "nome": "Rio de Janeiro"
  	} 
	```
3. `POST /estados`
	* Descrição: Insere um novo estado;
	* Exemplo de corpo: 
	
	```
	{
	"id": "0",
	"nome": "Rio de Janeiro"
	}
	```
	* Retorno: 
	
	```
	{
  	"message": "Estado adicionado"
	}
	```
4. `PUT /estados/:id`
	* Descrição: Altera um estado;
	* Parâmetro `:id`: Id do estado a ser alterado;
	* Exemplo de corpo: 
	
	```
	{
	"id": "0",
	"nome": "São Paulo"
	} 
	```
	* Retorno: 

	```
	{
  	"message": "Estado alterado"
	}
	```			
5. `DELETE /estados/:id`
	* Descrição: Deleta um estado;
	* Parâmetro `:id`: Id do estado a ser deletado;
	* Retorno: 
	
	```
	{
	"message": "Estado excluído" 
	}
	```
	
##Cidades
1. `GET /cidades`
	* Descrição: Visualizar cidades;
	* Retorna: 
		
	```
	[
  		{
    	"id": "1",
    	"nome": "Belo Horizonte",
    	"estados_id": "1",
    	"estado": {
      		"id": "1",
      		"nome": "Minas Gerais"
    	  }
  		},
  		{
    	"id": "2",
    	"nome": "Nova Lima",
    	"estados_id": "1",
    	"estado": {
      		"id": "1",
      		"nome": "Minas Gerais"
    	  }
  		}
	]
	```		
2. `GET /cidades/:id`
	* Descrição: Visualizar cidade com determinado id;
	* Parâmetro `:id`: Id da cidade a ser localizado;
	* Retorna: 
	
	```
	{
    "id": "1",
    "nome": "Belo Horizonte",
    "estados_id": "1",
    "estado": {
      	"id": "1",
      	"nome": "Minas Gerais"
      }
  	} 
	```
3. `POST /cidades`
	* Descrição: Insere uma nova cidade;
	* Exemplo de corpo: 
	
	```
	{
    "id": "0",
    "nome": "Belo Horizonte",
    "estados_id": "1"
  	}
	```
	* Retorno: 
	
	```
	{
  	"message": "Cidade adicionada"
	}
	```
4. `PUT /cidades/:id`
	* Descrição: Altera uma cidade;
	* Parâmetro `:id`: Id da cidade a ser alterada;
	* Exemplo de corpo: 
	
	```
	{
    "id": "0",
    "nome": "Sabará",
    "estados_id": "1"
  	} 
	```
	* Retorno: 

	```
	{
  	"message": "Cidade alterada"
	}
	```			
5. `DELETE /cidades/:id`
	* Descrição: Deleta uma cidade;
	* Parâmetro `:id`: Id da cidade a ser deletada;
	* Retorno: 
	
	```
	{
	"message": "Cidade excluída" 
	}
	```

##Estabelecimentos
1. `GET /estabelecimentos`
	* Descrição: Visualizar estabelecimentos;
	* Retorna: 
		
	```
	[
  		{
    	"id": "1",
    	"nome": "Teste1",
    	"cidades_id": "1",
    	"cidade": {
      		"id": "1",
      		"nome": "Belo Horizonte",
      		"estados_id": "1",
      		"estado": {
        		"id": "1",
        		"nome": "Minas Gerais"
      		}		
    	  }
  		},
  		{
    	"id": "2",
    	"nome": "Teste2",
    	"cidades_id": "2",
    	"cidade": {
      		"id": "2",
      		"nome": "Nova Lima",
      		"estados_id": "1",
      		"estado": {
        		"id": "1",
        		"nome": "Minas Gerais"
      		}
    	  }
  		}
	]
	```		
2. `GET /estabelecimentos/:id`
	* Descrição: Visualizar estabelecimento com determinado id;
	* Parâmetro `:id`: Id do estabelecimento a ser localizado;
	* Retorna: 
	
	```
	{
    "id": "1",
    "nome": "Teste1",
    "cidades_id": "1",
    "cidade": {
      	"id": "1",
      	"nome": "Belo Horizonte",
      	"estados_id": "1",
      	"estado": {
        	"id": "1",
        	"nome": "Minas Gerais"
      	}		
      }
  	}
	```
3. `POST /estabelecimentos`
	* Descrição: Insere um novo estabelecimento;
	* Exemplo de corpo: 
	
	```
	{
    "id": "0",
    "nome": "Novo Estabelecimento",
    "cidades_id": "1",
    "cidade": {
      	"id": "1",
      	"nome": "Belo Horizonte",
      	"estados_id": "1",
      	"estado": {
        	"id": "1",
        	"nome": "Minas Gerais"
      	}		
      }
  	}
	```
	* Retorno: 
	
	```
	{
  	"message": "Estabelecimento adicionado"
	}
	```
4. `PUT /estabelecimentos/:id`
	* Descrição: Altera um estabelecimento;
	* Parâmetro `:id`: Id do estabelecimento a ser alterado;
	* Exemplo de corpo: 
	
	```
	{
    "id": "0",
    "nome": "Novo Nome",
    "cidades_id": "1",
    "cidade": {
      	"id": "1",
      	"nome": "Belo Horizonte",
      	"estados_id": "1",
      	"estado": {
        	"id": "1",
        	"nome": "Minas Gerais"
      	}		
      }
  	}
	```
	* Retorno: 

	```
	{
  	"message": "Estabelecimento alterado"
	}
	```			
5. `DELETE /estabelecimentos/:id`
	* Descrição: Deleta um estabelecimento;
	* Parâmetro `:id`: Id do estabelecimento a ser deletado;
	* Retorno: 
	
	```
	{
	"message": "Estabelecimento excluído" 
	}
	```
	
##Dívidas
1. `GET /dividas`
	* Descrição: Visualizar dividas;
	* Retorna: 
		
	```
	[
  		{
    	"clientes_id": "1",
    	"estabelecimentos_id": "2",
    	"valor": "0.00",
    	"cliente": {
     		"id": "1",
      		"cpf": "12345678910",
      		"nome": "Teste da Silva",
      		"cidades_id": "1",
      		"cidade": {
        		"id": "1",
        		"nome": "Belo Horizonte",
        		"estados_id": "1"
      		}
    	},
    	"estabelecimento": {
      	"id": "2",
      	"nome": "Teste20",
      	"cidades_id": "1",
      	"cidade": {
        	"id": "1",
        	"nome": "Belo Horizonte",
        	"estados_id": "1",
        		"estado": {
          		"id": "1",
          		"nome": "Minas Gerais"
        		}
      	  	}	
    	  }
  		}
  	]
	```		
2. `GET /dividas/:cid/:eid`
	* Descrição: Visualizar dívida com determinado id;
	* Parâmetro `:cid`: Id do cliente;
	* Parâmetro `:eid`: Id do estabelecimento;
	* Retorna: 
	
	```
	{
    "clientes_id": "1",
    "estabelecimentos_id": "2",
    "valor": "0.00",
    "cliente": {
     	"id": "1",
      	"cpf": "12345678910",
      	"nome": "Teste da Silva",
      	"cidades_id": "1",
      	"cidade": {
        	"id": "1",
        	"nome": "Belo Horizonte",
        	"estados_id": "1"
      	}
    },
    "estabelecimento": {
     "id": "2",
     "nome": "Teste20",
     "cidades_id": "1",
     "cidade": {
     	"id": "1",
       	"nome": "Belo Horizonte",
        "estados_id": "1",
        "estado": {
          "id": "1",
          "nome": "Minas Gerais"
         }
      }	
     }
  	}
	```
3. `POST /dividas`
	* Descrição: Insere uma nova dívida;
	* Exemplo de corpo: 
	
	```
	{
    "clientes_id": "1",
    "estabelecimentos_id": "2",
    "valor": "20.00"
    }
	```
	* Retorno: 
	
	```
	{
  	"message": "Dívida adicionada"
	}
	```
4. `PUT /dividas/:cid/:eid`
	* Descrição: Altera uma dívida;
	* Parâmetro `:cid`: Id do cliente;
	* Parâmetro `:eid`: Id do estabelecimento;
	* Exemplo de corpo: 
	
	```
	{
    "valor": "25.00"
    }
	```
	* Retorno: 

	```
	{
  	"message": "Dívida alterada"
	}
	```			
5. `DELETE /dividas/:cid/:eid`
	* Descrição: Deleta uma dívida;
	* Parâmetro `:cid`: Id do cliente;
	* Parâmetro `:eid`: Id do estabelecimento;
	* Retorno: 
	
	```
	{
	"message": "Dívida excluída" 
	}
	```