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
                    Please Insert Your Work Experience.
                </div>
                <form callrouter="true" action="editPortofirst">
                <div class="card-body">
                     <div class="row">
                       <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="c">Title</label>
                                <input type="text" class="form-control" name="expertise" value="<?= $porto['porto_detail']['expertise'];?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="c">Company Name</label>
                                <input type="text" class="form-control" name="image" value="<?= $porto['porto_detail']['image'];?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="c">Small Detail</label>
                                <textarea class="form-control" name="small_detail" required rows="3"><?= $porto['porto_detail']['small_detail'];?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="c">Large Detail</label>
                                <textarea class="form-control" name="large_detail" required rows="3"><?= $porto['porto_detail']['large_detail'];?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="c">Year Experience</label>
                                <input type="number" class="form-control" name="xp_year" value="<?= $porto['porto_detail']['xp_year'];?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="c">Number Complate Certification</label>
                                <input type="number" class="form-control" name="certification" value="<?= $porto['porto_detail']['certification'];?>" required>
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