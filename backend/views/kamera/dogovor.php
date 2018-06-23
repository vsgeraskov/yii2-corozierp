<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 19.06.18
 * Time: 21:55
 */

?>

<table style="width:100%;">
    <tr>
        <td>
            <table style="width:100%; height:120px;">
                <tr>
                    <td style="vertical-align:top;"><img src="../../img/logocorozi.png" alt="Логотип" title="Логотип" height="80px"></td>
                    <td style="padding-left:25px; padding-top:10px; vertical-align:top;">
                        О готовности Ваших изделий <br>вы можете узнать по тел. +7 (342) 217-90-70<br>
                        Наш адрес г.Пермь ул.Буксирная д.4 <br>Режим работы с 9 до 18 выходной: СБ, ВС
                    </td>
                    <td style="text-align: right; vertical-align:top; padding-top:10px;">
                        instagram.com/corozi <img src="../../img/instagramblack.png" alt="instagram.com" width="15px"><br>
                        twitter.com/corozi_perm <img src="../../img/twitterblack.png" alt="twitter.com" width="15px"><br>
                        vk.com/okraska_perm <img src="../../img/vkblack.png" alt="vk.com" width="15px"><br>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="height:50px;">
            <b>АКТ ПРИЕМА ИЗДЕЛИЙ В РАБОТУ №
                <?php
                echo $model->id_kamera." от ";

                $dateinzakaz = new DateTime(); //Дата приема заказа
                $dateinzakaz->setTimestamp($model->date_in);
                $dateinzakaz = $dateinzakaz->format('d.m.y');

                echo $dateinzakaz;

                ?>	</b>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Заказчик:
            <?php
            echo $model->client." удостоверение ". $model->pasport ." тел.".$model->phone;
            ?>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Состав работ:
            <?php
            echo $model->opisanie;
            ?>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Дата производства работ: <b>
                <?php

                /*$dateinzakaz = new DateTime(); //Дата приема заказа
                $dateinzakaz->setTimestamp($model->date_in);
                $dateinzakaz = $dateinzakaz->format('d.m.y');*/

                echo $dateinzakaz;

                ?>
                по
                <?php
                $dateoutzakaz = new DateTime(); //Дата приема заказа
                $dateoutzakaz->setTimestamp($model->date_in);
                $dateoutzakaz = $dateoutzakaz->format('d.m.y');

                echo $dateoutzakaz;
                ?></b>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Стоимость по заявке: <b>
                <?php
                echo $model->price;
                ?>
                руб.</b>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Гарантия на все работы составляет 12 мес.*
        </td>
    </tr>
    <tr>
        <td>
            <table style="width:100%;">
                <tr>
                    <td style="text-align:left; height:50px;">Конструкции в работу принял</td>
                    <td style="text-align:right; height:50px;">Конструкции в работу сдал</td>
                </tr>
                <tr>
                    <td style="text-align:left; height:25px;">____________________ / ____________ /</td>
                    <td style="text-align:right; height:25px;">____________________ / ____________ /</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="font-size:8pt; height:50px;">*Гарантия не распростроняется на механические повреждения<br>
            **Сроки выполнения работ зависят от загруженности производства
        </td>
    </tr>
</table>

<table style="width:100%; border-top:1px dotted #000;">
    <tr>
        <td style="height:50px;">
            <b>ЗАЯВКА НА ПРОИЗВОДСТВО №
                <?php //echo $datacontractuser['id_zakazkamera']." от ".$date1[2]." ".$m." ".$date1[0];?>	</b>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Заказчик: <?php //echo $datacontractuser['client']." удостоверение ".$datacontractuser['pasport']." тел.".$datacontractuser['phone']; ?>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Состав работ: <?php //echo $datacontractuser['opisanie']; ?>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Дата производства работ: <b><?php  //echo $date1[2]." ".$m." ".$date1[0]; ?> по <?php //echo $date2[2]." ".$m1." ".$date2[0];?></b>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Стоимость по заявке: <b><?php //echo $datacontractuser['price']; ?> руб.</b>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Гарантия на все работы составляет 12 мес.*
        </td>
    </tr>
    <tr>
        <td>
            <table style="width:100%;">
                <tr>
                    <td style="text-align:left; height:50px;">Конструкции в работу принял</td>
                    <td style="text-align:right;height:50px;">Конструкции в работу сдал</td>
                </tr>
                <tr>
                    <td style="text-align:left; height:25px;">____________________ / ____________ /</td>
                    <td style="text-align:right; height:25px;">____________________ / ____________ /</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- Разрыв страницы -->
