<div class="comment-form">
    <h4>Leave a Reply</h4>
    <form class="form-contact comment_form" action="includes/create_comment.php" method = "POST" id="commentForm">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input class="form-control" name="email" id="email" type="text" placeholder="Email">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                <input type="hidden" name="article_id" value="<?php echo $article_id ?>" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                <input type="hidden" name="time" type="datetime" />
                </div>
            </div>
            
           
        </div>
        <div class="form-group">
            <button type="submit" class="button button-contactForm">Send Message</button>
        </div>
    </form>
</div>
</div>