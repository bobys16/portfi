<div class="row">
        		<div class="col-12">
        		<div class="card">
        			<div class="card-header d-flex flex-row justify-content-between py-15px">
        				<div class="d-flex flex-column">
        					<div class="fw-bold fs-16px">Service List</div>
        					<p class="text-theme">* You can only view your service only. add, delete and edit will be implement on the next update. ( Dummy Data )</p>
        				</div>
        				<a href="#" data-toggle="card-expand"
        					class="text-white text-opacity-50 text-decoration-none"><i
        						class="bi bi-fullscreen"></i></a>
        			</div>
        			<div class="card-body">
        				<table id="datatableDefault" class="table table-bordered text-nowrap w-100">
        					<thead class="table-dark">
        						<tr>
        							<th class="text-center">Service ID</th>
        							<th class="text-center">Service Name</th>
        							<th class="text-center">Action</th>
        						
        						</tr>
        					</thead>
        					<tbody>
        					    <?php 
                                    $work = json_decode($porto['porto_detail']['service'], true);

                                    foreach ($work as $index => $job) {
                                ?>
        						<tr>
        							<td>#<?=  $job['id'];?></td>
        							<td class="text-center">
        								<span class="badge bg-theme"><?=  $job['service_name'];?></span>
        							</td>
        							<td class="text-center">
        								<a href="javascript:void(0);" onclick="alert('will be available soon');" class="btn btn-theme">Delete</a>
                                     <button id="viewcr" style="display:none;" view="true" path="character_view"></button>
                                    </td>
        							
        							
        						</tr>

                                <?php } ?>
        					</tbody>
        				</table>
        			</div>
        			<!-- BEGIN card-arrow -->
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
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
                bind_view();
            $("#viewcr").click();
        }
        $('#datatableDefault').DataTable({
            // dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
            lengthMenu: [10, 20, 30, 40, 50],
            responsive: true
        });
        $('#datatableDefault1').DataTable({
            // dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
            lengthMenu: [10, 20, 30, 40, 50],
            responsive: true
        });
    </script>