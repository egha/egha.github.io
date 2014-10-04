---
layout: blog
title: Blog

---

   <div class="meta">
                <time pubdate datetime="{{ post.date | date: "%Y-%d-%B" }}" title="{{ post.date | date: "%B %d, %Y" }}">{{ post.date | date: "%B %d, %Y" }}</time>
            </div>
            <h2 class="title"><a href="{% if post.link %}{{ post.link }}{% else %}{{ post.url }}{% endif %}" target="_blank" rel="prefetch">{{ post.title }}</a></h2>
            <p>{{ post.excerpt }}</p>
            {% if post.source %}
                <div class="meta">
                    Source  &mdash; <address>{{ post.source }}</address>
                    <span>
                        <i class="fa fa-share-alt fa-lg"></i>
                    </span>
                </div>
  
