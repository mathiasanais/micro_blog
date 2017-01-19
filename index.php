<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');
$mpp =4;

// si l'on recupère l'id du message de l'input ci dessous alors on fait une requête qui permet de recupèrer le contenu 
if(isset ($_GET['id']) && !empty($_GET['id']))
{
    $query = 'SELECT contenu FROM messages WHERE messages.id ='.$_GET['id'];
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
                <!--Si l'utilisateur est connecté alors il peut modifier ou envoyer des messages -->
               <?php if ($connect == true) { ?> <textarea id="message" name="message" class="form-control" placeholder="Message"><?php if(isset($contenu)&&!empty($contenu)){echo $contenu;}?></textarea>
               <input type="hidden" id="id" name="id" value="<?php 
               if(isset ($_GET['id']) && !empty($_GET['id']))
               {
                echo $_GET['id'];
            }?>"></input>
        </div>
    </div>

    <div class="col-sm-2">
        <button type="submit" class="btn btn-success btn-lg">Envoyer</button><?php } ?>
    </div>                        
</form>
</div>


<?php
// si on recupère une valeur que l'utilisateur a saisi dans la barre de recherche alors on affiche le contenu qu'il correspond
if(isset($_GET['search'])&&!empty($_GET['search']))
{
    $search = htmlspecialchars($_GET['search']);
  

    if (isset($_GET['page']))
    {
        //Requete qui permet de recuperer les messages pour le contenu recherché, et d'afficher 4 messages par page
        $stmt = $pdo->prepare("SELECT contenu,date,messages.id AS id_message ,pseudo FROM messages 
            INNER JOIN utilisateur ON utilisateur.id = messages.user_id 
            WHERE contenu LIKE '%".$_GET['search']."%'
            OR pseudo LIKE '%".$_GET['search']."%'
            ORDER BY date DESC LIMIT ".($_GET['page']*$mpp-$mpp).",".$mpp) ;

    }
    else
    {
     $stmt = $pdo->prepare("SELECT contenu,date,messages.id AS id_message ,pseudo FROM messages 
        INNER JOIN utilisateur ON utilisateur.id = messages.user_id 
        WHERE contenu LIKE '%".$_GET['search']."%'
        OR pseudo LIKE '%".$_GET['search']."%'
        ORDER BY date DESC LIMIT 0,".$mpp) ;
    }
}
//sinon on affiche tout les messages 
else
{
    if (isset($_GET['page']))
    {
        $stmt = $pdo->prepare("SELECT contenu,date,messages.id AS id_message ,pseudo FROM messages 
            INNER JOIN utilisateur ON utilisateur.id = messages.user_id
            ORDER BY date DESC LIMIT ".($_GET['page']*$mpp-$mpp).",".$mpp) ;

    }
    else
    {
     $stmt = $pdo->prepare("SELECT contenu,date,messages.id AS id_message ,pseudo FROM messages 
        INNER JOIN utilisateur ON utilisateur.id = messages.user_id 
        ORDER BY date DESC LIMIT 0,".$mpp) ;
    }
}
    $stmt->execute();

    while ($data = $stmt -> fetch()) 
    {
    	?>

    	<blockquote class="col-md-12 col-sm-8">
    		<div class="col-md-7 col-sm-6">
    			<?= $data['contenu'] ?>
            </div>
            <div class="col-md-2 col-sm-3">
                <?= date('d/m/Y H:i:s',$data['date'])?>
            </div>
            
            <div class="col-md-1 col-sm-3">
               <?php if ($connect == true) { ?><a class="btn btn-danger " href="sup_message.php?id=<?php echo $data['id_message'] ;?>" role="button">Supprimer</a><?php } ?>
           </div>
           <div class="col-md-1 col-sm-3">
               <?php if ($connect == true) { ?><a class="btn btn-primary" href="index.php?id=<?php echo $data['id_message'] ;?>" role="button">Modifier</a><?php } ?>
           </div>
       </blockquote>
       <div class="col-md-2 col-sm-6 text-center" style="color: #18BC9C;">
         Auteur : <?= $data['pseudo']?>
     </div>

     <?php
    }  

//requete qui permet de recupèrer le nombre de message dans la table messages
$stmt = $pdo->prepare("SELECT count(id) AS nbPage FROM messages");
$stmt->execute();
while ($data = $stmt -> fetch()) {
    $nbPage = $data['nbPage'];

}

?>
<div class="col-md-offset-4 col-sm-8">
    <nav aria-label="Page navigation">
      <ul class="pagination pagination-lg">
        
        <?php if(isset($_GET['page'])&&($_GET['page']!=1)) { ?>
        <li>
            <a href="index.php?page=<?php echo $_GET['page']-1;?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
    <?php
} 
$nombrePage = ceil($nbPage/$mpp);
for($i=0;$i<$nombrePage;$i++)
{
    ?>
        <li><a href="index.php?page=<?php echo $i+1;?>"><?php echo $i+1 ?></a></li>
        <?php } ?>
        <li>
            <a href="index.php?page=<?php
                if(isset($_GET['page'])&&($_GET['page']!=1)) 
                {
                    echo $_GET['page']+1;
                }
                else
                {    
                    echo 2;
                }
             ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
</div>
<?php include('includes/bas.inc.php'); ?>
