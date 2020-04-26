---
layout: default
published: true
title: Blog
order: 3
---
<body>
  <ul>
    {% for post in site.posts %}
      <li>
        <a class="post-title" href="{{ post.url }}">{{ post.title }}</a>
        <p>{{ post.excerpt }}</p>
      </li>
    {% endfor %}
  </ul>
<body>
