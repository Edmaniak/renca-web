<section class="contact-form">
    <div class="container">
        <h2>Kontaktuje nás</h2>
        <h3>pomocí formuláře</h3>
        <form class="contact-form">
            <div class="form-field">
                <label for="name">Vaše jméno</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-field">
                <label for="telephone">Váš telefon</label>
                <input required type="tel" name="telephone" id="telephone">
            </div>
            <div class="form-field">
                <label for="telephone">Váš e-mail</label>
                <input required type="email" name="email" id="email">
            </div>
            <div class="form-field">
                <label for="message">Vaše zpráva</label>
                <textarea required name="message" id="message"></textarea>
            </div>
            <div class="form-field submit-form" style="text-align: center">
                <button class="gradient submit-button" type="submit">Odeslat zprávu</button>
            </div>
        </form>
    </div>
</section>
<section class="contact-form-send">
    Zpráva byla úspěšně odeslána.
</section>
