---
layout: base
---
<div class="blog-cover">
    <div id="blog-slider">
        <img src="/images/port1.jpg">
        <img data-src="/images/port2.jpg">
        <img data-src="/images/port3.jpg">
    </div>
    <section>
        <div class="container">
            <h1>{{ site.inc.title }}</h1>
            {% if site.inc.subtitle %}
                <h3>{{ site.inc.subtitle }}</h3>
            {% endif %}

            {% if site.inc.twitter %}
                <a class="social" href="https://twitter.com/{{ site.inc.twitter }}" title="Follow on Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            {% endif %}
            {% if site.inc.facebook %}
                <a class="social" href="http://facebook.com/{{ site.inc.facebook }}" title="Like on Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            {% endif %}
            <a class="social" href="/feed.xml" title="RSS Feed">
                <i class="fa fa-rss"></i>
            </a>
        </div>
    </section>
</div>


<article class="container">  
    
    <?php 

    $file = 'http://www.wtae.com/9682054?format=rss_2.0&view=feed';

    if(!$xml = simplexml_load_file($file)){
        echo "<font color=blue size=34>FEEDS WOULD BE UP SOON</font>";
    } 
    
    
    while($x<10){
$title=$xml->channel->item[$x]->title;
$link=$xml->channel->item[$x]->link ;
$des=$xml->channel->item[$x]->description;
$pubDate=$xml->channel->item[$x]->pubDate ;
echo "<section class=\"index\">
        <div>
            <div class=\"meta\">
                <time>$pubDate</time>
            </div>
            <h2 class=\"title\"><a href=\"$link\" target=\"_blank\" rel=\"prefetch\">$title</a></h2>
            <p></p>
            
                <div class=\"meta\">
                     <address>$des</address>
                    <span>
                        <i class=\"fa fa-share-alt fa-lg\"></i>
                    </span>
                </div>
            
        </div>
        <hr>
    </section>
    ";
$x++;   
}
?>
    
    <section class="pagination" style="text-align:center">
      
      
    </section>
</article>
