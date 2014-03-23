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
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
<!--        <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>-->
    <tbody>
        
        <?php print_r($consultas);// foreach($consultas as $consulta): ?>
    	<tr>
            <td><input type="checkbox" name="" value="<?php // echo $consulta['id']?>"/></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>

            <td><a href="#"><img src="<?php echo base_url(); ?>public/images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="<?php echo base_url(); ?>public/images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>

            <td><a href="#"><img src="<?php echo base_url(); ?>public/images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="<?php echo base_url(); ?>public/images/trash.png" alt="" title="" border="0" /></a></td>
        </tr> 
        
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>

            <td><a href="#"><img src="<?php echo base_url(); ?>public/images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="<?php echo base_url(); ?>public/images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>

            <td><a href="#"><img src="<?php echo base_url(); ?>public/images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="<?php echo base_url(); ?>public/images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>  
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>

            <td><a href="#"><img src="<?php echo base_url(); ?>public/images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="<?php echo base_url(); ?>public/images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Product name</td>
            <td>details</td>
            <td>150$</td>
            <td>12/05/2010</td>

            <td><a href="#"><img src="<?php echo base_url(); ?>public/images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="<?php echo base_url(); ?>public/images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>    
        
    </tbody>
</table>

	<a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a> 
     
     
        <div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div> 
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->