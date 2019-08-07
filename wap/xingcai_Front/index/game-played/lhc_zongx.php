<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<script>
function checkANM(idStr){
	if(idStr){
		$("input[name='txtBP']").attr("checked",false);
		switch(idStr){
			case "O":
				var len=$("input[name='txtBP']").length;
				for(var i=0; i<len; i++){
					if($("input[name='txtBP']:eq("+i+")").attr("oe")==idStr){
						$("input[name='txtBP']:eq("+i+")").attr("checked",true);
					}
				}
			break;	
			
			case "E":
				var len=$("input[name='txtBP']").length;
				for(var i=0; i<len; i++){
					if($("input[name='txtBP']:eq("+i+")").attr("oe")==idStr){
						$("input[name='txtBP']:eq("+i+")").attr("checked",true);
					}
				}
			break;	

			
			default:
				var sid=idStr.split(",");
				for(var i=0; i<sid.length; i++){
					$("#ANM"+sid[i]).attr("checked",true);
				}
			break;
			
		}
		
	}
	lhcGameMsgAutoTip();
}
</script>




	<div class="dGameStatus hklhc lotteryView_sxtw" action="tzlhcSelect" length="1">
		<div class="Contentbox" id="Contentbox_0">
		<div class="sxtwBox" >
		
		<div class="dGameStatus hklhc lotteryView_lhc1" action="tzlhcSelect" length="1">
                <div class="Contentbox" id="Contentbox_0">
        <div class="lhcBox11" >
		
			<table class="liutable">
			<thead class="head">
				<th>类别</th>
				<th>赔率</th>
				<th>选择</th>
			</thead>
			<tbody>
				<tr>
					<td><span class=""><i>二肖</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZX2x',$this->played)?></span></td>
					<td><span class="input amount"><input class="radio_input" rel="2" value="ZX2x" id="RteZX2x" name="txtGameItem" type="radio" pri="<?=$this->getLHCRte('RteZX2x',$this->played)?>"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>三肖</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZX3x',$this->played)?></span></td>
					<td><span class="input amount"><input class="radio_input" rel="3" value="ZX3x" id="RteZX3x" name="txtGameItem" type="radio" pri="<?=$this->getLHCRte('RteZX3x',$this->played)?>"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>四肖</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZX4x',$this->played)?></span></td>
					<td><span class="input amount"><input class="radio_input" rel="3" value="ZX4x" id="RteZX4x" name="txtGameItem" type="radio" pri="<?=$this->getLHCRte('RteZX4x',$this->played)?>"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>五肖</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZX5x',$this->played)?></span></td>
					<td><span class="input amount"><input class="radio_input" rel="3" value="ZX5x" id="RteZX5x" name="txtGameItem" type="radio" pri="<?=$this->getLHCRte('RteZX5x',$this->played)?>"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>六肖</i></span></td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZX6x',$this->played)?></span></td>
					<td><span class="input amount"><input class="radio_input" rel="3" value="ZX6x" id="RteZX6x" name="txtGameItem" type="radio" pri="<?=$this->getLHCRte('RteZX6x',$this->played)?>"></span></td>
				</tr>
			</tbody>
		</table>
		
		</div>
                 
         </div>
              </div>
			  
		<table class="liutable">
			<thead class="head">
				<th>生肖</th>
				<th>号码</th>
				<th>选择</th>
			</thead>
			<tbody>
				<tr>
					<td><span class=""><i>鼠</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_23">23</span>
						<span class="lhc_img_test lhc_bj_35">35</span>
						<span class="lhc_img_test lhc_bj_47">47</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="O" value="01" id="ANM01" name="txtBP" acno="鼠"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>牛</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_10">10</span>
						<span class="lhc_img_test lhc_bj_22">22</span>
						<span class="lhc_img_test lhc_bj_34">34</span>
						<span class="lhc_img_test lhc_bj_46">46</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="E" value="02" id="ANM02" name="txtBP" acno="牛"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>虎</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_09">09</span>
						<span class="lhc_img_test lhc_bj_21">21</span>
						<span class="lhc_img_test lhc_bj_33">33</span>
						<span class="lhc_img_test lhc_bj_45">45</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="O" value="03" id="ANM03" name="txtBP" acno="虎"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>兔</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_08">08</span>
						<span class="lhc_img_test lhc_bj_20">20</span>
						<span class="lhc_img_test lhc_bj_32">32</span>
						<span class="lhc_img_test lhc_bj_44">44</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="E" value="04" id="ANM04" name="txtBP" acno="兔"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>龙</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_07">07</span>
						<span class="lhc_img_test lhc_bj_19">19</span>
						<span class="lhc_img_test lhc_bj_31">31</span>
						<span class="lhc_img_test lhc_bj_43">43</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="O" value="05" id="ANM05" name="txtBP" acno="龙"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>蛇</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_06">06</span>
						<span class="lhc_img_test lhc_bj_18">18</span>
						<span class="lhc_img_test lhc_bj_30">30</span>
						<span class="lhc_img_test lhc_bj_42">42</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="E" value="06" id="ANM06" name="txtBP" acno="蛇"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>马</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_05">05</span>
						<span class="lhc_img_test lhc_bj_17">17</span>
						<span class="lhc_img_test lhc_bj_29">29</span>
						<span class="lhc_img_test lhc_bj_41">41</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="O" value="07" id="ANM07" name="txtBP" acno="马"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>羊</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_04">04</span>
						<span class="lhc_img_test lhc_bj_16">16</span>
						<span class="lhc_img_test lhc_bj_28">28</span>
						<span class="lhc_img_test lhc_bj_40">40</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="E" value="08" id="ANM08" name="txtBP" acno="羊"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>鸡</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_02">02</span>
						<span class="lhc_img_test lhc_bj_14">14</span>
						<span class="lhc_img_test lhc_bj_26">26</span>
						<span class="lhc_img_test lhc_bj_38">38</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="O" value="09" id="ANM09" name="txtBP" acno="鸡"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>猴</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_03">03</span>
						<span class="lhc_img_test lhc_bj_15">15</span>
						<span class="lhc_img_test lhc_bj_27">27</span>
						<span class="lhc_img_test lhc_bj_39">39</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="E" value="10" id="ANM10" name="txtBP" acno="猴"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>狗</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_01">01</span>
						<span class="lhc_img_test lhc_bj_13">13</span>
						<span class="lhc_img_test lhc_bj_25">25</span>
						<span class="lhc_img_test lhc_bj_37">37</span>
						<span class="lhc_img_test lhc_bj_49">49</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="O" value="11" id="ANM11" name="txtBP" acno="狗"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>猪</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_12">12</span>
						<span class="lhc_img_test lhc_bj_24">24</span>
						<span class="lhc_img_test lhc_bj_36">36</span>
						<span class="lhc_img_test lhc_bj_48">48</span>
					</td>
					<td><span class="input amount"><input class="checkbox_input" type="checkbox" oe="E" value="12" id="ANM12" name="txtBP" acno="猪"></span></td>
				</tr>
				
			</tbody>
		</table>

		   
			  </div>  
			  </div>
            </div>
			
	    <div id="dResult">
		
        <input type="hidden" id="txtRate" value="0">
        <input type="button" value="重设" onclick="resetTotal();" class="anniu" name="重设">
        <input type="button" value="确定" onclick="checkToSubmit();" class="anniu" name="确定">
            
   <div class="chooseMsg1">
   <span>元</span><span id="sTotalCredit">0</span><span>总金额共</span>
        <input type="text" name="sTotalBeishu" id="sTotalBeishu" value="1" class="beishu" />
        <span>倍数</span>
    </div>