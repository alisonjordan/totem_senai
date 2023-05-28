



                
  <div class="login-page">
        <div class="login-logo">
        <img src="css/img/logototem.png" alt="AdminLTE Logo" height="200" width="200">
        <p>
            <a href="#">Área Restrita</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Faça login para iniciar a sessão</p>

                
                    <?php echo $error; ?>
                

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="usuario" class="form-control" placeholder="Nome de usuário">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">Lembrar-me</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                    </div>


                    

                </form>
            </div>
        </div>
    </div>


  