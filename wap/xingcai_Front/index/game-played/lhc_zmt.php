<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<?php 
	$locs = array(387 => '1', 393 => '2',  394 => '3', 395 => '4', 396 => '5', 397 => '6');
	$names = array(387 => '正一', 393 => '正二',  394 => '正三', 395 => '正四', 396 => '正五', 397 => '正六');
 ?>
<div class="dGameStatus hklhc lotteryView_lhc" action="tzlhcSelect" length="1">
                <div class="Contentbox" id="Contentbox_0">
        <div class="lhcBox" >
		
		<table class="liutable">
			<thead class="head">
				<th>号码</th>
				<th>赔率</th>
				<th>金额</th>
				<th>号码</th>
				<th>赔率</th>
				<th>金额</th>
			</thead>
			<tbody>
				<tr>
					<td><span class="lhc_img lhc_bj_01" ><i>01</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO01',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO01" name="LOTTO<?=$locs[$this->played] ?>" acno="<?=$names[$this->played] ?>01"  maxlength="5" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_02"><i>02</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO02',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO02" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>02" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_03" ><i>03</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO03',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO03" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>03" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_04"><i>04</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO04',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO04" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>04" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_05" ><i>05</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO05',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO05" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>05" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_06"><i>06</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO06',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO06" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>06" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_07" ><i>07</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO07',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO07" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>07" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_08"><i>08</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO08',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO08" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>08" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_09" ><i>09</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO09',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO09" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>09" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_10"><i>10</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO10',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO10" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>10" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_11" ><i>11</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO11',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO11" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>11" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_12"><i>12</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO12',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO12" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>12" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_13" ><i>13</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO13',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO13" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>13" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_14"><i>14</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO14',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO14" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>14" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_15" ><i>15</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO15',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO15" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>15" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_16"><i>16</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO16',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO16" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>16" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_17" ><i>17</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO17',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO17" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>17" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_18"><i>18</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO18',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO18" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>18" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_19" ><i>19</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO19',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO19" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>19" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_20"><i>20</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO20',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO20" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>20" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_21" ><i>21</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO21',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO21" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>21" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_22"><i>22</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO22',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO22" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>22" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_23" ><i>23</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO23',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO23" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>23" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_24"><i>24</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO24',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO24" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>24" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_25" ><i>25</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO25',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO25" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>25" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_26"><i>26</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO26',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO26" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>26" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_27" ><i>27</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO27',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO27" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>27" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_28"><i>28</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO28',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO28" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>28" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_29" ><i>29</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO29',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO29" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>29" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_30"><i>30</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO30',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO30" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>30" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_31" ><i>31</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO31',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO31" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>31" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_32"><i>32</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO32',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO32" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>32" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_33" ><i>33</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO33',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO33" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>33" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_34"><i>34</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO34',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO34" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>34" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_35" ><i>35</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO35',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO35" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>35" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_36"><i>36</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO36',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO36" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>36" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_37" ><i>37</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO37',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO37" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>37" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_38"><i>38</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO38',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO38" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>38" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_39" ><i>39</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO39',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO39" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>39" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_40"><i>40</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO40',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO40" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>40" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_41" ><i>41</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO41',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO41" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>41" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_42"><i>42</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO42',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO42" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>42" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_43" ><i>43</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO43',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO43" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>43" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_44"><i>44</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO44',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO44" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>44" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_45" ><i>45</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO45',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO45" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>45" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_46"><i>46</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO46',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO46" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>46" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_47" ><i>47</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO47',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO47" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>47" type="text"></span></td>
						
					<td><span class="lhc_img lhc_bj_48"><i>48</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO48',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO48" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>48" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class="lhc_img lhc_bj_49" ><i>49</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLO49',$this->played)?></span></td>
					<td><span class="input amount"><input id="RteLO49" name="LOTTO<?=$locs[$this->played] ?>" maxlength="5" acno="<?=$names[$this->played] ?>49" type="text"></span></td>
				</tr>
			</tbody>
		</table>
		
		
		<table class="liutable">
			<thead class="head">
				<th>号码</th>
				<th>赔率</th>
				<th>金额</th>
				<th>号码</th>
				<th>赔率</th>
				<th>金额</th>
			</thead>
			<tbody>
				<tr>
					<td><span class=""><i>大</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLOzt1d',$this->played)?></span></td>
					<td><span class="input amount"><input maxlength="5" id="RteLOzt1d" name="LTTBSOE" acno="<?=$names[$this->played] ?>大" type="text"></span></td>
						
					<td><span class=""><i>小</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLOzt1x',$this->played)?></span></td>
					<td><span class="input amount"><input maxlength="5" id="RteLOzt1x" name="LTTBSOE" acno="<?=$names[$this->played] ?>小" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>红</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLOzt1h',$this->played)?></span></td>
					<td><span class="input amount"><input maxlength="5" id="RteLOzt1h" name="LTTBSOE" acno="<?=$names[$this->played] ?>红" type="text"></span></td>
						
					<td><span class=""><i>单</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLOzt1dd',$this->played)?></span></td>
					<td><span class="input amount"><input maxlength="5" id="RteLOzt1dd" name="LTTBSOE" acno="<?=$names[$this->played] ?>单" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>双</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLOzt1s',$this->played)?></span></td>
					<td><span class="input amount"><input maxlength="5" id="RteLOzt1s" name="LTTBSOE" acno="<?=$names[$this->played] ?>双" type="text"></span></td>
						
					<td><span class=""><i>蓝</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLOzt1l',$this->played)?></span></td>
					<td><span class="input amount"><input maxlength="5" id="RteLOzt1l" name="LTTBSOE" acno="<?=$names[$this->played] ?>蓝" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>合单</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLOzt1hd',$this->played)?></span></td>
					<td><span class="input amount"><input maxlength="5" id="RteLOzt1hd" name="LTTBSOE" acno="<?=$names[$this->played] ?>合单" type="text"></span></td>
						
					<td><span class=""><i>合双</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLOzt1ss',$this->played)?></span></td>
					<td><span class="input amount"><input maxlength="5" id="RteLOzt1ss" name="LTTBSOE" acno="<?=$names[$this->played] ?>合双" type="text"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>绿</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteLOzt1lv',$this->played)?></span></td>
					<td><span class="input amount"><input maxlength="5" id="RteLOzt1lv" name="LTTBSOE" acno="<?=$names[$this->played] ?>绿" type="text"></span></td>
				</tr>
			</tbody>
		</table>
		
		</div>    </div>
            </div>
		
				<div class="addOrderBox" >
                <div class="addOrderLeft addOrderLeft625">
                                   
                   <input type="button" class="addBtn" onclick="bringRte();" value="添加投注">
                    <div class="chooseMsg">
                        <p>总金额共 <span id="sTotalCredit">0</span> 元</p>
                    </div>
                </div>
           
            </div>