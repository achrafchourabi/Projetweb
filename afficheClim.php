
<?PHP
               include "../Services/entities/Climatiseur.php";
  $clim=new Climatiseur(1,'shit','fuck','hey','lol','nice');
$listeClim=$clim->afficherClim();
  
                    foreach($listeClim as $row){
                      ?>
                     <td class="hidden-phone"><?PHP echo $row['ID']; ?></td>
                      <td class="hidden-phone"><?PHP echo $row['nom']; ?></td>
                    <td class="center hidden-phone" ><?PHP echo $row['demande']; ?></td>
                      <td class="center hidden-phone" ><?PHP echo $row['lieu']; ?></td>
                    <td class="center hidden-phone"><?PHP echo $row['secteur']; ?></td>
                     <td class="center hidden-phone"><?PHP echo $row['details']; ?></td>
                     <td><input type="checkbox" name=""></td>
                     <td>  <input type="checkbox" class="list-child"  /></td>
                      <td> <input type="checkbox" class="list-child"  /></td>
                       <td> <input type="checkbox" class="list-child" value="" /></td>
                          <?php } ?>