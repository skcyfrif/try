<label for="city"><h4>City</h4></label>

<?= $this->Form->select('city', $cityLists, ['class' => "form-control", 'label' => false, 'empty' => 'Select','value' => @$dataEdit->city, 'style' => 'padding: 0px 0px 0px 11px;']); ?>

<div class="help-block with-errors"></div>