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
                    Please Insert Your Social used by Portfolio.
                </div>
                <form callrouter="true" action="editPortoSocial">
                <div class="card-body">
                     <div class="row">
                     <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label" for="facebook">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="<?= isset($porto['porto_social']['facebook']) ? htmlspecialchars($porto['porto_social']['facebook']) : ''; ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label" for="instagram">Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="<?= isset($porto['porto_social']['instagram']) ? htmlspecialchars($porto['porto_social']['instagram']) : ''; ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label" for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" name="linkedin" value="<?= isset($porto['porto_social']['linkedin']) ? htmlspecialchars($porto['porto_social']['linkedin']) : ''; ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label" for="github">GitHub</label>
                            <input type="text" class="form-control" name="github" value="<?= isset($porto['porto_social']['github']) ? htmlspecialchars($porto['porto_social']['github']) : ''; ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label" for="twitter">Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="<?= isset($porto['porto_social']['twitter']) ? htmlspecialchars($porto['porto_social']['twitter']) : ''; ?>" required>
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