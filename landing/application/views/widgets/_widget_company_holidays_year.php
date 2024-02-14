<div class="card card-widget app-widget">
    <div class="card-header"><i class="ti ti-grip-vertical"></i>&nbsp;Upcoming Holidays</div>
    <div class="card-body p-0">
        <div class="list-group">
            <?php foreach ($settings['holidays'] as $holiday) :
                $date_from = date_create_from_format("d-m", $holiday['from_date']);
                $date_to = date_create_from_format("d-m", $holiday['to_date']);
            ?>
                    <div class="list-group-item">
                        <div class="row m-0 justify-content-between">
                            <div class="col">
                                <div class="holiday__occassion">
                                    <strong><?= $holiday['title'] ?></strong>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="holiday__duration">
                                    <strong><?= date_format($date_from, "j M") ?></strong>&nbsp;
                                    <span class="text-muted">(<?= date_format($date_from, "l") ?>)</span>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
            endforeach ?>
        </div>
    </div>
</div>