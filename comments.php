 <!--comments starts-->
 <div class="comments">
 <?php if(have_comments()) { 
           ?>
      
            <?php
             wp_list_comments( array(
                'max_depth'   => 5,
                'callback' => 'custom_comments',
                'per_page' => 20
            )); 
           
            ?>
          
          
       <?php } ?>
       <div class="post-cm" id="cm-sec">
                <div class="pc-header">
                    <hr>
                    <p>درج دیدگاه</p>
                </div>
                <div class="pc-forms">
                   
                        <?php
    comment_form([
        
        'title_reply'  => ' <div class="stars">
        <p>ثبت امتیاز به این مقاله</p>
        <div id="wrapper">
<form action="" method="post">
<p class="clasificacion">
<input id="radio1" type="radio" name="estrellas" value="5"/>
<label for="radio1">&#9733;</label>
<input id="radio2" type="radio" name="estrellas" value="4"/>
<label for="radio2">&#9733;</label>
<input id="radio3" type="radio" name="estrellas" value="3"/>
<label for="radio3">&#9733;</label>
<input id="radio4" type="radio" name="estrellas" value="2"/>
<label for="radio4">&#9733;</label>
<input id="radio5" type="radio" name="estrellas" value="1"/>
<label for="radio5">&#9733;</label>
</p>

</form>
</div>
<div>


</div>
        </div>',
        'fields' => [
            'author' => '<input type="text" placeholder="نام و نام‌خانوادگی" name="author" id="inp1"> ',
            'number' => ' <input type="text" placeholder="شماره همراه" name="number" id="inp2">',
            'email' => ' <input type="text" placeholder="ایمیل"  name="email" id="inp2">    ',
            
        ],
        'comment_field'  => ' <input type="textarea" placeholder="نظر شما" name="comment" form="commentform">',
        'label_submit'  => __('ثبت دیدگاه', 'pipeup'),
    ]);

?>  
                        
                       
                        
                        
                </div>
            </div>
        </div>
        <!--comments ends-->