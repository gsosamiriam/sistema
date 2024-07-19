
<section class="mx-auto pt-15 sectionLogin">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <object data="<?php echo base_url();?>assets/img/shop.svg" width="100" height="100"> </object>
                <br><br><br>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 box">
                <div class="input-container">
                    <input type="text" required=""/>
                    <label>Nombre</label>		
                </div>
                <br>
                <div class="input-container">
                    <input type="password" required=""/>
                    <label>Contraseña</label>		
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
             <div class="d-grid gap-2 col-2 mx-auto">
                <br><br>
                <button class="btn-morado" type="button">Ingresar</button>
            </div>
        </div>
    </div>
</section>


<?= JSBoot(); ?>

</body>
</html>
