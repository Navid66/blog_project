<?php
 if(isset($_GET['status'])){
    if($_GET['status']=='editpost'){
        $id = $_GET['id'];
        $postdata=$obj->get_post_info($id);
    }
 }
 if(isset($_POST['update_post'])){
    $msg=$obj->update_post($_POST);
 }
    

?>


<div class="shadow m-5 p-5">
    <?php if(isset($msg)){echo $msg;} ?>
    <form action="" method="POST" class="form">
        <input type="hidden" name="edit_post_id" value="<?php echo $id ?>">
      <div class="form-group">
                 <label class="mb-2" for= "change_title">Change Title</label><br>
              <input value ="<?php echo $postdata['post_title']; ?>" class="form-control" name="change_title" class="py-6" id="change_title" type="text"/>
      </div>

      <div class="form-group">
                 <label class="mb-2" for= "change_content">Change Content</label><br>
              <textarea class="form-control" name="change_content" id="change_content" cols="120" rows="10"><?php echo $postdata['post_content']; ?>
              </textarea>
      </div>
      <input type="submit" value="Update Post" name="update_post"
      class="btn btn-primary">
    </form>

</div>