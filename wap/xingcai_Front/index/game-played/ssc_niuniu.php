<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<?php foreach(array('有牛') as $var){ ?>
<div class="pp" action="tz5xDwei" length="1" random="sscRandom">
	<div class="title"><?=$var?></div>
	&nbsp;
	<input type="button" value="牛一 " class="code reset2" />
	<input type="button" value="牛二 " class="code reset2" />
	<input type="button" value="牛三 " class="code reset2" />
	<input type="button" value="牛四 " class="code reset2" />
	<input type="button" value="牛五 " class="code reset2" />
	<input type="button" value="牛六 " class="code reset2" />
	<input type="button" value="牛七 " class="code reset2" />
	<input type="button" value="牛八 " class="code reset2" />
	<input type="button" value="牛九 " class="code reset2" />
	<input type="button" value="牛牛 " class="code reset2" />

	&nbsp;&nbsp;

</div>
<?php
	}
	
	$maxPl=$this->getPl($this->type, $this->played);
?>
<script type="text/javascript">
$(function(){
	gameSetPl(<?=json_encode($maxPl)?>);
})
</script>

