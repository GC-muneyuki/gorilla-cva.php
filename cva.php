<?php
global $assets_path; ?>

<!--220331用-->
<?php if ( !is_page('pattern') ) : ?>
<section class="bannerCommon has_animation">
	<a href="<?php echo home_url("otokomigaki"); ?>" target="_blank"><img class="is-PC" src="<?php echo $assets_path; ?>/img/cva/bn_cont01p@2x.png" alt="男磨き不都合な真実・「男磨き」の真実を知っているか"><img class="is-SP" src="<?php echo $assets_path; ?>/img/cva/bn_cont01p_sp@2x.png" alt="男磨き不都合な真実・「男磨き」の真実を知っているか"></a>
	<a href="<?php echo home_url("monitor"); ?>" target="_blank"><img class="is-PC" src="<?php echo $assets_path; ?>/img/cva/bn_cont02p@2x.png" alt="「モニター募集」はこちら"><img class="is-SP" src="<?php echo $assets_path; ?>/img/cva/bn_cont02p_sp@2x.png" alt="「モニター募集」はこちら"></a>
	<a href="/membership/seminar/2021/08/13/1175/" target="_blank"><img class="is-PC" src="<?php echo $assets_path; ?>/img/cva/bn_cont03p@2x.png" alt="窪塚洋介と青木源太のトークセミナー"><img class="is-SP" src="<?php echo $assets_path; ?>/img/cva/bn_cont03p_sp@2x.png" alt="窪塚洋介と青木源太のトークセミナー"></a>
</section>
<?php else:?>
<section class="bannerCommon has_animation">
	<a href="<?php echo home_url("otokomigaki"); ?>" target="_blank"><img class="is-PC" src="<?php echo $assets_path; ?>/img/cva/bn_cont02.png" alt="男磨き不都合な真実・「男磨き」の真実を知っているか"><img class="is-SP" src="<?php echo $assets_path; ?>/img/cva/bn_cont02_sp.png" alt="男磨き不都合な真実・「男磨き」の真実を知っているか"></a>
	<a href="<?php echo home_url("interview"); ?>" target="_blank"><img class="is-PC" src="<?php echo $assets_path; ?>/img/cva/bn_cont.png" alt="特別インタビュー・自分だけの男らしさを選ぼう"><img class="is-SP" src="<?php echo $assets_path; ?>/img/cva/bn_cont_sp.png" alt="特別インタビュー・自分だけの男らしさを選ぼう"></a>
</section>
<?php endif;?>

<section class="cva">
    <div class="cvaPC">
        <div class="cvaPC__tel">
            <span class="cvaReserve" style="font-size:16px">お電話でのご予約・ご相談</span>
        </div>
        <div class="cvaPC__first">
            <span style="margin-bottom: 4px;">はじめてご来院の方</span>

            	<a class="cvaPhonea" style="font-size: 28px;" href="tel:0120-987-118" >
            	<img class="cvaPhoneimg" src="<?php echo $assets_path; ?>/img/cva/icon_smartphone.png">0120-987-118
            	</a>

            <time class="cvaTime">診療時間11：00〜20：00</time>
        </div>
        <div style="margin-left: 26px;" class="cvaPC__prc">
            <span>診察券をお持ちの方</span>
            <ul class="cvaPC--btnWrapper">
                <li><a href="<?php echo home_url("reserve"); ?>" class="btn-primary">ご予約・ご相談フォーム</a></li>
                <li><a href="<?php echo home_url("revisit"); ?>" class="btn-sub">各院フリーダイヤル一覧</a></li>
                <li><a href="<?php echo home_url("pr"); ?>" class="btn-white">取材・プレス関連</a></li>
            </ul>
        </div>
    </div>
	<div class="cvaSP">
		<div class="cvaSP__contact">
			<span class="cvaSP__contact--subtitle">Appointment</span>
			<span class="cvaSP__contact--title">ご予約・ご相談</span>
			<p>当日・翌日分のご予約はお電話でご連絡ください。<br />
				受付時間：11時-20時</p>
			<a href="<?php echo home_url("reserve"); ?>" class="btn-primary">ご予約・ご相談フォーム</a>
		</div>
		<div class="cvaSP__tel">
			<span class="cvaSP__tel--label">お電話でのご予約はこちら</span>
			<ul class="cvaSP--btnWrapper">
				<li><span class="cvaSP--btnlabel">初めてご来院の方</span>
					<a href="tel:0120-987-118" class="btn-sub">0120-987-118</a>
				</li>
				<li>
					<span class="cvaSP--btnlabel">診察券をお持ちの方</span>
					<a href="<?php echo home_url("revisit"); ?>" class="btn-sub">各院フリーダイヤル一覧</a>
				</li>
			</ul>
		</div>
	</div>
</section>



<!-- 20220712  -->
<style>
	.cvaPhoneimg {
		display: inline;
		width: auto;
		padding-right: 12px;
		height: 29px;
		vertical-align: middle;
	}
	
    @media screen and (min-width:980px) and (max-width:1084px) {
	.cvaPhonea {
		font-size: 1.867vw!important;
	}
	.cvaTime {
		margin-top:14px!important;
		font-size: 12px!important;
	}
	.cvaPhoneimg{
	    font-size: 1.967vw!important;
		height: 21px!important;
		padding-right: 6px!important;
		vertical-align: middle!important;
	}
	.cvaReserve {
		font-size: 1.267vw!important;
	}
}
</style>



