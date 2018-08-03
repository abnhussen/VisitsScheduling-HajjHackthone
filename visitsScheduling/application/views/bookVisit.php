<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
   <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
   <div>

<form id="rendered-form"><div class="rendered-form"><div class=""><h2 id="control-618352">Book Your Visit</h2></div><div class="fb-text form-group field-fullname"><label for="fullname" class="fb-text-label">Full Name<span class="fb-required">*</span></label><input type="text" class="form-control" name="fullname" id="fullname" required="required" aria-required="true"></div><div class="fb-text form-group field-nationality"><label for="nationality" class="fb-text-label">Nationality<span class="fb-required">*</span></label><input type="text" class="form-control" name="nationality" id="nationality" required="required" aria-required="true"></div><div class="fb-text form-group field-passportid"><label for="passportid" class="fb-text-label">Passport ID<span class="fb-required">*</span></label><input type="text" class="form-control" name="passportid" id="passportid" required="required" aria-required="true"></div><div class="fb-radio-group form-group field-sex"><label for="sex" class="fb-radio-group-label">Sex<span class="fb-required">*</span></label><div class="radio-group"><div class="radio"><input name="sex" id="sex-0" required="required" aria-required="true" value="option-1" type="radio"><label for="sex-0">Female</label></div><div class="radio"><input name="sex" id="sex-1" required="required" aria-required="true" value="option-2" type="radio"><label for="sex-1">Male</label></div></div></div><div class="fb-radio-group form-group field-visitplace"><label for="visitplace" class="fb-radio-group-label">Which Place You Want To Visit<span class="fb-required">*</span></label><div class="radio-group"><div class="radio-inline"><input name="visitplace" id="visitplace-0" required="required" aria-required="true" value="Black_Stone" type="radio" checked="checked"><label for="visitplace-0">Black Stone</label></div><div class="radio-inline"><input name="visitplace" id="visitplace-1" required="required" aria-required="true" value="Holy_Rawdeh" type="radio"><label for="visitplace-1">Holy Rawdeh</label></div></div></div><div class="fb-date form-group field-visitdate"><label for="visitdate" class="fb-date-label">When Do You Want To Visit</label><input type="date" class="form-control" name="visitdate" id="visitdate"></div><div class="fb-text form-group field-visittime"><label for="visittime" class="fb-text-label">What Time Do You Want To Visit<span class="fb-required">*</span></label><input type="text" class="form-control" name="visittime" value="10:25pm" maxlength="10" id="visittime" required="required" aria-required="true"></div><div class="fb-select form-group field-visithour"><label for="visithour" class="fb-select-label">Your visit time (hour)<span class="fb-required">*</span></label><select class="form-control" name="visithour" id="visithour" required="required" aria-required="true"><option value="1" selected="true" id="visithour-0">1AM</option><option value="2" id="visithour-1">2AM</option><option value="3" id="visithour-2">3AM</option><option value="4" id="visithour-3">4AM</option><option value="5" id="visithour-4">5AM</option><option value="6" id="visithour-5">6AM</option><option value="7" id="visithour-6">7AM</option><option value="8" id="visithour-7">8AM</option><option value="9" id="visithour-8">9AM</option><option value="10" id="visithour-9">10AM</option><option value="11" id="visithour-10">11AM</option><option value="12" id="visithour-11">12PM</option><option value="13" id="visithour-12">13PM</option><option value="14" id="visithour-13">14PM</option><option value="15" id="visithour-14">15PM</option><option value="16" id="visithour-15">16PM</option><option value="17" id="visithour-16">17PM</option><option value="18" id="visithour-17">18PM</option><option value="19" id="visithour-18">19PM</option><option value="20" id="visithour-19">20PM</option><option value="21" id="visithour-20">21PM</option><option value="22" id="visithour-21">22PM</option><option value="23" id="visithour-22">23PM</option><option value="24" id="visithour-23">24AM</option></select></div><div class="fb-number form-group field-visitminute"><label for="visitminute" class="fb-number-label">Your visit time (minute)<span class="fb-required">*</span></label><input type="number" class="form-control" name="visitminute" min="00" max="59" id="visitminute" required="required" aria-required="true"></div></div></form>

</div>
   <div style='height:20px;'></div>  
    <div style="padding: 10px">
      <?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
