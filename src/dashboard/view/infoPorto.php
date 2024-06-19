<?php
$isCreated = mysqli_fetch_array(mysqli_query($connect, "SELECT is_created FROM users WHERE id='".$user['id']."'"));
if($isCreated['is_created'] < 1){
    header('location: ');
}
?>
<div class="row">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header fs-24px">
                    You may only modify your name in this section.
                </div>
                <form callrouter="true" action="editbasePorto">
                <div class="card-body">
                     <div class="row">
                       <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="c">Your Current Name</label>
                                <input type="text" class="form-control" name="name" value="<?= $porto['porto']['name'];?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="a">Domain Name (Cannot change Upon Create)</label>
                           <div class="form-group mb-3 input-group flex-nowrap">
                              <input type="text" class="form-control" value="<?= strtok($porto['porto']['domain_name'], '.') ?>" disabled>
                              <span class="input-group-text" >.portfi.online</span>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-theme">Modify My Porto</button>
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