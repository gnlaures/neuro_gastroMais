<section class="s-schedule" id="agendamento">
    <div class="u-container">
        <div class="s-schedule__call">
            <h2>Agende uma<br>consulta</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget diam diam.</p>
            <?php $cMedicalInsurances = array('modifiers' => '');
            include('assets/parts/c-medicalInsurances.php'); ?>
        </div>
        <div class="s-schedule__content">
            <?php $cScheduleForm = array('modifiers' => '');
            include('assets/parts/c-scheduleForm.php'); ?>
        </div>
    </div>
</section>