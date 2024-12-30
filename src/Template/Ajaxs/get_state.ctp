<label for="phone"><h4>State</h4></label>

<?= $this->Form->select('state', $stateLists, ['class' => "form-control", 'label' => false, 'empty' => 'Select', 'onchange' => 'getCityDetails(this.value)', 'style' => 'padding: 0px 0px 0px 11px;']); ?>

<div class="help-block with-errors"></div>