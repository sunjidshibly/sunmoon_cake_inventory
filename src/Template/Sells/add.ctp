<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sells'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sells form large-10 medium-8 left columns content">
    <?= $this->Form->create($sell) ?>
    <fieldset>
        <legend><?= __('Add Sell') ?></legend>
    
        <?php echo $this->Form->input('sell_code');  ?>

<div class="container-fluid">
        <div class="row">
             <div class="col-md-4">
                  <label><strong>Product Code:</strong></label>
                 <select id='product_code' name="product_code" class="form-control">
                        <option value="">select product code</option>
                        <?php foreach ($products as $product) { ?>
                            <option value="<?php echo $product['product_code'] ?>"><?php echo $product['product_code'] ?></option>
                        <?php } ?>
                    </select>

             </div>
     </div>
    </div>
        
           
            
                    <?php
            echo $this->Form->input('product_name');
            echo $this->Form->input('unit_price');
            echo $this->Form->input('sell_quantity');
            echo $this->Form->input('cost');
            

                    ?>
            
                    <!-- <?php
            //echo $this->Form->input('sell_date', ['empty' => true,'id'=>'datepicker']);
            ?> -->
         
    
    </fieldset>
    <?= $this->Form->button(__('Complete'))?>
    
    <?= $this->Form->button(__('Draft')) ?>
    <?= $this->Form->end() ?>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">
$('#product_code').change(function(){
    var product_code=$(this).val();
      $('#sell-quantity').val('');
      $('#cost').val('');
   
    var url ='<?php echo $this->Url->build(["controller" => "Sells", "action" => "getProduct"]); ?>'+'/'+product_code;
    $.ajax({
        url:url,
        method:'post',
        data:{product_code:product_code},
        success:function(feedback){

        var p_name= feedback.product_name;
        var p_price= feedback.unit_price;

        $('#product-name').val(p_name);
        $('#unit-price').val(p_price);
    }
});
    });





$('#sell-quantity').keyup(function(){

        var unit_price=$('#unit-price').val();
        var quantity=$('#sell-quantity').val();

        if (unit_price=='')
        {
            alert('Please Select Product');
        }

        else
        {
            var cost=0;
            cost = unit_price*quantity;
            $('#cost').val(cost);
        }

        });
    
</script>
