<?php
$entry_order_type ="Select order type from the list and press the submit button";
if(isset($_POST['filter_order_type'])){
   $entry_order_type = $_POST['filter_order_type'];  // Storing Selected Value In Variable
}
?>
<form action="#" method="post">
<div class="form-group">
    <label class="control-label" for="input-order-type"><?php echo $entry_order_type; ?></label>

    <select name="filter_order_type" id="input-order-type" class="form-control">

      <option value=""></option>

      <option value="FB Orders" <?php if($entry_order_type=="FB Orders"){echo "selected";} ?> >FB Orders</option>
      <option value="Direct Orders" <?php if($entry_order_type=="Direct Orders"){echo "selected";} ?> >Direct Orders</option>
      <option value="Khathija's Orders" <?php if($entry_order_type=="Khathija's Orders"){echo "selected";} ?> >Khathija's Orders</option>
      <option value="Ameer's Orders" <?php if($entry_order_type=="Ameer's Orders"){echo "selected";} ?> >Ameer's Orders</option>
      <option value="Saheed's Orders" <?php if($entry_order_type=="Saheed's Orders"){echo "selected";} ?> >Saheed's Orders</option>
      <option value= "Nada's Orders" <?php if($entry_order_type=="Nada's Orders"){echo "selected";} ?> >Nada's Orders</option>
      <option value="Henath's Orders" <?php if($entry_order_type=="Henath's Orders"){echo "selected";} ?> >Henath's Orders</option>
      <option value="Noha's Orders" <?php if($entry_order_type=="Noha's Orders"){echo "selected";} ?> >Noha's Orders</option>
    </select>
    <input type="submit" name="submit" value="Get Selected Values" />

</div>
</form>