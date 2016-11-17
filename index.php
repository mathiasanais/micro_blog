<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');

 if(isset ($_GET['id']) && !empty($_GET['id']))
    {
        $query = 'SELECT contenu FROM messages WHERE id ='.$_GET['id'];
        $stmt = $pdo->query($query);
        while ($data = $stmt->fetch()) 
        {
            $contenu=$data['contenu'];
        }
    }
?>

<div class="row">              
    <form method="post" action="message.php">
        <div class="col-sm-10">  
            <div class="form-group">
                <textarea id="message" name="message" class="form-control" placeholder="Message"><?php if(isset($contenu)&&!empty($contenu)){echo $contenu;}?></textarea>
               <input type="hidden" id="id" name="id" value="<?php 
               if(isset ($_GET['id']) && !empty($_GET['id']))
                {
                    echo $_GET['id'];
                }?>"></input>
            </div>
        </div>

        <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
        </div>                        
    </form>
</div>


<?php

$query = 'SELECT * FROM messages ORDER BY date DESC';
$stmt = $pdo->query($query);

while ($data = $stmt->fetch()) {
	?>

	<blockquote class="col-md-12">
		<div class="col-md-7 col-sm-6">
			<?= $data['contenu'] ?>
        </div>
		<div class="col-md-2 col-sm-3">
			<?= date('d/m/Y H:i:s',$data['date'])?>
		</div>
		<div class="col-md-1 col-sm-2">
			<a class="btn btn-danger " href="sup_message.php?id=<?php echo $data['id'] ;?>" role="button">Supprimer</a>
		</div>
		<div class="col-md-1 col-sm-2">
			<a class="btn btn-primary" href="index.php?id=<?php echo $data['id'] ;?>" role="button">Modifier</a>
		</div>
	</blockquote>

	<?php
}
?>

<?php include('includes/bas.inc.php'); ?>

<!-- UNIX_TIMESTAMP() -> mysql 
    time()->php
    Affichage => date() en php
    MySQL -> ORDER BY date ASC ou DESC -->