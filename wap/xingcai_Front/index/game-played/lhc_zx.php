<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<style type="text/css">
	.lotteryView_sxtw .sxtwBox dl dt.sxtitle span.sp1{
		width: 93px !important;
		border-right: 1px solid #F0AD4E;
		margin: 0 !important;
		padding: 0 !important;
		
	}
	.lotteryView_sxtw .sxtwBox dl dt.sxtitle span.sp2{
		width:182px !important;
		border-right: 1px solid #F0AD4E;
		margin: 0 !important;
		padding: 0 !important;
		
	}
	.lotteryView_sxtw .sxtwBox dl dd span.sp1{
		width: 93px !important;
		border-right: 1px solid #F0AD4E;
		margin: 0 !important;
		border-bottom: 1px solid #F0AD4E;
		padding: 0 !important;
		height: 34px !important;
		line-height: 34px !important;
		
	}.lotteryView_sxtw .sxtwBox dl dd span.sp1.input{
		width: 96px !important;
		border-right: none;
		margin: 0 !important;
		border-bottom: 1px solid #F0AD4E;
		padding: 0 !important;
		height: 34px !important;
		line-height: 34px !important;
		
	}
	.lotteryView_sxtw .sxtwBox dl dd span.sp2{
		width:182px !important;
		border-right: 1px solid #F0AD4E;
		margin: 0 !important;
		border-bottom: 1px solid #F0AD4E;
		padding: 0 !important;
		height: 34px !important;
		line-height: 34px !important;
		
	}
	.lotteryView_sxtw .sxtwBox dl dd .sp2 span.red{
		background: none;
		background-color: #F13131;
		height: 25px;
		width: 25px;
		line-height: 25px;
		text-align: center;
		border-radius: 50%;
		margin-top: 4px;
	}.lotteryView_sxtw .sxtwBox dl dd .sp2 span.blue{
		background: none;
		background-color: #2a74dd !important;
		height: 25px;
		width: 25px;
		line-height: 25px;
		text-align: center;
		border-radius: 50%;
		margin-top: 4px;
	}
	.lotteryView_sxtw .sxtwBox dl dd .sp2 span.green{
		background: none;
		background-color: #1ca01c  !important;
		height: 25px;
		width: 25px;
		line-height: 25px;
		text-align: center;
		border-radius: 50%;
		margin-top: 4px;
	}
	.lotteryView_sxtw .sxtwBox dl dd span.sp1.input input{
		display: block;
		margin:3px auto !important;
		border-color: #b0b0b0  !important;
	}
</style>
<div class="dGameStatus hklhc lotteryView_sxtw" action="tzlhcSelect" length="1">
                <div class="Contentbox" id="Contentbox_0">
        <div class="sxtwBox" >
		
				<table class="liutable">
			<thead class="head">
				<th>生肖</th>
				<th>号码</th>
				<th>赔率</th>
				<th>金额</th>
			</thead>
			<tbody>
				<tr>
					<td><span class=""><i>鼠</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_11">11</span>
						<span class="lhc_img_test lhc_bj_23">23</span>
						<span class="lhc_img_test lhc_bj_35">35</span>
						<span class="lhc_img_test lhc_bj_47">47</span>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXS',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXS" name="LTTBP" acno="鼠"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>牛</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_10">10</span>
						<span class="lhc_img_test lhc_bj_22">22</span>
						<span class="lhc_img_test lhc_bj_34">34</span>
						<span class="lhc_img_test lhc_bj_46">46</span>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXN',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXN" name="LTTBP" acno="牛"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>虎</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_09">09</span>
						<span class="lhc_img_test lhc_bj_21">21</span>
						<span class="lhc_img_test lhc_bj_33">33</span>
						<span class="lhc_img_test lhc_bj_45">45</span>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXH',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXH" name="LTTBP" acno="虎"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>兔</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_08">08</span>
						<span class="lhc_img_test lhc_bj_20">20</span>
						<span class="lhc_img_test lhc_bj_32">32</span>
						<span class="lhc_img_test lhc_bj_44">44</span>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXT',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXT" name="LTTBP" acno="兔"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>龙</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_07">07</span>
						<span class="lhc_img_test lhc_bj_19">19</span>
						<span class="lhc_img_test lhc_bj_31">31</span>
						<span class="lhc_img_test lhc_bj_43">43</span>
					</td>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXL',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXL" name="LTTBP" acno="龙"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>蛇</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_06">06</span>
						<span class="lhc_img_test lhc_bj_18">18</span>
						<span class="lhc_img_test lhc_bj_30">30</span>
						<span class="lhc_img_test lhc_bj_42">42</span>
					</td>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXShe',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXShe" name="LTTBP" acno="蛇"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>马</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_05">05</span>
						<span class="lhc_img_test lhc_bj_17">17</span>
						<span class="lhc_img_test lhc_bj_29">29</span>
						<span class="lhc_img_test lhc_bj_41">41</span>
					</td>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXSM',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXSM" name="LTTBP" acno="马"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>羊</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_04">04</span>
						<span class="lhc_img_test lhc_bj_16">16</span>
						<span class="lhc_img_test lhc_bj_28">28</span>
						<span class="lhc_img_test lhc_bj_40">40</span>
					</td>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXY',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXY" name="LTTBP" acno="羊"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>鸡</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_02">02</span>
						<span class="lhc_img_test lhc_bj_14">14</span>
						<span class="lhc_img_test lhc_bj_26">26</span>
						<span class="lhc_img_test lhc_bj_38">38</span>
					</td>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXJ',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXJ" name="LTTBP" acno="鸡"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>猴</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_03">03</span>
						<span class="lhc_img_test lhc_bj_15">15</span>
						<span class="lhc_img_test lhc_bj_27">27</span>
						<span class="lhc_img_test lhc_bj_39">39</span>
					</td>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXSHou',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXSHou" name="LTTBP" acno="猴"></span></td>
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
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXG',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXG" name="LTTBP" acno="狗"></span></td>
				</tr>
				
				<tr>
					<td><span class=""><i>猪</i></span></td>
					<td>
						<span class="lhc_img_test lhc_bj_12">12</span>
						<span class="lhc_img_test lhc_bj_24">24</span>
						<span class="lhc_img_test lhc_bj_36">36</span>
						<span class="lhc_img_test lhc_bj_48">48</span>
					</td>
					</td>
					<td><span class="num odds"><?=$this->getLHCRte('RteZXZ',$this->played)?></span></td>
					<td><span class="input amount"><input type="text" id="RteZXZ" name="LTTBP" acno="猪"></span></td>
				</tr>
			</tbody>
		</table>
		
	
			  </div>  
			  </div>
            </div>
		
				<div class="addOrderBox" >
                <div class="addOrderLeft addOrderLeftsxtw">
                                   
                   <input type="button" class="addBtn" onclick="bringRte();" value="添加投注">
                    <div class="chooseMsg">
                        <p>总金额共 <span id="sTotalCredit">0</span> 元</p>
                    </div>
                </div>
           
            </div>