<p class="more"></p>

<table>
    <tr>
        <td style="font-size:8pt;">
            ИП  ГЕРАСЬКОВ   ВАЛЕНТИН   СЕРГЕЕВИЧ <br>
            ИНН 540439724400  ОГРНИП 315547600039872 <br>
            614023, г.Пермь, ул.Буксирная д.4 <br>
            Тел. +7 (342) 217-90-70	<br>
        </td>
    </tr>
    <tr>
        <td style="height:50px;">
            <b>КВИТАНЦИЯ № <?php //echo $datacontractuser['id_zakazkamera']." от ".$date1[2]." ".$m." ".$date1[0];?>	</b><br> на оплату услуг
        </td>
    </tr>
    <tr>
        <td style="height:50px;">
            Заказчик: <?php //echo $datacontractuser['client']." удостоверение ".$datacontractuser['pasport']." тел.".$datacontractuser['phone']; ?>
        </td>
    </tr>
    <tr style="width:100%;">
        <td style="width:100%; text-align:center;">
            <table style="width:100%; border:1px solid #000;">
                <tr>
                    <td style="vertical-allign:middle; text-align:center; border:1px solid #000; height:30px;">ВИД РАБОТ</td>
                    <td style="vertical-allign:middle; text-align:center; border:1px solid #000; height:30px;">СТОИМОСТЬ</td>
                </tr>
                <tr>
                    <td style="vertical-allign:middle; text-align:left; border:1px solid #000; height:30px;"><?php //echo $datacontractuser['opisanie']; ?></td>
                    <td style="vertical-allign:middle; text-align:center; border:1px solid #000; height:30px;"><?php //echo $datacontractuser['price']; ?> руб.</td>
                </tr>
                <tr>
                    <td style="vertical-allign:middle; text-align:right; border:1px solid #000; height:30px; padding-right:10px;"><b>ИТОГО</b></td>
                    <td style="vertical-allign:middle; text-align:center; border:1px solid #000; height:30px;"><?php //echo $datacontractuser['price']; ?> руб.</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            В том числе наличными денежными средствами <?php //echo $datacontractuser['price']; ?> руб.
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Вся работа выполненна с надлежащим качеством и в соответствии с заданием заказчика, притензий по качеству выполнения работ не имеется.
        </td>
    </tr>
    <tr>
        <td style="height:50px;">
            Оплатил заказчик ____________________________________________________________________
        </td>
    </tr>
    <tr>
        <td style="text-align:center; font-size:8pt;">
            подпись / ФИО
        </td>
    </tr>
    <tr>
        <td style="height:50px;">
            Принял  _____________________________________________________________________________
        </td>
    </tr>
    <tr>
        <td style="text-align:center; font-size:8pt;">
            подпись / ФИО
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            М.П. <?php  //echo $date2[2]." ".$m1." ".$date2[0];?>
        </td>
    </tr>
</table>

