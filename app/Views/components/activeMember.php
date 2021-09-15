<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
				<div class="card-header">
                    <h4>Users List</h4>
                  </div>
                  <div class="card-body">
                    <div class="row g-3 align-items-center">
                      <div class="col-md-3">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Search By Name</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search By Name">
                        </div>
                      </div>
					  <div class="col-md-3">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Search By Email</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search By Email">
                        </div>
                      </div>
					  <div class="col-md-3">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Search By Package</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search By Package">
                        </div>
                      </div>
                      <!--<div class="col-auto">
                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                        <select class="form-select" id="inlineFormSelectPref">
                          <option selected="">Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>-->
                      <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th class="text-center">
                            <div class="custom-checkbox custom-checkbox-table custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                class="custom-control-input" id="checkbox-all">
                              <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                            </div>
                          </th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Package</th>
                          <th>Created At</th>
                          <th>Active Date</th>
                          <th>Action</th>
                        </tr>
                        <?php
                        if($users){
                          $n=1;
                          foreach ($users as $row)
                          {?>
                        <tr>
                          <td class="p-0 text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                id="checkbox-1">
                              <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td>
                            <div class="badge badge-success">Platinum</div>
                          </td>
                          <td><?php echo $row['created_at'];?></td>
						              <td><?php echo $row['created_at'];?></td>
                          <td><div class="buttons"><a href="profile/<?php echo $row['user_id'];?>" class="btn btn-icon btn-info" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Details"><i class="fas fa-info-circle"></i></a>
                          
                          <!--<a href="#" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit"><i class="far fa-edit"></i></a><a href="#" class="btn btn-icon btn-danger" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete"><i class="fas fa-times"></i></a>
                              -->
                      </div></td>
                        </tr>
                        <?php $n++;   }}else{
                          ?>

                          <tr><td>No Data Found</td></tr>
                       
                        <?php
                             }
                        ?>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        </section>
        

        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Basic DataTables</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="table-1_length"><label>Show <select name="table-1_length" aria-controls="table-1" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="table-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table-1"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                        <thead>
                          <tr role="row"><th class="text-center sorting_asc" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                              #
                            : activate to sort column descending" style="width: 32.2188px;">
                              #
                            </th><th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Task Name: activate to sort column ascending" style="width: 169.328px;">Task Name</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Progress" style="width: 89.7969px;">Progress</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Members" style="width: 238.594px;">Members</th><th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 106.531px;">Due Date</th><th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 122.438px;">Status</th><th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 82.0938px;">Action</th></tr>
                        </thead>
                        <tbody>
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                        <tr role="row" class="odd">
                            <td class="sorting_1">
                              1
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-green" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">
                              3
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-cyan" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge btn-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">
                              4
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-orange" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">
                              5
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-green" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">
                              7
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-red" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge btn-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">
                              8
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-cyan" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">
                              9
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-orange" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">
                              11
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-green" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge btn-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">
                              12
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-red" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr></tbody>
                      </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 1 to 9 of 9 entries (filtered from 12 total entries)</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table-1_previous"><a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Multi Select</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <div id="table-2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="table-2_length"><label>Show <select name="table-2_length" aria-controls="table-2" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="table-2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table-2"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="table-2" role="grid" aria-describedby="table-2_info">
                        <thead>
                          <tr role="row"><th class="text-center pt-3 sorting_disabled" rowspan="1" colspan="1" aria-label="
                              
                                
                                &amp;nbsp;
                              
                            " style="width: 40.0625px;">
                              <div class="custom-checkbox custom-checkbox-table custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                              </div>
                            </th><th class="sorting_asc" tabindex="0" aria-controls="table-2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Task Name: activate to sort column descending" style="width: 172.281px;">Task Name</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Progress" style="width: 91.2969px;">Progress</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Members" style="width: 242.219px;">Members</th><th class="sorting" tabindex="0" aria-controls="table-2" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 108.594px;">Due Date</th><th class="sorting" tabindex="0" aria-controls="table-2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 124.719px;">Status</th><th class="sorting" tabindex="0" aria-controls="table-2" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 83.8281px;">Action</th></tr>
                        </thead>
                        <tbody>
                          
                          
                          
                          
                        <tr role="row" class="odd">
                            <td class="text-center pt-2">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td class="sorting_1">Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-cyan" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge btn-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="even">
                            <td class="text-center pt-2">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td class="sorting_1">Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-green" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="odd">
                            <td class="text-center pt-2">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td class="sorting_1">Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-orange" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr><tr role="row" class="even">
                            <td class="text-center pt-2">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td class="sorting_1">Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-red" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-3.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                            </td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-info badge-shadow">Todo</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr></tbody>
                      </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table-2_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table-2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table-2_previous"><a href="#" aria-controls="table-2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table-2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table-2_next"><a href="#" aria-controls="table-2" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Table With State Save</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <div id="save-stage_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="save-stage_length"><label>Show <select name="save-stage_length" aria-controls="save-stage" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="save-stage_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="save-stage"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1063px; padding-right: 0px;"><table class="table table-striped table-hover dataTable no-footer" style="width: 1063px; margin-left: 0px;" role="grid"><thead>
                          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 168.562px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 257.281px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 119.719px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 64.8594px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 123.734px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 100.844px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                        </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-striped table-hover dataTable no-footer" id="save-stage" style="width: 100%;" role="grid" aria-describedby="save-stage_info"><thead>
                          <tr role="row" style="height: 0px;"><th class="sorting_asc" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 168.562px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Name</div></th><th class="sorting" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 257.281px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Position: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Position</div></th><th class="sorting" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 119.719px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Office: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Office</div></th><th class="sorting" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 64.8594px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Age: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Age</div></th><th class="sorting" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 123.734px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Start date: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Start date</div></th><th class="sorting" aria-controls="save-stage" rowspan="1" colspan="1" style="width: 100.844px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Salary: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Salary</div></th></tr>
                        </thead>
                        
                        <tbody>
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                        <tr role="row" class="odd">
                            <td class="sorting_1">Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>
                            <td>2011/05/03</td>
                            <td>$163,500</td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>$145,600</td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                          </tr></tbody>
                      </table></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="save-stage_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="save-stage_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="save-stage_previous"><a href="#" aria-controls="save-stage" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="save-stage" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="save-stage" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="save-stage" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="save-stage" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="save-stage" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="save-stage" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="save-stage_next"><a href="#" aria-controls="save-stage" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>        

