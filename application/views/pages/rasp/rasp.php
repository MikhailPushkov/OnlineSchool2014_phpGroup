
 <div class="container">
 <input type="hidden" name="<?php echo $combo;?>">
     <div id="admin_addus">
     	<form  role="form" method="post" action="<?php echo URL::base(); ?>rasp/addrasp" name="form">
            <table class="table table-bordered table-hover" >
                <tbody id = "mainTb">
                    <tr>
                        <td colspan="13" style="text-align: center;"><h4>Период дейсвия расписания <input type="date" name="time_start" placeholder='с какого числа' style=""> - <input type="date"  name="time_end" placeholder='до какого числа' style=""> </h4> </td>
                    </tr>
                            <tr style="background:rgb(184, 184, 184);">
                                <td colspan="2">Время урока</td>
                                <td colspan="2" style="width: 16%;" >Понедельник</td>
                                <td colspan="2" style=" width: 16%;">Вторник</td>
                                <td colspan="2" style="width: 16%;">Среда</td>
                                <td colspan="2" style="width: 16%;">Четверг</td>
                                <td colspan="2"style="width: 16%;">Пятница</td>
                                <td colspan="2" style="width: 16%;">Суббота</td>
                            </tr>
                               <tr>
                            	<td colspan="2" style=" padding:0 !important;"><div class="center"> 8-00</div><div class="center">-</div>  <div  class="centertop">8-45</div> 

                                </td>
                                 <td colspan="2" class="padding well well-sm">
	                                <div class="fomr">
	        	                          <select class="cbx " onchange="document.getElementById('cbpn11').value=this.value;" style="width:100%;" size=1>
	                                        <?php foreach ($data as $item)
	                                            echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
	                                        ?>
	                                        </select>
	                                        <input name="cbpn11" id="cbpn11" type = "hidden"  value = ""/>
	        	                          <select class="cbx" onchange="document.getElementById('cbpn12').value=this.value;" style="width:100%;"  size=1>
	                                        <?php foreach ($data as $item)
	                                            echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
	                                        ?>
	                                        </select>
	                                        <input name="cbpn12" id="cbpn12" type = "hidden"  value = ""/>
	        	                        <input type="text" name="ponnum" placeholder="номер кабинета" class="txt">
	                                </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbvt11').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt11" id="cbvt11" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbvt12').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt12" id="cbvt12" type = "hidden"  value = ""/>
                                        <input type="text" name="vtornum" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsr11').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr11" id="cbsr11" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsr12').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr12" id="cbsr12" type = "hidden"  value = ""/>
                                        <input type="text" name="srenum" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbcht11').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht11" id="cbcht11" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbcht12').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht12" id="cbcht12" type = "hidden"  value = ""/>
                                        <input type="text" name="chetnum" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpyat11').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat11" id="cbpyat11" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpyat12').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat12" id="cbpyat12" type = "hidden"  value = ""/>
                                        <input type="text" name="pyatnum" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsub11').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub11" id="cbsub11" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsub12').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub12" id="cbsub12" type = "hidden"  value = ""/>
                                        <input type="text" name="subnum" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>

                            </tr>
                             <tr>
                                <td colspan="2" style=" padding:0 !important;"><div class="center"> 9-00</div><div class="center">-</div>  <div  class="centertop">9-45</div> 

                                </td>
                                 <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpn21').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn21" id="cbpn21" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpn22').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn22" id="cbpn22" type = "hidden"  value = ""/>
                                        <input type="text" name="ponnum1" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbvt21').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt21" id="cbvt21" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbvt22').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt22" id="cbvt22" type = "hidden"  value = ""/>
                                        <input type="text" name="vtornum1" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsr21').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr21" id="cbsr21" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsr22').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr22" id="cbsr22" type = "hidden"  value = ""/>
                                        <input type="text" name="srenum1" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbcht21').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht21" id="cbcht21" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbcht22').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht22" id="cbcht22" type = "hidden"  value = ""/>
                                        <input type="text" name="chetnum1" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpyat21').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat21" id="cbpyat21" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpyat22').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat22" id="cbpyat22" type = "hidden"  value = ""/>
                                        <input type="text" name="pyatnum1" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsub21').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub21" id="cbsub21" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsub22').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub22" id="cbsub22" type = "hidden"  value = ""/>
                                        <input type="text" name="subnum1" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>

                            </tr>
                             <tr>
                                <td colspan="2" style=" padding:0 !important;"><div class="center"> 10-00</div><div class="center">-</div>  <div  class="centertop">10-45</div> 

                                </td>
                                 <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpn31').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn31" id="cbpn31" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpn32').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn32" id="cbpn32" type = "hidden"  value = ""/>
                                        <input type="text" name="ponnum2" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                   <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbvt31').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt31" id="cbvt31" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbvt32').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt32" id="cbvt32" type = "hidden"  value = ""/>
                                        <input type="text" name="vtornum2" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsr31').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr31" id="cbsr31" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsr32').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr32" id="cbsr32" type = "hidden"  value = ""/>
                                        <input type="text" name="srenum2" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbcht31').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht31" id="cbcht31" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbcht32').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht32" id="cbcht32" type = "hidden"  value = ""/>
                                        <input type="text" name="chetnum2" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpyat31').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat31" id="cbpyat31" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpyat32').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat32" id="cbpyat32" type = "hidden"  value = ""/>
                                        <input type="text" name="pyatnum2" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsub31').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub31" id="cbsub31" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsub32').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub32" id="cbsub32" type = "hidden"  value = ""/>
                                        <input type="text" name="subnum2" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>

                            </tr>
                             <tr>
                                <td colspan="2" style=" padding:0 !important;"><div class="center"> 11-00</div><div class="center">-</div>  <div  class="centertop">11-45</div> 

                                </td>
                                 <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpn41').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn41" id="cbpn41" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpn42').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn42" id="cbpn42" type = "hidden"  value = ""/>
                                        <input type="text" name="ponnum3" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbvt41').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt41" id="cbvt41" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbvt42').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt42" id="cbvt42" type = "hidden"  value = ""/>
                                        <input type="text" name="vtornum3" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsr41').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr41" id="cbsr41" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsr42').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr42" id="cbsr42" type = "hidden"  value = ""/>
                                        <input type="text" name="srenum3" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbcht41').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';0
                                            ?>
                                            </select>
                                            <input name="cbcht41" id="cbcht41" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbcht42').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht42" id="cbcht42" type = "hidden"  value = ""/>
                                        <input type="text" name="chetnum3" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpyat41').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat41" id="cbpyat41" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpyat42').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat42" id="cbpyat42" type = "hidden"  value = ""/>
                                        <input type="text" name="pyatnum3" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsub41').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub41" id="cbsub41" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsub42').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub42" id="cbsub42" type = "hidden"  value = ""/>
                                        <input type="text" name="subnum3" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                            </tr>            
                             <tr>
                                <td colspan="2" style=" padding:0 !important;"><div class="center"> 12-00</div><div class="center">-</div>  <div  class="centertop">12-45</div> 

                                </td>
                                 <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpn51').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn51" id="cbpn51" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpn52').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn52" id="cbpn52" type = "hidden"  value = ""/>
                                        <input type="text" name="ponnum4" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbvt51').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt51" id="cbvt51" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbvt52').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt52" id="cbvt52" type = "hidden"  value = ""/>
                                        <input type="text" name="vtornum4" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsr51').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr51" id="cbsr51" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsr52').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr52" id="cbsr52" type = "hidden"  value = ""/>
                                        <input type="text" name="srenum4" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbcht51').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht51" id="cbcht51" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbcht52').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht52" id="cbcht52" type = "hidden"  value = ""/>
                                        <input type="text" name="chetnum4" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpyat51').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat51" id="cbpyat51" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpyat52').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat52" id="cbpyat52" type = "hidden"  value = ""/>
                                        <input type="text" name="pyatnum4" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsub51').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub51" id="cbsub51" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsub52').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub52" id="cbsub52" type = "hidden"  value = ""/>
                                        <input type="text" name="subnum4" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                            </tr>            
                             <tr>
                                <td colspan="2" style=" padding:0 !important;"><div class="center"> 13-00</div><div class="center">-</div>  <div  class="centertop">13-45</div> 

                                </td>
                                 <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpn61').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn61" id="cbpn61" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpn62').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn62" id="cbpn62" type = "hidden"  value = ""/>
                                        <input type="text" name="ponnum5" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                 <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbvt61').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt61" id="cbvt61" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbvt62').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt62" id="cbvt62" type = "hidden"  value = ""/>
                                        <input type="text" name="vtornum5" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsr61').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr61" id="cbsr61" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsr62').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr62" id="cbsr62" type = "hidden"  value = ""/>
                                        <input type="text" name="srenum5" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbcht61').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht61" id="cbcht61" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbcht62').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht62" id="cbcht62" type = "hidden"  value = ""/>
                                        <input type="text" name="chetnum5" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpyat61').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat61" id="cbpyat61" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpyat62').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat62" id="cbpyat62" type = "hidden"  value = ""/>
                                        <input type="text" name="pyatnum5" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsub61').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub61" id="cbsub61" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsub62').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub62" id="cbsub62" type = "hidden"  value = ""/>
                                        <input type="text" name="subnum5" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style=" padding:0 !important;"><div class="center"> 14-00</div><div class="center">-</div>  <div  class="centertop">14-45</div> 

                                </td>
                                 <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpn71').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn71" id="cbpn71" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpn72').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpn72" id="cbpn72" type = "hidden"  value = ""/>
                                        <input type="text" name="ponnum6" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbvt71').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt71" id="cbvt71" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbvt72').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbvt72" id="cbvt72" type = "hidden"  value = ""/>
                                        <input type="text" name="vtornum6" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsr71').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr71" id="cbsr71" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsr72').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsr72" id="cbsr72" type = "hidden"  value = ""/>
                                        <input type="text" name="srenum6" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbcht71').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht71" id="cbcht71" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbcht72').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbcht72" id="cbcht72" type = "hidden"  value = ""/>
                                        <input type="text" name="chetnum6" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbpyat71').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat71" id="cbpyat71" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbpyat72').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbpyat72" id="cbpyat72" type = "hidden"  value = ""/>
                                        <input type="text" name="pyatnum6" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                                <td colspan="2" class="padding well well-sm">
                                    <div class="fomr">
                                          <select class="cbx " onchange="document.getElementById('cbsub71').value=this.value;" style="width:100%;" size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['fio'].'">'.$item['fio'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub71" id="cbsub71" type = "hidden"  value = ""/>
                                          <select class="cbx" onchange="document.getElementById('cbsub62').value=this.value;" style="width:100%;"  size=1>
                                            <?php foreach ($data as $item)
                                                echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                                            ?>
                                            </select>
                                            <input name="cbsub62" id="cbsub62" type = "hidden"  value = ""/>
                                        <input type="text" name="subnum6" placeholder="номер кабинета" class="txt">
                                    </div>
                                </td>
                            </tr>

                </tbody>
            </table>
             <div class="center" style="margin-top: 13px">
                 <button type="submit" class="buttonregistr">Создать</button>
                 <input type="button"  onclick="location.href='<?php echo URL::base(); ?>admin'"  name='redirect' class="buttonregistr" value="Отмена">
             </div>
         </form>
     </div>
 </div>