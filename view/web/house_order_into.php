<?php include 'common/header.php';?>
<div class="container">
	<?php include 'common/sidebar_house.php';?>
	<div class="frame">
		<table class="table" cellpadding="0" cellspacing="1">
			<thead>
				<tr>
					<td width="6%">序号</td>
					<td width="14%">入住/退房时间</td>
					<td width="8%">客人来源</td>
					<td width="8%">支付方式</td>
					<td width="10%">房屋类型</td>
					<td width="6%">房间号</td>
					<td width="10%">入住人</td>
					<td width="10%">联系方式</td>
					<td width="8%">费用共计</td>
					<td>操作</td>
				</tr>
			</thead>
			<tbody v-for="page in pages">
				<tr>
					<td>{{page}}</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						<a href="">换房</a>
						<a href="">退房</a>
						<a href="">查看</a>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="pagination">
			<a href=""><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
			<a href=""><i class="fa fa-angle-left" aria-hidden="true"></i></a>
			<a href="">1</a>
			<span>2</span>
			<a href="">3</a>
			<a href="">4</a>
			<a href="">5</a>
			<a href="">6</a>
			<span>…</span>
			<a href="">16</a>
			<a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			<select name="" id="" v-model="pages">
				<option v-bind:value="12">每页12条</option>
				<option v-bind:value="24">每页24条</option>
				<option v-bind:value="36">每页36条</option>
				<option v-bind:value="48">每页48条</option>
			</select>
		</div>
	</div>
</div>
<script>
	new Vue({
		el:'#middle',
		data:{
			pages:12,
		}
	});
</script>
<?php include 'common/footer.php';?>