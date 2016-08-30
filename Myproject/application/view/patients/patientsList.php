                    <?php
                        foreach($patientsList as $patient){  
                    ?>
                            <tr patient-id="<?php echo $patient->__getID(); ?>">
                              <td><?php echo $patient->__getFname(); ?></td>
                              <td><?php echo $patient->__getLname(); ?></td>
                              <td><?php echo $patient->__getBirthDate(); ?></td>
                              <td>31/08/2016</td>
                              <td>5</td>
                            </tr> 
                    <?php
                        }
                    ?>      
<!--
                    <tr patient-id="2">
                      <td>BEN KHADDA</td>
                      <td>Bechir</td>
                      <td>07/07/1958</td>
                      <td>05/09/2016</td>
                      <td>8</td>
                    </tr>
-->