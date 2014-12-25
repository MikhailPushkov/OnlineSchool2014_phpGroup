<div id="raspuch">
   

        
         <a href="<?php echo URL::base() ?>teacher" id="" style="
                                                            color: #005580 !important;
                                                            font-size: 25px bold;
                                                            float: right;
                                                        " >Перейти на главную страницу</a>
    </br>
    <div class="table">
            <table class="table table-bordered">
              
                <thead>
                    <tr>
                        <th  rowspan="2" style="width: 10%;" class="back" id="...">ФИО</th>
                        <th   colspan="7" class="back" id="...">Понедельник</th>
                        <th   colspan="7" class="back" id="...">Вторник </th>
                        <th   colspan="7" class="back" id="...">Среда</th>
                        <th   colspan="7" class="back" id="...">Четверг</th>
                        <th   colspan="7" class="back" id="...">Пятница</th>
                        <th   colspan="7" class="back" id="...">Суббота</th>
                    </tr>
                        <tr>
                            <th >1</th>
                            <th >2</th>
                            <th >3</th>
                            <th >4</th>
                            <th >5</th>
                            <th >6</th>
                            <th >7</th>
                            <th >1</th>
                            <th >2</th>
                            <th >3</th>
                            <th >4</th>
                            <th >5</th>
                            <th >6</th>
                            <th >7</th>
                            <th >1</th>
                            <th >2</th>
                            <th >3</th>
                            <th >4</th>
                            <th >5</th>
                            <th >6</th>
                            <th >7</th>
                             <th >1</th>
                            <th >2</th>
                            <th >3</th>
                            <th >4</th>
                            <th >5</th>
                            <th >6</th>
                            <th >7</th>
                             <th >1</th>
                            <th >2</th>
                            <th >3</th>
                            <th >4</th>
                            <th >5</th>
                            <th >6</th>
                            <th >7</th>
                             <th >1</th>
                            <th >2</th>
                            <th >3</th>
                            <th >4</th>
                            <th >5</th>
                            <th >6</th>
                            <th >7</th>
                            
                        </tr>

                </thead>
    
    
                  
                <tbody>
                     <?php foreach ($data as $item): ?>
                        <tr>
                            <td><?php echo $item['f'].' '.$item['i'].' '.$item['o'];?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td>
                            <td><?php echo $item['n']; ?></td> 
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
</div>