<table style="width:100%; border-top:1px dotted #000;">
    <tr>
        <td style="font-size:8pt;">
            ИП  ГЕРАСЬКОВ   ВАЛЕНТИН   СЕРГЕЕВИЧ <br>
            ИНН 540439724400  ОГРНИП 315547600039872 <br>
            614023, г.Пермь, ул.Буксирная д.4 <br>
            Тел. +7 (342) 217-90-70	<br>
        </td>
    </tr>
    <tr>
        <td style="height:50px;">
            <b>КВИТАНЦИЯ № <?php //echo $datacontractuser['id_zakazkamera']." от ".$date1[2]." ".$m." ".$date1[0];?>	</b><br> на оплату услуг
        </td>
    </tr>
    <tr>
        <td style="height:50px;">
            Заказчик: <?php //echo $datacontractuser['client']." удостоверение ".$datacontractuser['pasport']." тел.".$datacontractuser['phone']; ?>
        </td>
    </tr>
    <tr style="width:100%;">
        <td style="width:100%; text-align:center;">
            <table style="width:100%; border:1px solid #000;">
                <tr>
                    <td style="vertical-allign:middle; text-align:center; border:1px solid #000; height:30px;">ВИД РАБОТ</td>
                    <td style="vertical-allign:middle; text-align:center; border:1px solid #000; height:30px;">СТОИМОСТЬ</td>
                </tr>
                <tr>
                    <td style="vertical-allign:middle; text-align:left; border:1px solid #000; height:30px;"><?php //echo $datacontractuser['opisanie']; ?></td>
                    <td style="vertical-allign:middle; text-align:center; border:1px solid #000; height:30px;"><?php //echo $datacontractuser['price']; ?> руб.</td>
                </tr>
                <tr>
                    <td style="vertical-allign:middle; text-align:right; border:1px solid #000; height:30px; padding-right:10px;"><b>ИТОГО</b></td>
                    <td style="vertical-allign:middle; text-align:center; border:1px solid #000; height:30px;"><?php //echo $datacontractuser['price']; ?> руб.</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            В том числе наличными денежными средствами <?php //echo $datacontractuser['price']; ?> руб.
        </td>
    </tr>
    <tr>
        <td style="height:30px;">
            Вся работа выполненна с надлежащим качеством и в соответствии с заданием заказчика, притензий по качеству выполнения работ не имеется.
        </td>
    </tr>
    <tr>
        <td style="height:50px;">
            Оплатил заказчик ____________________________________________________________________
        </td>
    </tr>
    <tr>
        <td style="text-align:center; font-size:8pt;">
            подпись / ФИО
        </td>
    </tr>
    <tr>
        <td style="height:50px;">
            Принял  _____________________________________________________________________________
        </td>
    </tr>
    <tr>
        <td style="text-align:center; font-size:8pt;">
            подпись / ФИО
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            М.П. <?php //echo $date2[2]." ".$m1." ".$date2[0];?>
        </td>
    </tr>
</table>


<!-- Разрыв страницы -->
<p class="more"></p>

