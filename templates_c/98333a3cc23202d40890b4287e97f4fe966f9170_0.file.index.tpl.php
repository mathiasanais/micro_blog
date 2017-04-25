<?php
/* Smarty version 3.1.30, created on 2017-04-25 22:34:53
  from "C:\UwAmp\www\micro_blogv2\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ffb2ed9f47f1_16871309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98333a3cc23202d40890b4287e97f4fe966f9170' => 
    array (
      0 => 'C:\\UwAmp\\www\\micro_blogv2\\index.tpl',
      1 => 1493152491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:haut.tpl' => 1,
    'file:bas.tpl' => 1,
  ),
),false)) {
function content_58ffb2ed9f47f1_16871309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!------ Affiche l'input si l'utilisateur est connecté------>
<div class="row">              
  <form method="post" action="message.php">
    <div class="col-sm-10">  
      <div class="form-group">
        <!--Si l'utilisateur est connecté alors il peut modifier ou envoyer des messages -->
        <?php if ($_smarty_tpl->tpl_vars['connect']->value == true) {?>
        <textarea id="message" name="message" class="form-control" placeholder="Message"><?php if (isset($_smarty_tpl->tpl_vars['contenuInput']->value) && $_smarty_tpl->tpl_vars['contenuInput']->value != '') {
echo $_smarty_tpl->tpl_vars['contenuInput']->value;?>

          <?php }?>
        </textarea>
        <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['getID']->value;?>
"></input>

      </div>
    </div>

    <div class="col-sm-2">
      <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
    </div>
    <?php }?>                        
  </form>
</div>
<!------ Affiche l'apercu si l'utilisateur saisie quelque chose------>
<div class="row apercu hidden" id="apercu" >              
  <form>
    <div class="col-sm-10 col-md-6 col-md-offset-2">  
      <div class="form-group">            
       <p id="Msgapercu" name="Msgapercu" class="form-control">
       </p>
       <input type="hidden" id="idapercu" name="idapercu" value="<?php echo $_smarty_tpl->tpl_vars['getID']->value;?>
"></input>     
     </div>
   </div>

 </form>
</div>


<!-------- Affiche les messages ------>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_contenu']->value, 'conte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conte']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'var', null);
echo $_smarty_tpl->tpl_vars['u']->value++;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<blockquote class="col-md-12 col-sm-8">
  <div class="col-md-7 col-sm-6">
    <?php echo $_smarty_tpl->tpl_vars['conte']->value['contenu'];?>


  </div>
  <div class="col-md-2 col-sm-3">
    <?php echo $_smarty_tpl->tpl_vars['conte']->value['date'];?>

  </div>     
  <div class="col-md-1 col-sm-3">
    <?php if ($_smarty_tpl->tpl_vars['connect']->value == true) {?>
    <a class="btn btn-danger " href="sup_message.php?id=<?php echo $_smarty_tpl->tpl_vars['conte']->value['id_message'];?>
" role="button">Supprimer</a>
    <?php }?>
  </div>
  <div class="col-md-1 col-sm-3">
    <?php if ($_smarty_tpl->tpl_vars['connect']->value == true) {?>
    <a class="btn btn-primary" href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['conte']->value['id_message'];?>
" role="button">Modifier</a>
    <?php }?>
  </div>
</blockquote>
<div class="col-md-2 col-sm-6 text-center authorColor">
 Auteur : <?php echo $_smarty_tpl->tpl_vars['conte']->value['pseudo'];?>

 <?php if ($_smarty_tpl->tpl_vars['connect']->value == true) {?>
 <a id="vote" name="vote" class="vote table"></a><?php echo $_smarty_tpl->tpl_vars['conte']->value['votes'];?>

 <?php }?>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




<!------ Pagination ------>
<div class="col-md-offset-4 col-sm-8">
  <nav aria-label="Page navigation">
    <ul class="pagination pagination-lg">
      <?php if (isset($_smarty_tpl->tpl_vars['getPage']->value) && $_smarty_tpl->tpl_vars['getPage']->value != 1) {?>
      <li>
        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['getPage']->value-1;?>
" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php }?>

      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nombrePage']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['nombrePage']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
      <li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a></li>
      <?php }
}
?>


      <?php if (!isset($_smarty_tpl->tpl_vars['getPage']->value) || $_smarty_tpl->tpl_vars['getPage']->value < $_smarty_tpl->tpl_vars['nombrePage']->value) {?>
      <?php if ($_smarty_tpl->tpl_vars['nbMessage']->value > $_smarty_tpl->tpl_vars['mpp']->value) {?>
      <li>
        <a href="index.php?page=<?php if (isset($_smarty_tpl->tpl_vars['getPage']->value) && $_smarty_tpl->tpl_vars['getPage']->value != 1) {
echo $_smarty_tpl->tpl_vars['getPage']->value+1;?>
      
        <?php } else { ?>
        <?php echo 2;?>

        <?php }?>
        " aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php }?>
    <?php }?>
  </ul>
</nav>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
$(function(){
  $('#message').keyup(function(){

   $('#apercu').removeClass("hidden");

   var msg1 = document.getElementById('message').value;
   $.get('apercu_msg.php',
   {
    message:msg1
  },
  function(data){

    document.getElementById("Msgapercu").innerHTML = data;

  }
  );
 });
});

$( document ).ready (function () 
{
  var i = 0;

  $.getJSON({
    type: "GET",
    url: "votes.php",

    success : function (msg) {
      $.each(msg,function(i,data)
      {
          console.log(data.id + ' '+ data.contenu +" " + data.votes);
                });  

    },
     error: function(jqXHR, textStatus, errorThrown) { // if error occured
        console.log("error " + textStatus);
        console.log("incoming Text " + jqXHR.responseText);
      }
  });
});



$(document).on("click","#vote",function(){
  $.ajax({
    type: "GET",
    url: "votes.php",
    data: { 
      action : "update" ,
      id_msg : $(this).data("id"),
      nbVote : $('#nbVote').val()
    },
    dataType: "json",
    success : function(data) {
     console.log('id_msg'+nbVote);
    }
    
  }); });

<?php echo '</script'; ?>
><?php }
}
