<!-- navigation -->
<div class="navigation">
    <div><a href="<?php echo base_url(); ?>">Home</a>
    <a href="<?php echo base_url('livre/add');?>">Ajouter</a>
    
        
        <?php 
    echo validation_errors();
    echo form_open(base_url('livre/Rechercher'));
    echo form_label('', 'Rechercher');
    echo form_input('titre');
    echo form_submit('Valider','Recherche');
    echo form_close();
        ?>
    
    
</div>
</div>

<br/>

<?php

if(count ($livres) > 1)
{
    echo 'Il y a ';
    echo count($livres);
    echo ' livres dans la bibliothèque';   
}

elseif (count ($livres) == 1)
{
    echo 'Il y a ';
    echo count($livres);
    echo ' livre dans la bibliothèque';  
}

else 
{
    echo "Il n'y a aucun livres avec ce nom dans la bibliothèque";         
}

?>


<br/>
<br/>

<?php 
//pagination
        /*$config['base_url']=site_url().'/Livre/index/page';
        $page=$this->uri->segment(4,0);
        $config['total_rows']=$this->livreModel->get_count();
        $config['per_page']=10;
        $config['uri_segment']=4;
        $this->pagination->initialize($config);
        $data['livres']=$this->livreModel->get_all_livres($page,$config['per_page']);
        $links=$this->pagination->create_links();
        $data['links']=$links;
echo $links; */
?>

<table>
    <tr>
        <td>id</td>
        <td>titre</td>
        <td>couverture</td>
        <td>id auteur</td>
        <td>id editeur</td>
        <td>id quizz</td>
        <td>image</td>
        <td>Actions</td>  
    </tr>
    
    <tr>
    <?php 
     foreach ($livres as $l):
    
        if ($l['id']%2 == 1)
            {
               echo ' <tr style="background-color:rgb(0,125,255);"> ';
            }
        else
            {
                echo ' <tr style="background-color:rgb(255,125,0);"> ';
            }
    ?>

            <td> <?php echo $l['id']; ?> </td>
            <td> <?php echo $l['titre']; ?> </td>
            <td> <?php echo $l['couverture']; ?> </td>
            <td> <?php echo $l['idAuteur']; ?> </td> 
            <td> <?php echo $l['idEditeur']; ?> </td>
            <td> <?php echo $l['idQuizz']; ?> </td>         
            <td>
            <img src="<?php echo base_url('img/'.$l['couverture']) ?>" alt="<?php echo $l['titre']; ?>" height="50" width="50"> 
            </td>            
            <td>
                <a href="<?php echo site_url('livre/edit/'.$l['id']); ?>">Edit</a>
                <a href="<?php echo site_url('livre/remove/'.$l['id']); ?>">Delete</a>
            </td>   
    </tr>
    
    
    <?php endforeach; ?>    
    
</table>

<?php
//pagination
echo $links;
?>
        
               

                  