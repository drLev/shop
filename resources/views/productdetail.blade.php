
@extends('layouts.productdetail_head')
@section('content')
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl, et semper lectus augue blandit tellus. Quisque id bibendum libero. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p> 
                  <div class="cleaner h50"></div>
                    <h3>Related Products</h3>
                        <div class="product_box">
                        <a href="productdetail.html"><img src="images/product/01.jpg" alt="" /></a>
                        <h3>Ut eu feugiat</h3>
                        <p class="product_price">$ 100</p>
                        <a href="shoppingcart.html" class="addtocart"></a>
                        <a href="productdetail.html" class="detail"></a>
                    </div>            
                    <div class="product_box">
                        <a href="productdetail.html"><img src="images/product/02.jpg" alt="" /></a>
                        <h3>Curabitur et turpis</h3>
                        <p class="product_price">$ 200</p>
                        <a href="shoppingcart.html" class="addtocart"></a>
                        <a href="productdetail.html" class="detail"></a>
                    </div>            
                    <div class="product_box no_margin_right">
                        <a href="productdetail.html"><img src="images/product/03.jpg" alt="" /></a>
                        <h3>Mauris consectetur</h3>
                        <p class="product_price">$ 120</p>
                        <a href="shoppingcart.html" class="addtocart"></a>
                        <a href="productdetail.html" class="detail"></a>
                    </div>     
                </div> 
        
        <hr>
        

        <div class="comments">
            <ul class="list-group">

                @foreach ($product->comments as $comment) 
                <li class="list-group-item">
                    
                        {{$comment->text}}
                    
                </li>
                @endforeach
            </ul>
        </div>
        
        <div class="card">
            <div class="card-block"></div>
        </div>


    <div class="actionBox">

        <form class="form-inline" role="form">
            <div class="form-group">

                <input id="commentText" class="form-control" type="text" placeholder="Your comments" />
            </div>

            <div class="form-group">
                <button class="btn btn-default" id="addComment">Add</button>

            </div>
        </form>
 </div>

<script type="text/javascript">
    $('#addComment').on('click', function() {
        var commentText = $('#commentText').val();
        $('#commentText').val('');
        $.products('/comment', {
            postId: {{$product->id}},
            text: commentText,
            "_token": "{{ csrf_token() }}",
        },
        function(data) {
            console.log(data.text);
            
            $('.commentList').append(
                '<li><div class="commenterImage"><img src="http://placekitten.com/50/50" />' +
                '</div><div class="commentText">' +
                '<p class="">' + data.text + '</p>' +
                '<span class="date sub-text">on March 5th, 2014</span>' +
                '</div></li>'
            )
            
        });
        return false;
    });
</script>

@endsection 