<h4>Ti è piaciuto questo post? Condividilo!</h4>
<ul class="social__share">
	<li><a class="social__share--button social__share--button-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Facebook</a></li>
	<li><a class="social__share--button social__share--button-twitter" href="https://twitter.com/home?status=<?php echo urlencode(get_the_title()); ?>%20<?php echo urlencode(get_permalink()); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Twitter</a></li>
	<li><a class="social__share--button social__share--button-google" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Google</a></li>
	<li><a class="social__share--button social__share--button-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>&summary=<?php echo urlencode(get_the_excerpt()); ?>&source=Giuseppegarbin.com" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">LinkedIn</a></li>
</ul>