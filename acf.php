

<?php $i = .1;  $lk = .15;
	foreach($faq_block as $faq_blocks){ ?>
		<div class="col-sm-4 col-xs-12">
		  <div class="advantages-item wow fadeInUp" data-wow-delay="<? echo $i; ?>s">
		    <div class="advantages-item__img-wrapper">
		      <img src="<? echo kama_thumb_src('src=' . $faq_blocks['faq_block_img'] . '&w=36&h=36'); ?>" alt="">
		    </div>
		    <p class="advantages-item__text">
		      <?=$faq_blocks['faq_block_text']; ?>
		    </p>
		  </div>
		</div>  
<?php   $i += $lk; } ?>


<? if(get_field('legal_text_left')) { ?>
  <p class="debt-item__p"> <? the_field('legal_text_left'); ?></p>
<? } ?>


	  <?  
	    $nameCompany = get_field('company_name', 'options');   
	    $politicsCompany = get_field('company_politics', 'options');   
	    $linkPolitics = get_field('company_politics_href', 'options');   
	  ?>
		<!--Footer-->
		  <footer id="footer">
		   <div class="top_footer">
		    <div class="container">  
		      <div class="row">
		        <div class="col-md-4 col-sm-4 col-xs-12">
		          <div class="footer-item">
		            <div class="copy"> <?=$nameCompany; ?></div>
		          </div>
		        </div>
		        <div class="col-md-4 col-sm-4 col-xs-12">
		          <div class="footer-item privacy">
		           <a href=" <?=$linkPolitics; ?>"><?=$politicsCompany; ?></a>
		          </div>
		        </div>
		        <div class="col-md-4 col-sm-4 col-xs-12">
		          <div class="footer-item">
		            <div class="development"><a href=" ">Разработка сайтов</a>  </div>
		          </div>
		        </div>
		      </div>
		    </div>
		   </div>

		 </footer>
		<!--Footer-end-->
