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
    <form method="post">
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
    </form>
</div>


<?php get_footer(); ?>