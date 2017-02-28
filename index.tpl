{include file="haut.tpl"}
<!------ Affiche l'input ------>
<div class="row">              
    <form method="post" action="message.php">
        <div class="col-sm-10">  
            <div class="form-group">
                <!--Si l'utilisateur est connecté alors il peut modifier ou envoyer des messages -->
               {if $connect eq true}
               <textarea id="message" name="message" class="form-control" placeholder="Message">{if isset($contenuInput) && $contenuInput ne ''}{$contenuInput}
                {/if}
              </textarea>
               <input type="hidden" id="id" name="id" value="{$getID}"></input>
               
        </div>
    </div>

    <div class="col-sm-2">
        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
    </div>
    {/if}                        
</form>
</div>

<!-------- Affiche les messages ------>
{foreach from=$list_contenu item=conte}
<blockquote class="col-md-12 col-sm-8">
  <div class="col-md-7 col-sm-6">
    {$conte.contenu}
  </div>
  <div class="col-md-2 col-sm-3">
    {$conte.date}
  </div>     
  <div class="col-md-1 col-sm-3">
  {if $connect eq true}
    <a class="btn btn-danger " href="sup_message.php?id={$conte.id_message}" role="button">Supprimer</a>
  {/if}
  </div>
  <div class="col-md-1 col-sm-3">
  {if $connect eq true}
     <a class="btn btn-primary" href="index.php?id={$conte.id_message}" role="button">Modifier</a>
   {/if}
  </div>
</blockquote>
  <div class="col-md-2 col-sm-6 text-center" style="color: #18BC9C;">
         Auteur : {$conte.pseudo}
  </div>
{/foreach}


<!------ Pagination ------>
<div class="col-md-offset-4 col-sm-8">
    <nav aria-label="Page navigation">
      <ul class="pagination pagination-lg">
      {if isset ($getPage) && $getPage != 1}
        <li>
            <a href="index.php?page={$getPage - 1}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
      {/if}

      {for $i=0 to $nombrePage-1}
        <li><a href="index.php?page={$i+1}">{$i+1}</a></li>
      {/for}

      {if !isset ($getPage) || $getPage<$nombrePage}
      {if $nbMessage>$mpp}
        <li>
            <a href="index.php?page={if isset ($getPage) && $getPage !=1}{$getPage+1}      
            {else}
            {2}
           {/if}
            " aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
        {/if}
        {/if}
    </ul>
</nav>
</div>
{include file="bas.tpl"}