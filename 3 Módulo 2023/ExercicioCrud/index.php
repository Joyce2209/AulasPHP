<?php 

  include_once 'acao_php/conexao_bd.php';

  //cabeçalho
  include_once 'include/header.php';

  include_once 'include/mensagem.php';
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Funcionários</h3>
      <table class="striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>CPF</th>
          <th>Telefone</th>
          <th>E-mail</th>
        </tr>       
      </  >
      
      <tbody>
        <?php 

          $sql = "SELECT * FROM Funcionarios";

          $resultado = mysqli_query($connection, $sql);

            
          while($dados = mysqli_fetch_array($resultado)){

          ?>        
      
            <tr>
              <td><?php echo $dados['NomeFuncio']; ?></td>
              <td><?php echo $dados['CPFFuncio']; ?></td>
              <td><?php echo $dados['TelefoneFuncio']; ?></td>
              <td><?php echo $dados['EmailFuncio']; ?></td>

              <td><a href="alterar.php?id=<?php echo $dados['codFuncio']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

              <td><a href="#modal<?php echo $dados['codFuncio']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

              <!-- Modal Structure in Materializecss -->
                <div id="modal<?php echo $dados['codFuncio']; ?>" class="modal">
                  <div class="modal-content">
                    <h4>Aviso</h4>
                    <p>Deseja excluir o Funcionário?</p>
                  </div>
                  <div class="modal-footer">
                    

                    <form action="acao_php/excluir_funcionario.php" method="POST">
                      <input type="hidden" name="codFuncio" value="<?php echo $dados['codFuncio']; ?>">

                      <button type="submit" name="btn-excluir" class="btn red">Excluir</button>

                      <a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>

                    </form>
                  </div>
                </div>

            </tr>
            
          <?php }

          ?>
          
      </tbody>

      </table>
      <br>
      <a href="cadastrar.php" class="btn">Adicionar Funcionário</a>
    </div>    
  </div>


<?php 
  
  //rodapé

  include_once 'include/footer.php';


 ?>