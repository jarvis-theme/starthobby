<div class="row">
	<div id="slider">
		<ul class="bxslider">
			@foreach (slideshow() as $val)
			<li>
				@if(!empty($val->url))
                <a href="{{filter_link_url($val->url)}}" target="_blank">
                @else
                <a href="#">
                @endif
					{{HTML::image(slide_image_url($val->gambar), $val->title, array('class'=>'slide_gbr'))}}
				</a>
			</li>
			@endforeach
		</ul>
	</div>
</div>