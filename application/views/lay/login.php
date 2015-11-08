<section>

	<body>


      <div class="out-container">
        <div>
          <TABLE WIDTH=1070>
        <TD>
          <img src="<?php echo base_url("assets/img/LogoLAY.jpg");?>" widht="178px" height="180px" VSPACE="30px" HSPACE="0px">
        </td>
        <td width=892 align="center">
                  <div class="bienvenido">
                      <h1>BIENVENIDO A LAY</h1>
          </div>
        </td>
      </TABLE>          
        </div>
     <div class="login-page">
      <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="#login" data-toggle="tab"><i class="fa fa-sign-in"></i>Entrar</a></li>
          <li><a href="#register" data-toggle="tab"><i class="fa fa-pencil"></i>Registrarse</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane fade active in" id="login"> 
          <!-- Login form -->
          <?php echo form_open('login/login_validation');?>
          <?php echo validation_errors();?>
          
            <div class="form-group">
            <label for="email">Email</label>
            <!--<input type="text" class="form-control" id="email" placeholder="Email">-->
            <?php echo form_input('email','',"class='form-control'", $this->input->post('email'));?>
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <?php echo form_password('password','',"class='form-control'");?>
            </div>
            <div class="checkbox">
            <label>
              <input type="checkbox"> Remember Me Next Time
            </label>
            </div>
            <?php echo form_submit('login_submit','Login',"class='btn btn-danger btn-sm'"); ?>
            
            <button type="reset" class="btn btn-black btn-sm">Reset</button>
          </form>       
          </div>





<div class="tab-pane fade" id="register">
          <!-- Register form -->
          
          <?php echo form_open('login/signup_validation');?>
          <?php echo validation_errors();?>
          
            <div class="form-group">
            <label for="name">Nombre Completo</label>
            <?php echo form_input('email','',"class='form-control'",$this->input->post('email'));?>
            </div>
            <div class="form-group">
            <label for="password">Contraseña</label>            
            <?php echo form_password('password','',"class='form-control'");?>
            </div>
            <div class="form-group">
            <label for="cpassword">Confirmar Contraseña</label>            
            <?php echo form_password('cpassword','',"class='form-control'");?>
            </div>
            
            <?php echo form_submit('signup_submit','Registrate',"class='btn btn-danger btn-sm'"); ?>
            <button type="reset" class="btn btn-black btn-sm">Borrar</button>
          </form>
          
          </div>







        </div>        
      </div>
     </div> 

    




      </div>          
    
            
  </body> 
      
	</section>