

    <div class="header_login">
        <div class="logo">
            <!--<a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>public/images/logo.gif" alt="" title="" border="0" /></a>-->
            <h1>Sistema de Gestão de Saúde</h1>
        </div>
        
     
    <h3>Painel de Administração</h3>
         
    <a href="#" class="forgot_pass">Esqueci a senha</a> 
    </div>
    
    <div class="login_form">
        <div class="paciente">
            <div>
                <img src="<?php echo base_url(); ?>public/images/paciente.png" alt="" title="" border="0" />       
                <h4>Paciente</h4>
                <form action="<?php echo site_url('home/login_paciente'); ?>" method="post" class="niceform">
                    <fieldset>
                        <dl>
                            <dt><label for="cpf">CPF:</label></dt>
                            <dd><input type="text" name="cpf" id="login" size="25" onKeyPress="MascaraCPF(this)"/></dd>
                        </dl>
                        <dl class="submit">
                            <input type="submit" name="submit" id="submit" value="Enter" />
                        </dl>
                     </fieldset>   
                </form>
                
            </div>                                                            
        </div>
        
        
        <div class="paciente">
            <div>
                <img src="<?php echo base_url(); ?>public/images/empresa.png" alt="" title="" border="0" width="128px"/>  
                <h4>Empresa</h4>
                <form action="<?php echo site_url('home/login_empresa'); ?>" method="post" class="niceform">
                    <fieldset>
                        <dl>
                            <dt><label for="cnpj">CNPJ:</label></dt>
                            <dd><input type="text" name="cnpj" id="login" size="25" onKeyPress="MascaraCNPJ(this)" /></dd>
                        </dl>
                        <div class='clear'></div>
                        <dl>
                            <dt><label for="senha">Senha:</label></dt>
                            <dd><input type="password" name="senha" id="login" size="25" /></dd>
                        </dl>
                        <dl class="submit">
                            <input type="submit" name="submit" id="submit" value="Enter" />
                        </dl>
                     </fieldset>   
                </form>
                
            </div>                                                            
        </div>
        
         
<!--         <form action="<?php echo base_url();?>home/login" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="login">Login:</label></dt>
                        <dd><input type="text" name="login" id="login" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="senha">Senha:</label></dt>
                        <dd><input type="password" name="senha" id="senha" size="54" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                        <dd>
                        <input type="checkbox" name="persistir" id="" value="" /><label class="check_label">Mantenha-me conectado</label>
                        </dd>
                    </dl>
                    
                     <dl class="submit">
                        <input type="submit" name="submit" id="submit" value="Enter" />
                     </dl>
                    
                </fieldset>
                
         </form>-->
         </div>  
          
	
    
<!--    <div class="footer_login">
    
    	<div class="left_footer_login">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div>
    	<div class="right_footer_login"><a href="http://indeziner.com"><img src="<?php echo base_url(); ?>public/images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		-->