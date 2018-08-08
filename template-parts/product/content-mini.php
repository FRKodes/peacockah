<div class="product-container col col-sm-6 col-md-4">
	<div class="inner-container">
		<div class="photo"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
		<div class="info">
			<div class="title text-center mayus"><a class="black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<div class="text-center mayus active-substance"><?php (get_field('sustancia')) ? the_field('sustancia') : '&nbsp;' ?></div><?php 
			$terms = get_the_terms($post->ID, 'product_category_use');
			foreach ($terms as $term) {?>
				<div class="category mayus text-center italic">
					<a class="<?php echo $term->slug; ?>" href="<?php if($_SERVER['HTTP_HOST'] !== 'peacock.test'){ echo '/demo'; } ?>/uso/<?php echo $term->slug; ?>"><?php echo $term->name;?></a>
				</div><?php
			}?>
		</div>
	</div>
</div>