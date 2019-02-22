<?php
if($this->session->flashdata('errors')){
    var_dump($this->session->flashdata('errors'));
    echo $this->session->flashdata('errors');
}else if($this->session->flashdata('success')){
    echo $this->session->flashdata('success');
}
?>

<div id="app">
    <?php echo form_open('sell/input'); ?>
    <div class="form-group">
        <label for="productName">product Name</label>
        <input type="text" class="form-control" name="productName" id="productName" aria-describedby="productName" placeholder="Ex: Milk">
    </div>
    <label for="pricePerProduct">Price Per Product</label>
    <div class="input-group mb-3" id="pricePerProduct">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="text" class="form-control" name="pricePerProduct"
               aria-label="Amount (to the nearest dollar)">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity"
               class="form-control-range"
               min="1" max="100"
               @input="updateTotal($event)">
    </div>
    <div class="form-group">
        <label for="totalCost">Total Cost</label>
        <input type="text" class="form-control" name="totalCost" id="totalCost">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo form_close(); ?>
</div>
