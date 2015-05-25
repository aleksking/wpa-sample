<h1>WPA REGISTRATION RATES</h1>

<span style="font-size:18px; color:#2d5c88;">Delegates, Students and other Professionals</span>
<br>
<p>Attending all Congress Scientific Sessions<br>
  Participation in Opening Ceremony, Welcome Cocktail and Closing Ceremonies<br>
  Admission to Exhibit Area<br>
  Congress bag, Congress Documents, Abstract, Final Programme and other congress materials<br>
  Coffee Breaks
</p>

<table border="0" class="rate_list">
    <th>REGISTRATION FEES <br><span>WPA Philippines 2016</span></th>
    <th>EARLY BIRD FEE <br><span>Until Nov 2015</span></th>
    <th>ADVANCE FEE <br><span>Nov 2015 - Feb 2016</span></th>
    <th>ONSITE FEE <br><span>Feb 2016 Onwards</span></th>
  <tr>
    <td>Psychiatrist/Physician from Group A Country</td>
    <td>P26,100.00 / USD 580</td>
    <td>P29,250.00 / USD 650</td>
    <td>P32,400.00 / USD 720</td>
  </tr>
  <tr>
    <td>Psychiatrist/Physician from Group B Country</td>
    <td>P20,250 / USD 450</td>
    <td>P23,400.00 / USD 520</td>
    <td>P26,100.00 / USD 580</td>
  </tr>
  <tr>
    <td>Psychiatrist/Physician from Group C Country</td>
    <td>P18,000.00 /USD 400</td>
    <td>P20,250.00 / USD 450</td>
    <td>P23,400.00 / USD 520</td>
  </tr>
  <tr>
    <td>Psychiatrist/Physician from Group D Country</td>
    <td>P15,750.00 / USD 350</td>
    <td>P18,000.00 /USD 400</td>
    <td>P20,250.00 / USD 450</td>
  </tr>
  <tr>
    <td>PPA Member (In good Standing)</td>
    <td>P10,000.00</td>
    <td>P12,000.00</td>
    <td>P14,000.00</td>
  </tr>
 <tr>
    <td>** Students</td>
    <td>P9,000.00 / USD 200</td>
    <td>P11,250.00 / USD 250</td>
    <td>P13,500.00 /USD 300</td>
  </tr>
  <tr>
    <td>Other Professionals (Psychologists, Social Workers, Nurses, etc…)</td>
    <td>P18,000.00 / USD 400</td>
    <td>P20,250.00 / USD 450</td>
    <td>P22,500.00 / USD 500</td>
  </tr>
  <tr>
    <td>Daily Rate</td>
    <td>P15,750.00 / USD 350</td>
    <td>P20,250.00 / USD 450</td>
    <td>P23,400.00 / USD 520</td>
  </tr>
  <tr>
    <td>Pre Congress Workshops</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Gala Dinner</td>
    <td>P2,250.00 / USD 50</td>
    <td>P2,250.00 / USD 50</td>
    <td>P2,250.00 / USD 50</td>
  </tr>

</table>

<p>* Please refer to the list of countries by groups below<br>
* Current school ID is required to validate your status.</p>

<br>
<span style="font-size:18px; color:#2d5c88;">Group A : Upper and High Income Economies by world Bank</span>
<div style="clear:both"></div>

<table border="0" class="groupA">
  <tr>
  <?php
  $ac = 1;
  foreach ($group_a as $a) {
    echo '<td>'.$a.'</td>';
    echo ($ac % 4 == 0 )? '</tr><tr>':'';
    echo (count($group_a) == $ac && $ac % 4 != 0)? '</tr>':''; 
    $ac++;
  }
  ?>
</table>

<br>
<span style="font-size:18px; color:#2d5c88;">Group B: Upper-Middle - income economies by the World Bank</span>
<div style="clear:both"></div>

<table border="0" class="groupA">
  <tr>
  <?php
  $ac = 1;
  foreach ($group_b as $b) {
    echo '<td>'.$b.'</td>';
    echo ($ac % 4 == 0 )? '</tr><tr>':'';
    echo (count($group_b) == $ac && $ac % 4 != 0)? '</tr>':''; 
    $ac++;
  }
  ?>
</table>

<br>
<span style="font-size:18px; color:#2d5c88;">Group C: Lowe-Middle - income economies by the World Bank</span>
<div style="clear:both"></div>

<table border="0" class="groupA">
  <tr>
  <?php
  $ac = 1;
  foreach ($group_c as $c) {
    echo '<td>'.$c.'</td>';
    echo ($ac % 4 == 0 )? '</tr><tr>':'';
    echo (count($group_c) == $ac && $ac % 4 != 0)? '</tr>':''; 
    $ac++;
  }
  ?>
</table>

<br>
<span style="font-size:18px; color:#2d5c88;">Group D: Low-income economies by the World Bank</span>
<div style="clear:both"></div>

<table border="0" class="groupA">
  <tr>
  <?php
  $ac = 1;
  foreach ($group_d as $d) {
    echo '<td>'.$d.'</td>';
    echo ($ac % 4 == 0 )? '</tr><tr>':'';
    echo (count($group_d) == $ac && $ac % 4 != 0)? '</tr>':''; 
    $ac++;
  }
  ?>
</table>
  