@extends('layouts.productdetail_head')
@section('title', $products->title)


 <div class="actionBox">

        <ul class="commentList">
                @foreach($post->comments as $comment)

            <li>
  	        <div class="commenterImage">

                  <img src="http://placekitten.com/50/50" />
                </div>

                <div class="commentText">
          	    <p class="">{{$comment->text}}</p> <span class="date sub-text">on March 5th, 2014</span>

                </div>
            </li>

            @endforeach
          
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
        $.post('/comment', {
            postId: {{$post->id}},
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