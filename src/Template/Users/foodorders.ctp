
        <?= $this->Form->create('', ['url'=> ['controller'=> 'Users', 'action'=> 'tableorder'],'class' => 'form', 'id' =>'tableorder', 'type' =>'POST']);?>
    <input type="text" id='user' name='user' placeholder='Please enter your name'>
    <button type="submit" id='orders' class="btn btn-success">ORDERS</button>
    <button type="button" id='neworders' class="btn btn-success">ADD NEW ORDERS</button>
    <?= $this->Form->end() ?>

</div>
    
    <div id="norder">
    <div class="input-group w-auto justify-content-around border align-items-center">
        <input type="text" id='datetime' name='datetime'>
        <label class="visually-hidden" for="inlineFormSelectPref">Table Number :</label>
            <select class="form-select" name="fooditam" id="tableno">
            <option value="1">1</option>           
            <option value="2">2</option>           
            <option value="3">3</option>           
            <option value="4">4</option>           
            <option value="5">5</option>           
            <option value="6">6</option>           
            <option value="7">7</option>           
            <option value="8">8</option>           
            <option value="9">9</option>           
            <option value="10">10</option>           
            <option value="11">11</option>           
            <option value="12">12</option>           
            </select>
        <div class="form-floating">
            <label class="visually-hidden" for="inlineFormSelectPref">Food Itam :</label>
            <select class="form-select" name="fooditam" id="fooditem" onchange="getprice(this.value)">
            <?php
            foreach($food as $id => $item){
                echo "<option value='".$item['id']."'id='".$item['name']."'>".$item['name']."</option>";
            }
            ?>
            </select>
            <input type="hidden" id='price'>
        </div>
        <input type="number" step="1" max="10" value="1" id="quantity" name="quantity" class="quantity-field border-2 text-center w-25">
        <button type="button" id='addtable' class="btn btn-success">Add to Table</button>
        
    </div>
    <br><br>
    
    <?= $this->Form->create('', ['url'=> ['controller'=> 'Users', 'action'=> 'foodorders'],'class' => 'form', 'id' =>'tableorder', 'type' =>'POST']);?>
    
    <input type="text" id='tno' name='tno' style="display:none;">

    <input type="hidden" id='tuser' name='inuser'>
   
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">item_id</th>
                <th scope="col">item_Name</th>
                <th scope="col">Booking_date_time</th>
                <th scope="col">price_per_plate</th>
                <th scope="col">no_of items</th>
                <th scope="col">total amount</th>

            </tr>
        </thead>
        <tbody>
            <tr name='tabledata'>
            
            </tr>
        </tbody>
    </table>
    
    <div id='grand' style="display: none;">
        Grand Total:
        <input type="text" id="gtotal" name='gtotal'>
        <button type="submit" class='btn btn-success' name="submit" id="submit">submit</button>
    </div>
    
    <?= $this->Form->end() ?>
    </div>
    <script>
    var dttime = document.getElementById("datetime");
    function updateTime(){
    var today = new Date();
    var dataTime = today.toLocaleString();
    dttime.value = dataTime;
    }
    setInterval(updateTime,1000);
    </script>
    <script>
    let item = 1;
    $(document).ready(function(){
      $('#addtable').click(function(){
        user = $('#user').val();
        id = $('#fooditem').val();
        fitem = $('#fooditem option:selected').attr('id');
        dt = $("#datetime").val();
        qua = $("#quantity").val();
        price = $('#price').val();
        total = qua * price;

        markup = "<tr><td>"+ item +"</td>"+
        "<td><input type='hidden' value='"+id+"'  name='fid[]'> #"+id+"</td>"+
        "<td>"+ fitem +"</td><td name='booking_time'><input type='hidden' value='"+dt+"'  name='time[]'>"+ dt +"</td>"+
        "<td name='price'>"+ price + "</td>"+
        "<td name='no_item'><input type='hidden' value='"+qua+"'  name='quantity[]'>"+qua+"</td><td>"+ total +"</td></tr>";
        tableBody = $('table tbody');
        tableBody.append(markup);
        item++;
        
        $('#tuser').val(user);
       


        $("#tno").show();
        tableno = $('#tableno').val();
        $("#tno").val(tableno);
        $('#grand').show();
        gtotal =Number($('#gtotal').val());
        gtotal += total;
        $('#gtotal').val(gtotal);
      });
      $('#neworders').click(function(){
        $('#norder').show();
    });
      $('#orders').click(function(){
        $('.otable').show();
    });
    });
    document.getElementById("gtotal").defaultValue = 0;

    

    function getprice(id){
        $.ajax({
                url: "<?php echo HTTP_ROOT.'getprice/';?>"+id,
                type: "post",
                data: {'id':id},
                //dataType: 'JSON',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-CSRF-Token',<?= json_encode($this->request->getParam('_csrfToken')); ?>);
                },
                success: function(d) {
                    //alert(d);
                    $('#price').val(d);
                }
            });
    }
</script>
