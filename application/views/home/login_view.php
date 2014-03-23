

    <div class="header_login">
        <div class="logo">
            <!--<a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>public/images/logo.gif" alt="" title="" border="0" /></a>-->
            <h2>Sistema de Gestão de Saúde</h2>
        </div>
    </div>

     
         <div class="login_form">
         
         <h3>Painel de Administração</h3>
         
         <a href="#" class="forgot_pass">Esqueci a senha</a> 
         
         <form action="<?php echo base_url();?>home/login" method="post" class="niceform">
         
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
                
         </form>
         </div>  
          
	
    
<!--    <div class="footer_login">
    
    	<div class="left_footer_login">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div>
    	<div class="right_footer_login"><a href="http://indeziner.com"><img src="<?php echo base_url(); ?>public/images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		-->