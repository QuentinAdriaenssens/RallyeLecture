<?php echo validation_errors(); ?>
<?php echo form_open('Account/AccountCreate'); ?>

<label for="Nom"> Nom </label>
<input type="text" name="Nom" value=" <?php echo $this->input->post('nom'); ?>" id= "Nom"/> <br/> 

<label for="Prenom"> Prenom  </label>
<input type="text" name="Prenom" value=" <?php echo $this->input->post('Prenom'); ?>" id= "Prenom"/> <br/> 

<label for="Email"> Email </label>
<input type="text" name="Email" value=" <?php echo $this->input->post('Email'); ?>" id= "Email"/> <br/> 


<label for="MDP"> Mot de Passe  </label>
<input type="text" name="MDP" value=" <?php echo $this->input->post('MDP'); ?>" id= "MDP"/> <br/> 

<label for="C_MDP"> Confirmez le mot de passe  </label>
<input type="text" name="C_MDP" value=" <?php echo $this->input->post('C_MDP'); ?>" id= "C_MDP"/> <br/> 


<button type="submit">Créez votre compte</button>

