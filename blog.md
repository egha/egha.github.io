---
layout: page
title: Blog

---

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
  
