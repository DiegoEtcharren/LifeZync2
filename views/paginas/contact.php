<main>
    <h1 class="contact__heading"><?php echo $title; ?></h1>
    <p class="contact__description">Automatiza tu espacio con LifeZync y sus soluciones</p>
    <form class="form">
        <fieldset class="form__fieldset">
            <legend class="form__legend">Información de Contacto</legend>
            <div class="form__group">
                <label for="name" class="form__label">Nombre</label>
                <input type="text" id="name" name="name" class="form__input" required>
            </div>

            <div class="form__group">
                <label for="phone" class="form__label">Teléfono</label>
                <input type="tel" id="phone" name="phone" class="form__input" required>
            </div>

            <div class="form__group">
                <label for="message" class="form__label">Mensaje</label>
                <textarea id="message" name="message" class="form__input" rows="4" required></textarea>
            </div>
            <input type="submit" class="form__submit" value="Enviar">
        </fieldset>
    </form>
</main>