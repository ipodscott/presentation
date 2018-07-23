<?php get_header();?>
<body style="background-image: url(<?php the_field('background_image');?>);">
	<div class="cd-slideshow-wrapper">
		
		<nav class="cd-slideshow-nav">
			<button class="cd-nav-trigger">
				Open Nav
				<span aria-hidden="true"></span>
			</button>
			
			<div class="cd-nav-items">
			<div class="fullscreen-header" onclick="go_full_screen()"><img src="<?php bloginfo('template_directory'); ?>/img/baseline-fullscreen-24px.svg"> </div>
			<div class="help-header"><img src="<?php bloginfo('template_directory'); ?>/img/question.svg"> </div>
				<ol>
			
					<?php while(has_sub_field("create_slides")): ?>
					
							<?php if(get_row_layout() == "single_slide"):?>
					 
							<li><a href="#<?php the_sub_field('single_slide_id');?>"><?php the_sub_field('single_slide_title');?></a></li>							   
									
						 
							<?php elseif(get_row_layout() == "add_slide_with_sub_slide"):?>
							
														
					
					<?php endif; ?>
					<?php endwhile; ?>
			
				</ol>
				
			</div> <!-- .cd-nav-items -->
		</nav> <!-- .cd-slideshow-nav -->
		
				<ol class="cd-slideshow">
					
					
					<?php while(has_sub_field("create_slides")): ?>
					
							<?php if(get_row_layout() == "single_slide"):?>
					 
							
							<li class="<?php if( get_sub_field('single_first_slide') ): ?> visible <?php endif; ?>" id="<?php the_sub_field('single_slide_id');?>">
								<div class="cd-slider-content">
									<div class="content-wrapper">
										
										
										<?php $selectLayout = get_sub_field('select_layout','option'); if($selectLayout == "full_width"){ ?>
										
										<div class="full" style="vertical-align: <?php the_sub_field('fw_vertical_alignment'); ?>">
										 <?php  the_sub_field('single_slide_content');?>
										</div>
										
										<?php }else if ($selectLayout == "fifty_fifty"){ ?>
										
										   <div class="half" style="vertical-align: <?php the_sub_field('left_vertical_alignment'); ?>"><?php  the_sub_field('left_side');?></div>
										   <div class="middle-line"></div>
										   <div class="half" style="vertical-align: <?php the_sub_field('right_vertical_alignment'); ?>"><?php  the_sub_field('right_side');?></div>
										   
										
										<?php }else if ($selectLayout == "thirty _seventy"){ ?>
										
										   <div class="thirty" style="vertical-align: <?php the_sub_field('left_vertical_alignment'); ?>"><?php  the_sub_field('left_side');?></div>
										   <div class="middle-line"></div>
										   <div class="seventy" style="vertical-align: <?php the_sub_field('right_vertical_alignment'); ?>"><?php  the_sub_field('right_side');?></div>
										   
										   
										   <?php }else if ($selectLayout == "seventy_thirty"){ ?>
										
										   <div class="seventy" style="vertical-align: <?php the_sub_field('left_vertical_alignment'); ?>"><?php  the_sub_field('left_side');?></div>
										   <div class="middle-line"></div>
										   <div class="thirty" style="vertical-align: <?php the_sub_field('right_vertical_alignment'); ?>"><?php  the_sub_field('right_side');?></div>
										   
										   

										
										<?php }else{ ?>
										
										  
										
										<?php } ?>
										
										
										
										
										
									</div>
								</div>
							</li>

														   
									
						 
							<?php elseif(get_row_layout() == "add_slide_with_sub_slide"):?>
																
									
									
									
								</ol> <!-- .sub-slides -->
							</li>
							
					
					<?php endif; ?>
					<?php endwhile; ?>
				
			
				</ol> <!-- .sub-slides -->
			</li>
		</ol> <!-- .cd-slideshow -->
	</div> <!-- .cd-slideshow-wrapper -->
	
<?php get_footer();?>