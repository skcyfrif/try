<div class="card">
<div class="container">

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>




















<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
$table = array();
$tdata = $items;
foreach($tdata as $obj){
    $table_no = $obj->table_no;
    if(!isset($table[$table_no]))
    {
        $table[$table_no] = array();
    }
    array_push($table[$table_no],$obj);
}

foreach($table as $table_no => $table)
{
    echo "<table class='table border border-dark' style='width:25%'><tbody>";
    echo "<tr><th>Table No : $table_no<input type='hidden' id='tno_$table_no' value=$table_no></th>";
    echo "<tr><th>Nos of items</th><th>Total Amount</th></tr>";
    $nos = 0;
    foreach($table as $obj){
        // echo "<tr><td>{$obj->item_name}</td><td>{$obj->no_item}</td></tr>";
        $nos += $obj->no_item;
    } 
    
    echo "<tr><td>{$nos}</td><td>{$obj->paid_amount}</td></tr>";
    echo "<div>";
    $this->Form->create('', ['url'=> ['controller'=> 'Users', 'action'=> 'tabledetail'],'class' => 'form', 'id' =>'tabledetail', 'type' =>'POST']);
    echo "<input type='hidden' name='table_no' value='$table_no'>";
    echo "<th><button type='submit' name='submit' value='submit' id='DetailTable_$table_no' class='btn btn-success'>Details</button></th></tr>";
    $this->Form->end();
    echo "</div>";
    echo "</tbody></table>";
    
    echo "<table class='otable table' data-table='$table_no' style='display:none'><tbody>";
    echo "<tr><th>Item Name</th><th>Price</th><th>No. of plate</th><th>Total amount</th></tr>";
    foreach ($table as $item) {
    
        echo "<tr class='table-$table_no'>";
        echo "<td>" . $item->item_name . "</td><td>" . $item->price ."</td><td>".$item->no_item. '</td><td>' .$item->total_amount ."</td>";
        echo "</tr>";
    }
    $paid = $obj->paid_amount * 0.1;
    $new = $obj->paid_amount - $paid;
    echo "<tr>";
    echo "<td>Discount : 10%</td><td>Total Amount :".$new."</td>";
    echo "<td><label class='visually-hidden' for='inlineFormSelectPref'>Paid By :</label>";
    echo  "<select class='form-select' name='paid' id='paid'>";
    echo  "<option value='CASH'>CASH</option>";                      
    echo "<option value='CARD'>CARD</option>";           
    echo  "<option value='UPI'>UPI</option>";           
    echo "</select></td>";
    echo "<td><button type='submot' id='fsubmit' class='btn btn-success'>PAY</button></td>";
    echo "</tr>";
    echo "</tbody></table>";
    <i class="fa-light fa-cart-shopping"></i>
?>
</div>
</div>
</div>

<?php

?>
       </tr>
 <!-- <table class="table" data-table ="$table_no" style="display:none">
    <tbody>
        <tr>
            <th>Table Name</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>No. of plate</th>
            <th>Total amount</th>
     -->
<?php
// foreach ($items as $item) {
//     if($item->table_no == $table_no){
//     echo "<tr>";
//     echo "<td>".$item->table_no ."</td><td>" . $item->item_name . "</td><td>" . $item->price ."</td><td>".$item->no_item. '</td><td>' .$item->total_amount . "</td>";
//     echo "</tr>";
//     }
// }
?>
</tbody>
</table>
<h1 color='green'>
</h1>
</div>

<script>
   $(document).ready(function(){
    $('button[id^="DetailTable"]').click(function(){
        var table_no = $(this).attr('id').split('_')[1];
        $('form#tabledetail input[name="table_no"]').val(table_no);
        $('form#tabledetail').submit();
        // console.log(table_no);
        $('.otable').show();
    });
    document.getElementById('DetailTable_{$table_no}').addEventListener('click', function(event) {
    event.preventDefault(); // prevent default button behavior
    var form = document.getElementById('tabledetail'); // get form element
    var tno = document.getElementById('tno_{$table_no}').value; // get table number
    form.querySelector('input[name="table_no"]').value = tno; // set table number in form data
    form.submit(); // submit form
});
        

   });
</script>