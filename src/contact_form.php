<?php
/**
 * Template Name: Kontaktformulär
 *
 * Template file for handling form submissions.
 *
 * @package {{ template.name }}
 * @version {{ templateVersion }}
 */

if (isset($_POST["submit"])) {
    echo "submitted.";
}

?>

<?php get_header(); ?>

<div class="container mt-5">
    <!-- <form method="post">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <input type="text" name="firstname" class="form-control" placeholder="Förnamn">
                </div>
                <div class="col">
                    <input type="text" name="lastname" class="form-control" placeholder="Efternamn">
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="E-postadress"
                aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Vi använder endast din e-postadress för att svara på ditt
                meddelande.</small>
        </div>
        <div class="form-group">
            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="Meddelande"></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" name="submit" class="btn btn-primary">Skicka</button>
        </div>
	</form> -->

    <form id="mathForm">
        <div class="form-group">
            <div class="form-row">
                <div class="col-2">
                    <input type="number" id="numberLeft" class="form-control" placeholder="Tal">
                </div>
                <div class="form-group col-md-2 mb-0">
                    <select id="numberOperation" class="form-control" aria-placeholder="Operation">
                        <option selected>Välj operation...</option>
                        <option value="addera">+</option>
                        <option value="subtrahera">-</option>
                        <option value="multiplicera">×</option>
                        <option value="dividera">÷</option>
                    </select>
                </div>
                <div class="col-2">
                    <input type="number" id="numberRight" class="form-control" placeholder="Tal">
                </div>
                <div class="d-flex align-items-center justify-content-center col-2">
                    <p class="font-size-larger text-muted mb-0">=</p>
                </div>
                <div class="d-flex align-items-center justify-content-end col-4">
                    <p id="mathResult" class="font-size-larger font-weight-medium text-muted mb-0"></p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" id="numbersCalculate" class="btn btn-primary">Räkna</button>
        </div>
    </form>
</div>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/standalone/contact_form.js">
</script>



<?php get_footer(); ?>
