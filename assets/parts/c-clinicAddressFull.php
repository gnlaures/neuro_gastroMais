<div class="c-clinicAddressFull <?php echo $cClinicAddressFull["modifiers"] ?>">
    <div class="c-clinicAddressFull__head">
        <h3>Unidade <strong><?php echo $cClinicAddressFull["city"] ?></strong></h3>
        <p><a href="<?php echo $cClinicAddressFull["phoneLink"] ?>"><?php echo $cClinicAddressFull["phone"] ?></a></p>
        <address>
            <p><?php echo $cClinicAddressFull["address"] ?></p>
        </address>
    </div>
    <div class="c-clinicAddressFull__map">
        <iframe src="<?php echo $cClinicAddressFull["mapSrc"] ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>