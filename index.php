<?php
include('includes/connexion.inc.php');

$mpp =4;


require("tpl/smarty.class.php");


$tpl = new Smarty();
$contenuInput='';
$getID=0;
// si l'on recupère l'id du message de l'input ci dessous alors on fait une requête qui permet de recupèrer le contenu 
if(isset ($_GET['id']) && !empty($_GET['id']))
{
    $getID = $_GET['id'];
    $query = 'SELECT contenu FROM messages WHERE messages.id ='.$_GET['id'];
    $stmt = $pdo->query($query);
    
    while ($data = $stmt -> fetch()) 
    {
        $contenuInput = $data['contenu'];
    }

}


if (isset($_GET['page']))
{
    $getPage=$_GET['page'];

    $tpl->assign('getPage',$getPage);
}


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

$list_contenu= array();
$i = 0;
while ($data = $stmt -> fetch()) 
{
   $list_contenu[$i]['date'] = date('d/m/Y H:i:s',$data['date']);
   $list_contenu[$i]['id_message'] = $data['id_message'];
   $list_contenu[$i]['pseudo'] = $data['pseudo'];
   $string = $data['contenu'];
   $pattern = array('/https?:\/\/[\w]+\.[a-z\.]+\/?[\w]+?/',
    '/[a-zA-Z0-9\-\.]+@[a-zA-Z0-9\-\.]+\.[a-z]+/',
    '/\S*#([\w]+\S*)/');
   $replacement = array('<a href="$0" target="_blank">$0</a>',
    '<a href="mailto:$0">$0</a>',
    '<a href="http://localhost:8080/micro_blogv2/index.php?search=$1">$0</a>');

   $list_contenu[$i]['contenu'] = preg_replace($pattern, $replacement, $string);

   
   $i++;
}
    
    
$tpl->assign('list_contenu',$list_contenu);

$tpl->assign(array(
    'contenuInput'=>$contenuInput,
    'getID'=>$getID
    )); 

if(isset ($_GET['search']))
{
    //requete qui permet de recupèrer le nombre de message dans la table messages
    $stmt = $pdo->prepare("SELECT count(messages.id) AS nbMessage FROM messages
                            INNER JOIN utilisateur ON utilisateur.id = messages.user_id 
                            WHERE contenu LIKE '%".$_GET['search']."%'
                            OR pseudo LIKE '%".$_GET['search']."%' ");
}
else
{
    $stmt = $pdo->prepare("SELECT count(id) AS nbMessage FROM messages");
}
$stmt->execute();
while ($data = $stmt -> fetch()) 
{
    $nbMessage = $data['nbMessage'];
}

$tpl->assign('nbMessage',$nbMessage);

$nombrePage = ceil($nbMessage/$mpp);

$tpl->assign('nombrePage',$nombrePage);
$tpl->assign('connect',$connect);

$tpl->assign('mpp',$mpp);


$tpl->display("index.tpl");
?>
