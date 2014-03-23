   <div class="right_content">            
        
    <h2>Tabela de Consultas</h2> 
                    
                    
<table id="rounded-corner" class="full" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
            
            <th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Exame</th>
            <th scope="col" class="rounded">Data Solicitação</th>
            <th scope="col" class="rounded">Período p/ efetuar Exame</th>
            <th scope="col" class="rounded">Fornecedor</th>
            <th scope="col" class="rounded">Status</th>
            <th scope="col" class="rounded-q4"></th>
        </tr>
    </thead>
<!--        <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
[] => EXAME DE SANGUE
            [] => 2013-02-15
            [] => 2013-02-15
            [] => 2013-02-18
            [cnpj] => 11.111.111/0001-11
            [] => Clinica Teste
            [] => 1
    </tfoot>-->
    <tbody>
        
        <?php foreach($consultas as $consulta): 
            $status = $consulta->status; 
            switch ($status){
                case 1:
                    $style = 'agendado';
                    $color ="blue";
                    $info = "Agendado"; 
                    break;
                case 2:
                    $style = 'efetuado';
                    $color ="green";
                    $info = "Efetuado";
                    break;
                case 3:
                    $style = 'cancelado';
                    $color ="red";
                    $info = "Cancelado";
                    break;
                default:
                    $style = 'agendado';
                    $color ="blue";
                    $info = "Agendado";
            }
        
?>
        <tr class="<?php echo $style; ?>">
            <td><input type="checkbox" name="id[]" value="<?php echo $consulta->id?>"/></td>
            <td><?php echo $consulta->descricao; ?></td>
            <td><?php echo $consulta->dtsolicitacao; ?></td>
            <td><?php echo $consulta->dtinicio." - ".$consulta->dtfim; ?></td>
            <td><?php echo $consulta->razaosocial; ?></td>
            <td><?php echo $info; ?></td>
            <td><?php //echo $color; ?></td>

<!--            <td><a href="#"><img src="<?php echo base_url(); ?>public/images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="<?php echo base_url(); ?>public/images/trash.png" alt="" title="" border="0" /></a></td>-->
        </tr>
        <?php endforeach; ?>
    	   
        
    </tbody>
</table>

    <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Efetuado</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>Agendado</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Cancelado</strong><span class="bt_red_r"></span></a> 
     
     
        <div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div> 
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->