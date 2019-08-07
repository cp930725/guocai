<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<style type="text/css">
	input{
		border-color: #b0b0b0 !important;
	}
</style>
<div class="dGameStatus hklhc lotteryView_sxtw" action="tzlhcSelect" length="1">
      <div class="Contentbox" id="Contentbox_0">
        <div class="sxtwBox" >
		
			<table class="liutable">
				<thead class="head">
					<th>种类</th>
					<th>赔率</th>
					<th>金额</th>
				</thead>
				<tbody>
					<tr>
						<td><span class=""><i>红波</i></span></td>
						<td><span class="num odds"><?=$this->getLHCRte('Rte7SBhb',$this->played)?></span></td>
						<td><span class="input amount"><input type="text" id="Rte7SBhb" name="LHCQIBOSE" acno="红波" maxlength="5"></span></td>
					</tr>
					
					<tr>
						<td><span class=""><i>绿波</i></span></td>
						<td><span class="num odds"><?=$this->getLHCRte('Rte7SBlvb',$this->played)?></span></td>
						<td><span class="input amount"><input type="text" id="Rte7SBlvb" name="LHCQIBOSE" acno="绿波" maxlength="5"></span></td>
					</tr>
					
					<tr>
						<td><span class=""><i>蓝波</i></span></td>
						<td><span class="num odds"><?=$this->getLHCRte('Rte7SBlanb',$this->played)?></span></td>
						<td><span class="input amount"><input type="text" id="Rte7SBlanb" name="LHCQIBOSE" acno="蓝波" maxlength="5"></span></td>
					</tr>
					
					<tr>
						<td><span class=""><i>和局</i></span></td>
						<td><span class="num odds"><?=$this->getLHCRte('Rte7SBhj',$this->played)?></span></td>
						<td><span class="input amount"><input type="text" id="Rte7SBhj" name="LHCQIBOSE" acno="和局" maxlength="5"></span></td>
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