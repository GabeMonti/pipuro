
        <section id="editArea">
            <div class="container">
                <form class="form-group" action="area.php" method="post">
                    <input class="from-control" type="text" name="idArea" value="<?php echo $_GET['edit'] ?>" hidden>
                    <input class="from-control" type="text" name="newArea" value="<?php echo $_GET['oldArea'] ?>">
                    <button class="btn btn-primary" type="submit">Editar</button>
                </form>
            </div>
        </section>