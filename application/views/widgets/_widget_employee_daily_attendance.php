<div class="card card-widget app-widget">
                        <div class="card-header">
                            <div class="row m-0 g-0 justufy-content-between align-items-center">
                                <div class="col-md col-12">
                                    <i class="ti ti-grip-vertical"></i>&nbsp;Attendance
                                </div>
                                <div class="col-md-auto col-12">
                                    <ul class="nav nav-pills gap-1" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">D</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">W</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" class="check-in">
                                <div class="row g-0 m-0 gap-1">
                                    <div class="col-md col-12">
                                        <input type="text" name="" id="" class="form-control" placeholder="Add Notes">
                                    </div>
                                    <div class="col-md-auto col-12">
                                        <button type="submit" class="btn btn-secondary"><i class="ti ti-clock-hour-4 icon icon-left"></i>Check In</button>
                                    </div>
                                </div>
                            </form>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active py-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="time__tracker__brief">
                                        <div class="time__log text-center">
                                            <h2>12:35 Hrs</h2>
                                            <p class="text-muted">
                                                <span><?= date('j M, Y') ?></span> <br>
                                                <span class="text-success">Late by 2:15 Hrs</span>
                                            </p>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-primary" style="width:60%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>