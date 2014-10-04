---
layout: page
title: Blog

---
<article class="container">
{% for post in page.posts %}
  {% unless post.draft %}
    <section class="index">
        <div>
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
            {% endif %}
        </div>
        <hr>
    </section>
    {% endunless %}
    {% endfor %}
    <section class="pagination" style="text-align:center">
      {% if paginator.previous_page %}
        {% if paginator.previous_page == 1 %}
        <a href="/" class="btn btn-outline">‹ Newer</a>
        {% else %}
        <a href="/page{{ paginator.previous_page }}" class="btn btn-outline">‹ Newer</a>
        {% endif %}
      {% endif %}
      {% if paginator.next_page %}
        <a href="/page{{ paginator.next_page }}" class="btn btn-outline">Older ›</a>
      {% endif %}
    </section>
</article>
