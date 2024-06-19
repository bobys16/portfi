
<?php
$isCreated = mysqli_fetch_array(mysqli_query($connect, "SELECT is_created FROM users WHERE id='".$user['id']."'"));
if($isCreated['is_created'] > 0){
    header('location: ');
}
?>
<div class="row">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header fs-24px">
                    Please Insert Your Detail and Domain use by Portfolio.
                </div>
                <form callrouter="true" action="newPorto">
                <div class="card-body">
                     <div class="row">
                       <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="c">Your Complete Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Contoh: Bondan Christopher" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="a">Domain Name (Cannot change Upon Create)</label>
                           <div class="form-group mb-3 input-group flex-nowrap">
                              <input type="text" class="form-control" name="domain" placeholder="Domain Selection ex: bondanganteng (Without any special character)" required>
                              <span class="input-group-text">.portfi.online</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <label class="form-label" for="b">Please Choose your Portfolio Template</label>
                          <div class="form-group mb-4">
                            <?php
                            $template = mysqli_query($connect, "SELECT * FROM template WHERE active=1");
                            
                            while($a = mysqli_fetch_assoc($template)){
                            ?>
                            <div class="form-check">
                              <img src="<?= $a['image'];?>" style="width: 30%; height: 30%;">
                              <input class="form-check-input" type="radio" value="<?= $a['id'];?>" name="template" id="defaultRadio1">
                              <label class="form-check-label" for="defaultRadio1"><?= $a['name'];?></label>
                            </div>
                            <br>
                            <?php }
                            
                            ?>
                          </div>
                        </div>
                    </div>
                   
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-theme">Create My Porto</button>
                </div>
                </form>
                <!-- START card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
           
        </div>
        
        </div>
        
    <script>
    
      
</script>