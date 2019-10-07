<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 3; //Input fields increment limitation
        var addButton = $(".add_button"); //Add button selector
        var wrapper = $(".field_wrapper"); //Input field wrapper
        var fieldHTML = \'<div class="field_wrapper form-row"><div class="col-11 mb-3"><input type="text" class="form-control" name="bb_phone[]" value=""/></div><a href="javascript:void(0);" class="remove_button">x</a></div>\'; //New input field html 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on("click", ".remove_button", function(e){
            e.preventDefault();
            $(this).parent("div").remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>
    
    ////////////*
    <div class="form-group field_wrapper">
    <label for="bb_phone"><strong>Контактный телефон</strong>: </label>
    <div class="form-row">
    <div class="col-11">


    <div class="input-group">
<input type="text" class="form-control" name="bb_phone[]" id="bb_phone" placeholder="" value="<?= isset($_SESSION['bb_phone']) ? $_SESSION['bb_phone'] : '' ?>" aria-describedby="bb_phoneHelp">
<div class="input-group-append">
    <div class="input-group-text">
    <input type="checkbox" name="WhatsUp"<?= (isset($_SESSION['WhatsUp']) && $_SESSION['WhatsUp'] === true) ? ' checked' : '' ?>><i class="fab fa-whatsapp mr-1" title="Whatsapp"></i>
    <input type="checkbox" name="Viber"<?= (isset($_SESSION['Viber']) && $_SESSION['Viber'] === true) ? ' checked' : '' ?>><i class="fab fa-viber mr-1" title="Viber"></i>
    <input type="checkbox" name="Telegram"<?= (isset($_SESSION['Telegram']) && $_SESSION['Telegram'] === true) ? ' checked' : '' ?>><i class="fab fa-telegram" title="Telegram"></i>
    </div>
  </div>
</div>

    
    </div>
    <div class="col-1"><a href="javascript:void(0);" class="add_button" title="Add field">+</a></div>
    </div>
    <small id="bb_phoneHelp" class="form-text text-muted">Номер телефона для связи по объявлению. Чтобы добавить дополнительные номера, нажмите ссылку "Добавить", справа</small>
</div>
