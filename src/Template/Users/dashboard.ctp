

<section class="dash-bord-page">
    <div class="container" >
        <div class="row">
            <div class="col-sm-3">
                <?= $this->element('user/user_menu'); ?>
            </div>
            <div class="col-sm-9">
                <div class="profile-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="h4">Recent Membership <a class="btn btn-info float-right" href="<?= HTTP_ROOT; ?>membership-plans">Buy Membership</a></div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>                                   
                                        <th class="text-center" width="10%">Sl. no.</th>
                                        <th class="text-center" width="45%">Payment id</th>
                                        <th class="text-center" width="45%">Payment Date</th>
                                        <th class="text-center" width="45%">Start Date</th>
                                        <th class="text-center" width="45%">Expiry Date</th>
                                    </tr>
                                </thead>
                                <tbody id="list">
                                    <?php
                                    foreach ($all_data as $key => $data) {
                                        ?>
                                        <tr  id="arrayorder_<?php echo $data->id; ?>" class="message_box ui-sortable-handle">
                                            <td valign="middle" width="10%"><?= $key + 1; ?></td>
                                            <td valign="middle" width="60%"><?= $data->pay_key; ?></td>
                                            <td valign="middle" width="20%"><?= date('Y-m-d', strtotime($data->buy_on)); ?></td>
                                            <td valign="middle" width="20%"><?= date('Y-m-d', strtotime($data->start_date)); ?></td>
                                            <td valign="middle" width="20%"><?= date('Y-m-d', strtotime($data->end_date)); ?></td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function () {

        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });


</script>
