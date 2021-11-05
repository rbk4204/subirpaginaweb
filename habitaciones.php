<?php include("header.php");?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Habitaciones</h1>
			</div>

			<div class="articulo">

				<article>
                    
        <form action="/action_page.php" method="get">
            <label for="fname">Nombre:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Numero de habitacion:</label>
            <input type="text" id="lname" name="lname"><br>
            <label for="fname">Dias de recervacion:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <input type="submit" value="Enviar"><br>
         </form>
					
				</article>
			</div>

            <?php include("sidebar.php");?>
		</div>
	</section>
    <?php include("footer.php");?>
</body>
</html>