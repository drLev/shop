    <div id="templatemo_main">
    	
        @include('layouts.sidebar') <!--- отвечает за боковое меню --->
        @if (!(empty($products)))   
        @foreach ($products as $product)   
        <div id="content" class="float_r">
            <h2> {{$product->id}} {{$product->title}} </h2>
                    <div class="content_half float_l">
                        <a  rel="lightbox[portfolio]" href="images/product/10_l.jpg"><img src="images/product/10.jpg" alt="image" /></a>
                    </div>
                    <div class="content_half float_r">
                        <table>
                            <tr>
                                <td width="160">Price:</td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td>Availability:</td>
                                <td>In Stock</td>
                            </tr>
                            <tr>
                                <td>Model:</td>
                                <td>Product 14</td>
                            </tr>
                            <tr>
                                <td>Manufacturer:</td>
                                <td>Apple</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td><input type="text" value="1" style="width: 20px; text-align: right" /></td>
                            </tr>
                        </table>
                        <div class="cleaner h20"></div>
                        <a href="shoppingcart.html" class="addtocart"></a>
                                </div>
                    <div class="cleaner h30"></div>
                    <h5>Product Description</h5>
                    <p> {{$product->text}} <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p> 
                  <div class="cleaner h50"></div>
                    <h3>Related Products</h3>
                                   
                    <div class="product_box">
                        <a href="productdetail.html"><img src="images/product/02.jpg" alt="" /></a>
                        <h3>Curabitur et turpis</h3>
                        <p class="product_price">$ 200</p>
                        <a href="shoppingcart.html" class="addtocart"></a>
                        <a href="productdetail.html" class="detail"></a>
                    </div>            
                     
                
        </div>
        @endforeach
        @endif
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
