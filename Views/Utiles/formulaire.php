<p class="fich"></p>
    <div>
        <form action="" id="inscription">
            <label for="">NOM
                <input type="text" name="name" value="" id="">
            </label>
            <label for="">Slug
                <input type="text" name="slug" value="" id="">
            </label>
            <label for="">Content
                <input type="text" name="content" value="" id="">
            </label>
            <label for="">
                <input type="hidden" name="created_at" id="" value="<?= date('Y/m/d H:i:s')?>">
            </label>
            <label for="">
                <input type="submit" value="Envoyer" name="Submit">
            </label>
        </form>
    </div>
