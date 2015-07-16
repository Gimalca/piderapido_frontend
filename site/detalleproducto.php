f	<?php echo include('layouts/header.php');?>

<div class="container main-container headerOffset">
  
  <div class="row transitionfx"> 
    
    <!-- left column -->
    <div class="col-lg-6 col-md-6 col-sm-6"> 
       
       <img src="images/product/detalle/c-grande.jpg">
	   
	    <div class="clear"></div>
		
    </div>
    <!--/ left column end --> 
    
    <!-- right column -->
    <div class="col-lg-6 col-md-6 col-sm-5">
      
        <div class="row">

            <div class="col-md-8">

              <h1 class="product-title">Nombre del Combo</h1>
              <h3 class="product-code">Franquicia: <a href="detallefranquicia.php">Nombre de la franquicia</a></h3>
              <div class="product-price"> <span class="price-sales"> Precio</span> <span class="price-standard"> 95 Bs.</span> </div>
                <div class="details-description">
                  <p>Descripción completa del producto seleccionado. </p>
                                    <div style="clear:both"></div>
                  <h3 class="incaps" style="margin-left: 25px;"><i class="fa fa fa-check-circle-o color-in"></i> Producto disponible</h3>
                  <h3 style="display:none" class="incaps"><i class="fa fa-minus-circle color-out"></i>No disponible</h3>

                </div>
                
            </div>

          <div class="col-md-4 text-center">

              <img src="http://www.placehold.it/150x100">
                  <br><br>
                  <div class="cart-actions" style="margin-left: 25px;">
                    <div class="addto text-center">
                      <button class="button btn-cart cart first" type="button" title="Add to Cart" onclick="productAddToCartForm.submit(this);">Comprar</button>
                    </div>
                  </div>
          </div>
        
        </div>
      
  	  
      <div class="color-details"> <span class="selected-color"><strong>Sucursal</strong></span>
	 
			<ul class="swatches Color">
			 <br>
				<select>
						<option value="strawberries" selected="">Sucursales
						<option value="mango">Las Mercedes
						<option value="bananas">El Cafetal
						<option value="watermelon">El Hatillo
						<option value="grapes">Cabimas
				</select>
			</ul>
		</div>
		
   
      <div class="color-details"> <span class="selected-color"><strong>Opciones Generales</strong></span>
         <div class="row">
			<div class="productFilter productFilterLook2">

        <div class="col-md-4">
          <div class="filterBox">
            <select>
              <option value="strawberries" selected="">Cantidad
              <option value="mango">1
              <option value="bananas">2
              <option value="watermelon">3
              <option value="grapes">4
              <option value="oranges">5
              <option value="pineapple">6
              <option value="peaches">7
              <option value="cherries">8
            </select>
          </div>
        </div>

        <div class="col-md-4">
        <div class="filterBox">
          <select>
            <option value="strawberries" selected="">Tamaño
            <option value="mango">Grande
            <option value="bananas">Pequeño
            <option value="watermelon">Mediano
            
          </select>
        </div>
      </div>
		
    <div class="col-md-4">
		<div class="filterBox">
          <select>
            <option value="strawberries" selected="">Acompañantes
            <option value="mango">Papas
            <option value="bananas">Ensaladas
            <option value="watermelon">Yucas
            
          </select>
        </div>
      </div>

      <div class="col-md-4 text-center">
		
		<div class="filterBox">
          <select>
            <option value="strawberries" selected="">Tipo de Bebidas
            <option value="mango">Papas
            <option value="bananas">Ensaladas
            <option value="watermelon">Yucas
            
          </select>
        </div>
		</div>

    <div class="col-md-4 text-center">
		    <div class="filterBox">
          <select>
            <option value="strawberries" selected="">Bebida
            <option value="mango">Papas
            <option value="bananas">Ensaladas
            <option value="watermelon">Yucas
            
          </select>
        </div>
      </div>
    </div>
		</div>

  </div>
    
     <div class="clear"></div>
	     
        <br><br>

      <div class="product-tab w100 clearfix">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#extra" data-toggle="tab">Ingredientes Extras</a></li>
          <li> <a href="#pextras" data-toggle="tab">Productos Extras</a></li>
          <li> <a href="#promo" data-toggle="tab">Promociones</a></li>
          <li> <a href="#shipping" data-toggle="tab">Entrega</a></li>
        </ul>
        
        <div class="tab-content">
          <div class="tab-pane active text-center" id="extra">
				 <div class="form-group">
                    <div class="col-md-12">
                      <label class="checkbox-inline" for="checkboxes-0">
                        <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
                        Cebolla </label>
                      <label class="checkbox-inline" for="checkboxes-1">
                        <input name="checkboxes" id="checkboxes-1" value="2" type="checkbox">
                        Aceitunas </label>
                      <label class="checkbox-inline" for="checkboxes-2">
                        <input name="checkboxes" id="checkboxes-2" value="3" type="checkbox">
                        Queso Amarillo </label>
                      <label class="checkbox-inline" for="checkboxes-3">
                        <input name="checkboxes" id="checkboxes-3" value="4" type="checkbox">
                        Carne </label>
						<label class="checkbox-inline" for="checkboxes-0">
                        <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
                        Cebolla </label>
                      <label class="checkbox-inline" for="checkboxes-1">
                        <input name="checkboxes" id="checkboxes-1" value="2" type="checkbox">
                        Aceitunas </label>
                      <label class="checkbox-inline" for="checkboxes-2">
                        <input name="checkboxes" id="checkboxes-2" value="3" type="checkbox">
                        Queso Amarillo </label>
                      <label class="checkbox-inline" for="checkboxes-3">
                        <input name="checkboxes" id="checkboxes-3" value="4" type="checkbox">
                        Carne </label>
                    </div>
                  </div>
          </div>

           <div class="tab-pane text-center" id="pextras">
                <div class="form-group">
                    <div class="col-md-12">
                      <label class="checkbox-inline" for="checkboxes-0">
                        <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
                        Papas Fritas </label>
                      <label class="checkbox-inline" for="checkboxes-1">
                        <input name="checkboxes" id="checkboxes-1" value="2" type="checkbox">
                        Helado </label>
                      <label class="checkbox-inline" for="checkboxes-2">
                        <input name="checkboxes" id="checkboxes-2" value="3" type="checkbox">
                        Refresco </label>
                      <label class="checkbox-inline" for="checkboxes-3">
                        <input name="checkboxes" id="checkboxes-3" value="4" type="checkbox">
                        Carne </label>
                    </div>
                  </div>
          </div>

          <div class="tab-pane" id="shipping">
            <br>
				      <p>Explicación breve de lo que conlleva la entrega del producto en la franquicia seleccionada</p>
			       <br>
          </div>

          <div class="tab-pane text-center" id="promo">
            <br>
              <p>Selecciona la promoción deseada</p>
                  <div class="filterBox">
                    <select>
                      <option value="strawberries" selected="">Promoción #1
                      <option value="mango">Promoción #1
                      <option value="bananas">Promoción #1
                      <option value="watermelon">Promoción #1
                      
                    </select>
                  </div>
             <br>
          </div>
		  
        </div>
        
      </div>
	 
   <br><br> 
	  <div style="clear:both"></div>
	 
  </div>

  </div>
  <!--/.row-->
  
  <div class="row recommended">
    <h1> Productos Relacionados </h1>
    <div id="SimilarProductSlider">
      <div class="item">
        <div class="product"> <a class="product-image"> <img src="images/product/combo1.jpg" alt="img"> </a>
          <div class="description">
            <h4><a  href="detalleproducto.php">Combo #1</a></h4>
            
          </div>
        </div>
      </div>
      
      <div class="item">
        <div class="product"> <a class="product-image"> <img src="images/product/combo2.jpg" alt="img"> </a>
          <div class="description">
            <h4><a  href="detalleproducto.php">Combo #2</a></h4>
            
          </div>
        </div>
      </div>
      
      <div class="item">
        <div class="product"> <a class="product-image"> <img src="images/product/combo3.jpg" alt="img"> </a>
          <div class="description">
            <h4><a  href="detalleproducto.php">Combo #3</a></h4>
          </div>
        </div>
      </div>
      
      <div class="item">
        <div class="product"> <a class="product-image"> <img src="images/product/combo4.jpg" alt="img"> </a>
          <div class="description">
            <h4><a  href="detalleproducto.php">Combo #4</a></h4>
          </div>
        </div>
      </div>
    
	
      <div class="item">
        <div class="product"> <a class="product-image"> <img src="images/product/combo5.jpg" alt="img"> </a>
          <div class="description">
            <h4><a  href="detalleproducto.php">Combo #5</a></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div style="clear:both"></div>
</div>
<!-- /main-container -->

<div class="gap"></div>

<?php echo include('layouts/footer.php'); ?>