<table style="width:100%;">
    <tr>
        <td colspan="2" style="text-align:center">ДОГОВОР № <?php //echo $datacontractuser['id_zakazkamera']."-ОК"; ?><br>
            осуществление работ по антикоррозионной защите </br>
            в стационарных камерах</td>
    </tr>
    <tr>
        <td style="text-align:left; padding-left:50px;">г.Пермь</td>
        <td style="text-align:right; padding-right:50px">
            <?php

            //echo $date1[2]." ".$m." ".$date1[0];

            ?>
        </td>
    </tr>
    <tr>
        <td colspan="2"><p style="padding-top:10px; padding-bottom:10px;"><b>Индивидуальный Предприниматель Гераськов Валентин Сергеевич</b>, именуемое в дальнейшем Подрядчик, в лице директора Гераськова Валентина Сергеевича, действующего на основании  Устава,  и <b><?php //echo $datacontractuser['client']; ?></b> паспорт серия <?php //echo $datacontractuser['pasport']; ?>. Тел. <?php //echo $datacontractuser['phone']; ?>, именуемый в дальнейшем Заказчик, с другой стороны, заключили настоящий договор о нижеследующем:</p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; font-size:9pt;"><b>1.ПРЕДМЕТ ДОГОВОРА</b></td>
    </tr>
    <tr>
        <td colspan="2"><p>1.1. Подрядчик обязуется выполнить собственными силами по заданию Заказчика следующие работы: <b><?php //echo $datacontractuser['opisanie']; ?></b> в цехах расположенных по адресу г.Пермь ул.Буксирная д.4., а Заказчик обязуется принять результат работ и уплатить обусловленную цену.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>1.2. При выполнении  работ Подрядчик  самостоятельно определяет способы выполнения задания Заказчика.</p></td>
        </td>
    <tr>
        <td colspan="2"><p>1.3. Настоящий договор составлен в двух экземплярах, по одному каждой из сторон. Оба экземпляра договора имеют одинаковую юридическую силу.</p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; padding-top:10px; font-size:9pt;"><b>2.СРОК ВЫПОЛНЕНИЯ РАБОТ</b></td>
    </tr>
    <tr>
        <td colspan="2"><p>2.1. Подрядчик приступает к выполнению оговоренных в настоящем договоре работ в течение одного рабочего дня с момента поступления изделий на площадку подрядчика по адресу: г.Пермь ул.Буксирная д.4.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>2.2. Сроки выполнения работ с <b> <?php //echo $date1[2]." ".$m." ".$date1[0]; ?> по <?php //echo $date2[2]." ".$m1." ".$date2[0];?></b> </p></td>
    </tr>
    <tr>
        <td colspan="2"><p>2.3. Сроки выполнения работ могут быть изменены по согласованию сторон.</p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; padding-top:10px; font-size:9pt;"><b>3.СТОИМОСТЬ РАБОТ. ПОРЯДОК РАСЧЕТА</b></td>
    </tr>
    <tr>
        <td colspan="2"><p>3.1. Цена работ по настоящему договору устанавливается на основании согласованных сторонами прайсовой цены и составляет <b><?php //echo $datacontractuser['price']; ?></b> руб. без НДС. Цена работ является твердой и может быть изменена только по соглашению сторон.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>3.2. Расчеты за оговоренные в настоящем договоре работы производятся Заказчиком в форме передачи наличных денежных средств, либо по соглашению сторон в любой не запрещенной действующим законодательством форме.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>3.3. Заказчик уплачивает Подрядчику окончательную стоимость работ при приемки выполненных работ.</p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; padding-top:10px; font-size:9pt;"><b>4.СРОК ДЕЙСТВИЯ ДОГОВОРА</b></td>
    </tr>
    <tr>
        <td colspan="2"><p>4.1. Срок действия договора исчисляется с момента его подписания и до полного выполнения сторонами своих обязательств. </p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; padding-top:10px; font-size:9pt;"><b>5.ПРАВА И ОБЯЗАННОСТИ ИСПОЛНИТЕЛЯ</b></td>
    </tr>
    <tr>
        <td colspan="2"><p>5.1. Подрядчик обязан выполнить все работы в объеме и в сроки, предусмотренные в  договоре, а также надлежащего качества, то есть в соответствии с заданием Заказчика, технической документацией и действующими нормами, стандартами, правилами и техническими условиями (далее – «Обязательные требования»), сдать Заказчику результат работ.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>5.2. При необходимости осуществлять временное хранение конструкций и обеспечивать их сохранность при нахождении на территории Подрядчика. Но не более 3х суток с момента уведомления Заказчика о готовности конструкций.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>5.3. Подрядчик обязан немедленно (не позднее одних суток с момента обнаружения) известить Заказчика и до получения от него указаний приостановить работы при обнаружении:<br>
                - непригодности или недоброкачественности предоставленных Заказчиком материалов и технической документации;<br>
                - возможных неблагоприятных для Заказчика последствий выполнения его указаний о способе исполнения работы;<br>
                - иных обстоятельств, угрожающих годности или прочности результатов выполняемой работы либо создающих невозможность ее завершения в срок.
                Заказчик обязан дать Подрядчику указания относительно порядка дальнейших действий Подрядчика в срок не более 2 (двух) рабочих дней от даты получения уведомления Подрядчика. Уведомления могут быть переданы любым доступным способом, телефон, факс, электронная почта, бумажное письмо. В случаи отсутствия ответа от Заказчика в течение установленного срока, подрядчик переводит конструкции на временное хранение и начисляет штрафные санкции за хранение в соответствии со стоимостью услуг утвержденным на данный момент.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>5.4. Подрядчик обязан исполнять полученные в ходе выполнения работ указания Заказчика, если  такие указания не противоречат условиям настоящего договора и соответствуют принятым нормам и стандартам.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>5.5. Подрядчик обязан обеспечить выполнение работ необходимыми материалами, оборудованием. В случае предоставления материалов и оборудования Заказчиком Подрядчик обязан принять их, обеспечить их сохранность, использовать предоставленные Заказчиком материалы экономно, расчетливо, бережно.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>5.6. Подрядчик не вправе использовать в ходе осуществления работ материалы и оборудование, предоставленные Заказчиком, или выполнять указания последнего, если это может привести к нарушению обязательных требований или ухудшению качества результата работ. При обнаружении указанных фактов Подрядчик действует согласно п. 5.3. настоящего договора.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>5.7. Подрядчик при выполнении работ руководствуется стандартами ГОСТ (Российский стандарт) или ISO (Международный стандарт).</p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; padding-top:10px; font-size:9pt;"><b>6.ПРАВА И ОБЯЗАННОСТИ ЗАКАЗЧИКА</b></td>
    </tr>
    <tr>
        <td colspan="2"><p>6.1. Заказчик обязан предоставить Подрядчику металлоконструкции или изделия для производства работ, в сроки объеме установленные настоящим договором </p></td>
    </tr>
    <tr>
        <td colspan="2"><p>6.2. Заказчик обязан оплатить выполненные работы в порядке и в сроки, предусмотренные настоящим договором.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>6.3. Заказчик имеет право запрашивать всю необходимую документацию, получать от исполнителя разъяснение по факту выполнения работ.</p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; padding-top:10px; font-size:9pt;"><b>7.ПРОИЗВОДСТВО И ПРИЕМКА РАБОТ</b></td>
    </tr>
    <tr>
        <td colspan="2"><p>7.1. Все поставляемые для выполнения работ материалы должны иметь соответствующие сертификаты и другие документы, удостоверяющие их качество. Заказчик в любое время имеет право проверять качество используемых Подрядчиком материалов.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>7.2. В случае обнаружения Заказчиком некачественного выполнения работ Заказчик вправе по своему выбору потребовать от Подрядчика:<br>
                - безвозмездного устранения недостатков в установленный Заказчиком срок;<br>
                - соразмерного уменьшения установленной цены работ (при этом Заказчик не вправе удерживать размер уменьшения из оплаты Подрядчику);<br>
                - возмещения своих расходов на устранение недостатков.</p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; padding-top:10px; font-size:9pt;"><b>8.ГАРАНТИИ</b></td>
    </tr>
    <tr>
        <td colspan="2"><p>8.1. Подрядчик гарантирует:<br>
                - выполнение всех работ в полном объеме и в сроки, предусмотренные настоящим договором;<br>
                - качество выполнения всех работ в соответствии с технической документацией и действующими стандартами и требованиями;<br>
                - своевременное устранение недостатков и дефектов, допущенных Подрядчиком, в сроки, предусмотренные настоящим договором.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>8.2. Гарантия на работы устанавливается сроком на <b>12 мес.</b></p></td>
    </tr>
    <tr>
        <td colspan="2"><p>8.3. В случае обнаружения недостатков (дефектов) выполненных Подрядчиком работ Заказчик уведомляет Подрядчика о необходимости направления своего представителя для составления акта обнаруженных дефектов. Если в установленный Заказчиком срок Подрядчик не направит уполномоченного представителя, Заказчик составляет односторонний акт обнаруженных дефектов, и направляет его Подрядчику.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>8.4. Гарантия не распространяется на механические повреждения (сколы, царапины, прожоги) возникшие вследствие монтажных, разгрузочно-погрузочных работ или ввиду специфики эксплуатации изделия.</p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; padding-top:10px; font-size:9pt;"><b>9.ОТВЕТСТВЕННОСТЬ СТОРОН</b></td>
    </tr>
    <tr>
        <td colspan="2"><p>9.1. Во всем, что не предусмотрено условиями настоящего договора, стороны руководствуются действующим законодательством. Спорные вопросы решаются путем переговоров, в случае недостижения согласия – Арбитражным судом по месту нахождения Исполнителя.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>9.2. Заказчик не несет ответственности за травмы, увечья или смерть работников Подрядчика, происшедшие не по вине Заказчика, а также в случае нарушения Подрядчиком или их работниками правил и инструкций по охране труда, промышленной и пожарной безопасности.</p></td>
    </tr>
    <tr>
        <td colspan="2"><p>9.3. Если при исполнении работ обнаруживаются препятствия к надлежащему исполнению договора, не зависящие от Подрядчика, и Подрядчик устраняет эти препятствия, Заказчик  возмещает  расходы  Подрядчика по такому устранению.</p></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center; padding-top:10px; font-size:9pt;"><b>10. ЮРИДИЧЕСКИЕ АДРЕСА И РЕКВИЗИТЫ</b></td>
    </tr>
    <tr>
        <td><p><b>ИСПОЛНИТЕЛЬ:</b><br>
                ИП Гераськов Валентин Сергеевич<br>
                Почтовый адрес: 614023, РФ, Пермский край, г.Пермь, ул.Буксирная д.4 офис.301<br>
                Тел./Факс. +7 (342) 217-90-70<br>
                Email. info@corozi.ru<br>
                http://пескоструем.рф<br>
                ИНН 540439724400<br>
                <br>
                <br>
                ______________________ / Гераськов В.С. /<br>
                (подпись)</p>
        </td>
        <td style="width:50%;"><p><b>ЗАКАЗЧИК:</b><br>
                <?php //echo $datacontractuser['client']; ?><br>
                <?php //echo $datacontractuser['pasport']; ?><br>
                <?php //echo $datacontractuser['phone']; ?> <br>
                ______________________ /  _____________ /<br>
                (подпись)<br>
                <br>
                Работы все выполнены в срок
                и с надлежащим качеством <br><br>
                ______________________ / _____________/ <br>
                (подпись)</p></td>
    </tr>
</table>

<!-- Разрыв страницы -->
<p class="more"></p>
vvvv